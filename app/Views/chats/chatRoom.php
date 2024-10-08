<?php echo view('layout/header'); ?>

<style>
	.card-body {
		height: 600px;
		overflow-y: auto;
		padding: 16px;
		border-radius: 8px;
		scroll-behavior: smooth;
	}

	#messages {
		overflow-y: scroll;
		flex: 1;
		scroll-behavior: smooth;
		box-sizing: border-box;
	}
</style>

<div class="mt-10 container h-100 w-100">
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header align-items-center px-4 py-3">
			<div class="text-left flex-grow-1">
				<!--begin::Aside Mobile Toggle-->
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md d-lg-none" id="kt_app_chat_toggle">
					<span class="svg-icon svg-icon-lg">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24"></rect>
								<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"></path>
								<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"></path>
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Dropdown Menu-->
				<div class="dropdown dropdown-inline">
					<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ki ki-bold-more-hor icon-md"></i>
					</button>
					<div class="dropdown-menu p-0 m-0 dropdown-menu-left dropdown-menu-md">
						<ul class="navi navi-hover py-5">
							<li class="navi-item">
								<a href="<?php echo base_url('Chats'); ?>" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-list-3"></i>
									</span>
									<span class="navi-text">Usuarios</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--end::Dropdown Menu-->
			</div>
			<div class="text-center flex-grow-1">
				<div class="text-dark-75 font-weight-bold font-size-h5"><?php echo $contact[0]->user; ?> <span id="isTyping"></span></div>
				<div id="status-on-off-<?php echo $contact[0]->id; ?>"> <span class="label label-sm label-dot label-danger"></span><span class="font-weight-bold text-muted font-size-sm">Fuera de línea</span></div>
			</div>
			<div class="text-right flex-grow-1">
				<!--begin::Dropdown Menu-->
				<div class="dropdown dropdown-inline">
					<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="svg-icon svg-icon-lg">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24"></polygon>
									<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
									<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</button>
					<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
						<!--begin::Navigation-->
						<ul class="navi navi-hover py-5">
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-drop"></i>
									</span>
									<span class="navi-text">New Group</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-list-3"></i>
									</span>
									<span class="navi-text">Contacts</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-rocket-1"></i>
									</span>
									<span class="navi-text">Groups</span>
									<span class="navi-link-badge">
										<span class="label label-light-primary label-inline font-weight-bold">new</span>
									</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-bell-2"></i>
									</span>
									<span class="navi-text">Calls</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-gear"></i>
									</span>
									<span class="navi-text">Settings</span>
								</a>
							</li>
							<li class="navi-separator my-3"></li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-magnifier-tool"></i>
									</span>
									<span class="navi-text">Help</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-bell-2"></i>
									</span>
									<span class="navi-text">Privacy</span>
									<span class="navi-link-badge">
										<span class="label label-light-danger label-rounded font-weight-bold">5</span>
									</span>
								</a>
							</li>
						</ul>
						<!--end::Navigation-->
					</div>
				</div>
				<!--end::Dropdown Menu-->
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body">
			<div id="messages">
				<div class="alert alert-custom alert-light-dark fade show mb-5" role="alert" id="alert-not-messages">
					<div class="alert-icon">
						<i class="flaticon-warning"></i>
					</div>
					<div class="alert-text">No hay mensajes</div>
				</div>
			</div>
		</div>
		<div class="card-footer align-items-center">
			<textarea id="txt-message" class="form-control border-0 p-0" rows="2" placeholder="Escribe un mensaje"></textarea>
			<div class="d-flex align-items-center justify-content-between mt-5">
				<div class="mr-3">
					<a href="#" class="btn btn-clean btn-icon btn-md mr-1">
						<i class="flaticon2-photograph icon-lg"></i>
					</a>
					<a href="#" class="btn btn-clean btn-icon btn-md">
						<i class="flaticon2-photo-camera icon-lg"></i>
					</a>
				</div>
				<div>
					<button type="button" id="btn-submit" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Enviar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<audio id="not-sound" src="<?php echo base_url('public/assets/sounds/not1.mp3'); ?>"></audio>
<audio id="sent-sound" src="<?php echo base_url('public/assets/sounds/notSent.mp3'); ?>"></audio>

<script type="module">
	const notSound = document.getElementById('not-sound');
	const sentSound = document.getElementById('sent-sound');

	import {
		io
	} from "https://cdn.socket.io/4.7.5/socket.io.esm.min.js";

	const message = document.getElementById("txt-message");
	const messages = document.getElementById("messages");
	const submit = document.getElementById("btn-submit");

	let username = "<?php echo $user['user']; ?>";
	let sentUserID = "<?php echo $user['userID']; ?>";
	let contactUserID = "<?php echo $contact[0]->id; ?>";

	const socket = io('http://localhost:3000', {
		transports: ['websocket'],
		query: {
			userID: sentUserID,
		}
	});

	socket.on('connect', () => {
		console.log('Connected to the server');
		socket.emit('getMessages', sentUserID, contactUserID);
	});

	socket.on("message", (msg, userID, date, deleted) => {
		let msj;

		if(msg)
		$('#alert-not-messages').attr('hidden', true);

		if (userID == sentUserID) {
			msj = `
			<div class="d-flex flex-column mb-5 align-items-end">
				<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">${msg}</div>
			</div>
				
		    `;
			if (deleted == 1) {
				msj = `
			<div class="d-flex flex-column mb-5 align-items-end">
				<div class="mt-2 rounded p-5 bg-light-danger text-dark-50 font-weight-bold font-size-lg text-right max-w-400px"><i class="flaticon2-trash mr-1"></i><em>Has eliminado este mensaje "${msg}"</em></div>
			</div>
				
		    `;
			}

			sentSound.play();
		} else {
			msj = `
		  <div class="d-flex flex-column mb-5 align-items-start">
				<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">${msg} </div>
			</div>
		    `;

			if (deleted == 1) {
				msj = `
		  <div class="d-flex flex-column mb-5 align-items-start">
				<div class="mt-2 rounded p-5 bg-light-danger text-dark-50 font-weight-bold font-size-lg text-left max-w-400px"><em>Este mensaje ha sido eliminado</em><i class="flaticon2-trash ml-1"></i></div>
			</div>
		    `;
			}

			notSound.play();
		}
		messages.insertAdjacentHTML("beforeend", msj);
		//socket.auth.serverOffset = serverOffset;


		const cardBody = messages.parentNode; // obtiene el padre del div con id messages, que es el div con clase card-body
		cardBody.scrollTop = cardBody.scrollHeight;
	});

	socket.on("is-typing", (msg, sentUserID, contactID) => {
		if (sentUserID != "<?php echo $user['userID']; ?>" && contactID == "<?php echo $user['userID']; ?>")
			document.getElementById("isTyping").innerHTML = msg;
	});

	socket.on("stop-typing", (sentUserID) => {
		document.getElementById("isTyping").innerHTML = "";
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

	submit.addEventListener("click", () => {
		if (message.value) {
			socket.emit("stop-typing");
			socket.emit("message", message.value, sentUserID, contactUserID, "<?php echo date('Y-m-d h:i:s'); ?>");
			$("#txt-message").val("");
		}
	});

	let typingTimer = null;

	message.addEventListener("keydown", () => {
		if (typingTimer) {
			clearTimeout(typingTimer);
		}
		socket.emit("typing", sentUserID, contactUserID);
	});

	message.addEventListener("keyup", () => {
		typingTimer = setTimeout(() => {
			socket.emit("stop-typing", sentUserID);
		}, 5000); // 5 segundos
	});

	function formatTime(date) {

		const hours = date.getHours() % 12 || 12;

		const minutes = date.getMinutes();

		const ampm = date.getHours() >= 12 ? 'PM' : 'AM';

		return `${hours}:${minutes.toString().padStart(2, '0')} ${ampm}`;

	}
</script>