<?php echo view('layout/header'); ?>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled">
	<div class="d-flex flex-column flex-root">
		<div class="login login-5 d-flex flex-row-fluid login-signin-on" id="kt_login">
			<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(assets/media/bg/bg-2.jpg);">
				<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
					<div class="d-flex flex-center mb-15">
						<a href="#">
							<img src="assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="">
						</a>
					</div>
					<div class="login-signin">
						<div class="mb-20">
							<h3 class="opacity-40 font-weight-normal">Verifica tu código</h3>
							<p class="opacity-40">Hemos enviado un código a tu email <?php echo $email; ?></p>
						</div>
						<div class="mb-5">
							<input id="" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Código" maxlength="5" autocomplete="off">
						</div>
						<div class="form-group text-center mt-10">
							<button id="kt_login_signin_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Verificar</button>
						</div>
						<div class="mt-10">
							<span class="opacity-40 mr-4">No ha llegado el código?</span>
							<a href="" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Reenviar</a>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

sci