<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Tutor Register | National Tutors</title>
<?php endblock();?>

<?php startblock('styles');?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/custom_styles.css');?>">
<?php endblock();?>

<?php startblock("body") ?>
<div class="container">

	<div class="row" style="margin-top: 10%;">
		<div class="col-xl"></div>

		<div class="col-xl">
			<h3>Register to National Tutors</h3>
			<form action="<?php site_url('home');?>">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="cnic">CNIC:</label>
					<input type="number" class="form-control" id="cnic" name="cnic">
				</div>
				<div class="form-group">
					<label for="fname">Father Name:</label>
					<input type="text" class="form-control" id="fname" name="fname">
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<input type="text" class="form-control" id="city" name="city">
				</div>
				<div class="form-group">
					<label for="caddress">Current Address:</label>
					<input type="text" class="form-control" id="caddress" name="caddress">
				</div>
				<div class="form-group">
					<label for="paddress">Permanent Address:</label>
					<input type="text" class="form-control" id="paddress" name="paddress">
				</div>
				<div class="form-group">
					<label for="phone">Phone:</label>
					<input type="number" class="form-control" id="phone" name="phone">
				</div>
				<div class="form-group">
					<label for="aphone">Alternative Phone:</label>
					<input type="number" class="form-control" id="aphone" name="aphone">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox"> Agree to Terms and Conditions.
					</label>
				</div>
				<button type="submit" class="btn btn-block btn-primary">Submit</button>
			</form>	
		</div>

		<div class="col-xl"></div>
	</div>
</div>

<?php endblock(); ?>