<!DOCTYPE html>
<html lang="en">

<head>
	<base href="../../../../">
	<meta charset="utf-8" />
	<title>ChatWeb</title>
	<meta name="description" content="Singin page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="<?php echo base_url('public/assets/css/pages/login/login-4.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/assets/plugins/custom/prismjs/prismjs.bundle.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo base_url('public/assets/media/logos/favicon.ico'); ?>" />

	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#0BB783",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#D7F9EF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<script src="<?php echo base_url('public/assets/plugins/global/plugins.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/plugins/custom/prismjs/prismjs.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/js/scripts.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/js/pages/custom/login/login-4.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/js/js-cookie/dist/js.cookie.min.js')?>"></script>

	<script>
		function showWarningAlert(msg) {
			Swal.fire("Alerta!", msg, "warning");
		}

		function showRequiredValuesAlert() {
			Swal.fire("Alerta!", "Complete la información", "warning");
		}

		function showSuccessAlert(msg) {
			Swal.fire("Alerta!", msg, "success");
		}

		function showGlobalErrorAlert() {
			Swal.fire("Alerta!", "Ha ocurrido un error", "error");
		}
	</script>
</head>