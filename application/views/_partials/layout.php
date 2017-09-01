<!DOCTYPE html>
<html>
	<head>
		<title><?=isset($title)?$title:'Upp';?></title>
		<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

		<link rel='stylesheet' href='<?= base_url('assets/css/bootstrap.min.css'); ?>' />
		<link rel="stylesheet" href="<?= base_url('bower_components/font-awesome/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('bower_components/Ionicons/css/ionicons.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('bower_components/slick-carousel/slick/slick.css'); ?>">
		<link rel='stylesheet' href='<?= base_url('assets/css/admin.min.css'); ?>' />
		<link rel='stylesheet' href='<?= base_url('assets/css/skin-green.min.css'); ?>' />
		<link rel='stylesheet' href='<?= base_url('assets/css/override.css'); ?>' />
		<link	rel="shortcut icon"  href='<?= base_url('assets/img/favicon.ico'); ?>'/>
		<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

		<script type='text/javascript' src='<?= base_url('assets/js/jquery.min.js'); ?>'></script>
		<script type='text/javascript' src='<?= base_url('assets/js/bootstrap.min.js'); ?>'></script>
		<script type='text/javascript' src='<?= base_url('assets/js/bootstrap.validator.js'); ?>'></script>
		<script>
			var base_url = '<?=base_url();?>'
			var csrf_field = '<?=$this->security->get_csrf_token_name(); ?>'
			var csrf_value = '<?=$this->security->get_csrf_hash(); ?>'
		</script>
	</head>
	<body class="hold-transition skin-green sidebar-mini">
		<?= $header; ?>
		<div class='wrapper'>
			<?= $content; ?>
		</div>
		<?= $footer; ?>
	</body>
	<script type='text/javascript' src='<?= base_url('assets/js/admin.min.js'); ?>'></script>
	<script type='text/javascript' src='<?= base_url('assets/js/bootstrap.validator.js'); ?>'></script>
	<script type='text/javascript' src='<?= base_url('bower_components/moment/moment.js'); ?>'></script>
	<script type='text/javascript' src='<?= base_url('bower_components/remarkable-bootstrap-notify/bootstrap-notify.min.js'); ?>'></script>
	<script type='text/javascript' src='<?= base_url('bower_components/slick-carousel/slick/slick.js'); ?>'></script>
	<script type='text/javascript' src='<?= base_url('assets/js/override.js'); ?>'></script>

</html>
