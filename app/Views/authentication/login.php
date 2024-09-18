<?php echo view('layout/header'); ?>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-5 d-flex flex-row-fluid login-signin-on" id="kt_login">
			<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(assets/media/bg/bg-2.jpg);">
				<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-15">
						<a href="#">
							<img src="assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="">
						</a>
					</div>
					<div class="login-signin">
						<div class="mb-20">
							<h3 class="opacity-40 font-weight-normal">Inicia Sesión</h3>
							<p class="opacity-40">Introduce las credenciales de tu cuenta</p>
						</div>

						<div class="mb-5">
							<input id="txt-email" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 required" type="email" placeholder="Correo Electrónico" autocomplete="off">
						</div>

						<div class="mb-5">
							<input id="txt-password" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 required" type="password" placeholder="Contraseña">
						</div>

						<div class="mb-5 align-items-end px-8 opacity-60">
							<a id="" class="text-white font-weight-bold">Olvidé la contraseña ?</a>
						</div>

						<div class="form-group text-center mt-10">
							<button id="btn-submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Iniciar Sesión</button>
						</div>
						<div class="mt-10">
							<span class="opacity-40 mr-4">No tines una cuenta aún?</span>
							<a href="<?php echo base_url('Home/signup') ?>" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Crear cuenta</a>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

<script>
	$(document).ready(function() {

		// if (Cookies.get('email') && Cookies.get('password')) {
		// 	$('#txt-email').val(Cookies.get('email'));
		// 	$('#txt-password').val(Cookies.get('password'));
		// 	setTimeout(() => {
		// 		$('#btn-submit').trigger('click');
		// 	}, 200);
		// }

		$('#btn-submit').on('click', function() {
			let email = $('#txt-email').val();
			let password = $('#txt-password').val();
			let checkRequiredValues = requiredValues();

			if (checkRequiredValues == 0) {
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('Home/loginProccess') ?>",
					data: {
						'email': email,
						'password': password
					},
					dataType: "json",
					success: function(res) {
						if (res.error == 0) {
							// Set cookie with email and password
							Cookies.set('email', email);
							Cookies.set('password', password);

							window.location.href = "<?php echo base_url('Chats'); ?>";
						} else if (res.error == 1) {
							if (res.msg == 'EMAIL_NOT_FOUND' || res.msg == 'INVALID_PASSWORD') {
								showWarningAlert('Rectifique sus credenciales');
								$('.required').each(function() {
									$(this).addClass('is-invalid');
								});
							} else
								showGlobalErrorAlert();
						}
					},
					error: function(error) {
						showGlobalErrorAlert();
					}
				});
			} else
				showRequiredValuesAlert();

		});

		function requiredValues() {
			let result = 0;

			$('.required').each(function() {
				if ($(this).val() == '') {
					$(this).addClass('is-invalid');
					$result = 1;
				}
			});

			return result;
		}

		$('.required').on('focus', function() {
			$(this).removeClass('is-invalid');
		});

		$('#txt-email').focus();
	});
</script>