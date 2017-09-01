<!DOCTYPE html>
<html>
	<head>
		<title><?=isset($title)?$title:'Upp';?></title>
		<link rel='stylesheet' href='<?= base_url('assets/css/bootstrap.min.css'); ?>' />
		<link rel='stylesheet' href='<?= base_url('assets/css/override.css'); ?>' />
		<script type='text/javascript' src='<?= base_url('assets/js/jquery.min.js'); ?>'></script>
		<script type='text/javascript' src='<?= base_url('assets/js/bootstrap.min.js'); ?>'></script>
		<script type='text/javascript' src='<?= base_url('assets/js/bootstrap.validator.js'); ?>'></script>
		<script>
			var base_url = '<?=base_url();?>'
			var csrf_field = '<?=$this->security->get_csrf_token_name(); ?>'
			var csrf_value = '<?=$this->security->get_csrf_hash(); ?>'
		</script>
	</head>
	<body>
		<?= $header; ?>
		<div class='smacss-body'>
			<?= $content; ?>
		</div>
		<?= $footer; ?>
	</body>

</html>
