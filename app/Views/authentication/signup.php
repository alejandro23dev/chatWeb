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
							<h3 class="opacity-40 font-weight-normal">Registrate</h3>
							<p class="opacity-40">Introduce tus credenciales</p>
						</div>

						<div class="mb-5">
							<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="email" placeholder="Correo Electrónico" autocomplete="off">
						</div>
						<div class="mb-5">
							<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Contraseña">
						</div>
						<div class="form-group text-center mt-10">
							<button id="kt_login_signin_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Registrarme</button>
						</div>
						<div class="mt-10">
							<span class="opacity-40 mr-4">Tienes una cuenta?</span>
							<a href="<?php echo base_url('Home/login')?>" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Iniciar Sesión</a>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>