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


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Edutute</title>
	<meta name="description" content="HTML Responsive Landing Page Template for Course Online Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="study, learn, course, tutor, tutorial, teach, college, school, institute, teacher, instructor" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php startblock('meta');?>
	<?php endblock();?>

	<!-- Fav and Touch Icons -->
	<link rel="icon" href="<?php echo base_url('assets/images/national_tutor.ico');?>">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" media="screen">	
	<link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/plugin.css');?>" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
	<style type="text/css">
		.link-style{
			background-color: #7db139;
			border-radius: 0px;
			border-color:#7db139;
		}
		.link-style:hover{
			background-color:#648e2d;
			border-color:#648e2d;
		}
	</style>
	<?php startblock('styles');?>
	<?php endblock();?>
</head>
<body>
	<?php startblock('body');?>
	<?php endblock();?>




	<!-- JS -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.4.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-migrate-1.4.1.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.waypoints.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/SmoothScroll.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/spin.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.introLoader.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/typed.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/placeholderTypewriter.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slicknav.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.placeholder.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/select2.full.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/ion.rangeSlider.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/readmore.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/slick.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-rating.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/creditly.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-modalmanager.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-modal.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/customs.js');?>"></script>
	<?php startblock('scripts');?>
	<?php endblock();?>
</body>
</html>