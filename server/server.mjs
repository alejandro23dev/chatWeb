import express from 'express';
import logger from 'morgan';
import path from 'path';
import { Server } from 'socket.io';
import { createServer } from 'node:http';
import { fileURLToPath } from 'url';
import { dirname } from 'path';
import cors from 'cors';
import connect from './dbconnect.mjs';

let db;

async function connectToDB() {
  db = await connect();
  console.log('Connected to database');
}

connectToDB();

const __dirname = dirname(fileURLToPath(import.meta.url));
const port = process.env.port ?? 3000;

const app = express();
const server = createServer(app);
const io = new Server(server, {
	connectionStateRecovery: {}
	}
);

app.use(cors({
	origin: '*',
	credentials: true
  }));

io.on("connection", async (socket) => {
	
	const userID = socket.handshake.query.userID;

	db.query(`UPDATE user SET status = 1 WHERE id = ?`, [userID], (err, results) => {
  	  if (err) {
  		console.error(err);
  	  } else {
  		console.log(`User ${userID} is now online`);
  	  }
  	});

	  io.emit('user-connected', userID);
  
	socket.on('disconnect', () => {
    db.query(`UPDATE user SET status = 0 WHERE id = ?`, [userID], (err, results) => {
  		if (err) {
  		  console.error(err);
  		} else {
  		  console.log(`User ${userID} is now offline`);
  		}
  	  });
  	  console.log('Desconectado del servidor');
		io.emit('user-disconnected', userID);
  	});
  
  socket.on('message', (msg, sent_userID, received_userID , sentUserName) => {
	db.query(`INSERT INTO messages (message, sent_userID, received_userID ) VALUES (?, ?, ?)`, 
		[msg, sent_userID, received_userID], 
		(err, results) => {
		  if (err) {
			console.error(err);
		  } else {
			io.emit('message', msg, sentUserName);
			  }
			}
		  );
	io.emit('message', msg)
  });

  socket.on('typing', (username) => {	
	io.emit('is-typing', `${username} está escribiendo...`);
});
	
  socket.on('stop-typing', () => {
	io.emit('stop-typing', '');
 });
});

app.use(logger('dev'))

app.get('/', (req, res) => {
	res.sendFile(path.join(__dirname, '../app/Views/chats/chatsList.html'));
  });

server.listen(port, ()=>{
	console.log(`Servidor puerto ${port}`)
})	