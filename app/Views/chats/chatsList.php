<?php echo view('layout/header'); ?>

<body id="kt_body" class="header-fixed header-mobile-fixed">
	<div id="notification" class="notification" hidden>
		<div id="notification-content" class="notification-content">
		</div>
	</div>
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<div class="d-flex flex-column-fluid">
			<div class="container">
				<div class="row">
					<div class="col-12 mb-10">
						<h1>Usuarios</h1>
					</div>
					<?php foreach ($contacts as $c) { ?>
						<div class="col-6 col-md-4 col-lg-3">
							<a href="<?php echo base_url('Chats/chatRoom?contactID=') . $c->id; ?>" class="card card-custom cursor-pointer hover-opacity-75 card-user">
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between mb-5">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-50 mr-3">
												<img alt="Pic" src="assets/media/users/300_11.jpg">
											</div>
											<div class="d-flex flex-column">
												<div class="text-dark-75 font-weight-bold font-size-lg"><?php echo $c->user; ?></div>
												<span id="status-on-off-<?php echo $c->id; ?>" class="text-muted font-weight-bold font-size-sm status-div">
													<div><span class="label label-sm label-dot label-danger"></span><span class="font-weight-bold text-muted font-size-sm"> Fuera de línea</span></div>
												</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>

<audio id="not-sound" src="<?php echo base_url('public/assets/sounds/not1.mp3'); ?>"></audio>

<script type="module">
	import {
		io
	} from "https://cdn.socket.io/4.7.5/socket.io.esm.min.js";

	let username = "<?php echo $user['user']; ?>";
	let sentUserID = "<?php echo $user['userID']; ?>";
	const notification = document.getElementById('notification-content');
	const notSound = document.getElementById('not-sound');

	const socket = io('http://localhost:3000', {
		transports: ['websocket'],
		query: {
			userID: sentUserID,
		}
	});

	socket.on("message", (msg, userID, date, deleted) => {
		let msj = `<img src="assets/media/users/300_11.jpg" alt="Perfil de usuario" class="profile-picture">
		 <div class="message">
		     <span class="username">${userID}</span>
		     <p>${msg}</p>
			 <p class="text-muted text-right font-size-sm">${date}</>
		 </div>`;

		$('#notification').removeAttr('hidden').fadeIn(500).delay(5000).fadeOut(500);

		notification.innerHTML = msj;

		notSound.play();
	});

	socket.on('user-connecteds', (usersID) => {
		const html = '<div><span class="label label-sm label-dot label-success"></span><span class="font-weight-bold text-muted font-size-sm"> En Línea</span></div>';
		usersID.forEach((userID) => {
			const element = document.getElementById("status-on-off-" + userID);
			element.innerHTML = html;
		});
	});

	socket.on('user-disconnecteds', (usersID) => {
		const html = '<div><span class="label label-sm label-dot label-danger"></span><span class="font-weight-bold text-muted font-size-sm"> Fuera de Línea</span></div>';
		usersID.forEach((userID) => {
			const element = document.getElementById("status-on-off-" + userID);
			element.innerHTML = html;
		});
	});
</script>