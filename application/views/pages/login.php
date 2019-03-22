<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Login | National Tutors</title>
<?php endblock();?>

<?php startblock('styles');?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/custom_styles.css');?>">
<?php endblock();?>

<?php startblock("body") ?>
<div class="container">

	<div class="row" style="margin-top: 10%;">
		<div class="col-xl"></div>

		<div class="col-xl">
			<h3>Login to National Tutors</h3>
			<form action="<?php site_url('home');?>">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<button type="submit" class="btn btn-block btn-primary">Submit</button>
			</form>		
		</div>

		<div class="col-xl"></div>
	</div>
</div>

<?php endblock(); ?>