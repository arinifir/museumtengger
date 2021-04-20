<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/'); ?>images/logo.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url('assets/admin'); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?= base_url('assets/admin'); ?>/assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/admin'); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin'); ?>/assets/css/atlantis.min.css">
	<style>
		.ck-editor__editable_inline {
			min-height: 500px !important;
		}

		.time-collection{
			text-transform: uppercase !important;
			font-size: 13px !important;
			letter-spacing: .1em !important;
			color: #ccc !important;
		}
	</style>

</head>