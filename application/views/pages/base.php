<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'template_module.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<?php startblock('title');?>
	<?php endblock();?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
	<script src="<?php echo base_url('assets/css/bootstrap/js/bootstrap.min.js');?>"></script>
	<?php startblock('scripts');?>
	<?php endblock();?>

	<link rel="icon" href="<?php echo base_url('assets/images/icon.ico');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css');?>">
	<?php startblock('styles');?>
	<?php endblock();?>
</head>
<body class="stylish-background">
	<?php startblock('body');?>
	<?php endblock();?>
</body>
</html>