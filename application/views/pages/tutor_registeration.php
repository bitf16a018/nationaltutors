<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Tutor Register | National Tutors</title>
<?php endblock();?>


<?php startblock('styles');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dropdown.css');?>">
<style type="text/css">
	input[type='checkbox'], input[type='radio']{
		display: block;
		opacity: 1;
	}
</style>
<?php endblock();?>

<?php startblock("body") ?>
<!-- placing data brought from data base by the server-->
<div style="display: none;" id="areas-json"><?php echo $areas; ?></div>
<div style="display: none;" id="classes-json"><?php echo $classes; ?></div>
<div style="display: none;" id="subjects-json"><?php echo $subjects; ?></div>
<!-- start Container Wrapper -->
<div class="container-wrapper">

	<!-- start Header -->
	<?php include 'header.php';?>
	<!-- end Header -->

	<!-- start Main Wrapper -->
	<div class="main-wrapper scrollspy-container">

		<div class="contact-page-wrapper">
			
			<div class="container">

				<h4>Tutor Registration</h4>

				<div class="contact-map">

					<div class="row">

						<?php echo form_open_multipart('Tutor/register_servlet','data-toggle="validator" class="contact-form-wrapper" id="registeration_from" method="post"');?>

						<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">
							<div class="row">

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
											<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
											<div class="font10 text-danger">
												<?php if(form_error('name')) echo '*'.form_error('name');?>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
											<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
											<div class="font10 text-danger">
												<?php if(form_error('email')) echo '*'.form_error('email');?>
												<?php if(isset($error_email_already_used)) echo '*'.$error_email_already_used;?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputName">Father Name <span class="font10 text-danger">(required)</span></label>
											<input type="text" class="form-control" name="fname" value="<?php echo set_value('fname'); ?>">
											<div class="font10 text-danger">
												<?php if(form_error('fname')) echo '*'.form_error('fname');?>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">Your CNIC <span class="font10 text-danger">(required)</span></label>
											<input type="number" class="form-control" name="cnic" value="<?php echo set_value('cnic'); ?>">
											<div class="font10 text-danger">
												<?php if(form_error('cnic')) echo '*'.form_error('cnic');?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">Phone<span class="font10 text-danger">(required)</span></label> 
											<input type="number" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>">
											<div class="font10 text-danger">
												<?php if(form_error('phone')) echo '*'.form_error('phone');?>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">Alternative Phone<span class="font10 text-danger">(required)</span></label>
											<input type="number" class="form-control" name="altphone" value="<?php echo set_value('altphone'); ?>">
											<div class="font10 text-danger">
												<?php if(form_error('altphone')) echo '*'.form_error('altphone');?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">City<span class="font10 text-danger">(required)</span></label>
											<select class="form-control" name="city">
												<option>Lahore</option>
												<option>Multan</option>
												<option>Karachi</option>
												<option>Islamabad</option>
												<option>Sheikhupura</option>
												<option>Farooqa(ok, that's not a city)</option>
												<option>Sargodha</option>
											</select>
											<div class="font10 text-danger">
												<?php if(form_error('city')) echo '*'.form_error('city');?>
											</div>
										</div>
									</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Attach your Profile Pic</label>
										<input name="profilepic" type="file" class="form-control-file" value="<?php echo set_value('profilepic'); ?>">
										<div class="font10 text-danger">
											<?php 
											if(isset($profilepic_errors))
											{
												echo '<b>Error uploading Profile pic!</b>';
												print_r($profilepic_errors);
											}
											?>
										</div>
									</div>
								</div>

								</div>


							<div class="row">



									<div class="col-sm-6">
										<div class="form-group">
											<label>Gender<span class="font10 text-danger">(required)</span></label><br>

											<label>
												<input type="radio" value="1" name="gender" id="male-gender" <?php echo set_radio('gender','1');?>>Male
											</label>
											<label>
												<input type="radio" value="0" name="gender" id="female-gender" <?php echo set_radio('gender','0');?>>Female
											</label>

											<div class="font10 text-danger">
												<?php if(form_error('gender')) echo '*'.form_error('gender');?>
											</div>
										</div>
									</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>
											<?php echo form_checkbox('termsandconditions', '1', set_checkbox('termsandconditions', '1'));?>
											Agree to Terms and Conditions.
										</label>
										<div class="font10 text-danger">
											<?php if(form_error('termsandconditions')) echo '*'.form_error('termsandconditions');?>
										</div>
									</div>
								</div>

							</div>

							</div>
						</div>

						<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">
							<div class="row">
								<div class="row">

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">Password <span class="font10 text-danger">(required)</span></label>
											<input type="password" title="Your Password must contain atleast one lowercase, one uppercase, one digit and one special character(!@#$&*)." value="<?php echo set_value('password'); ?>" class="form-control" name="password">
											<div class="font10 text-danger">
												<?php if(form_error('password')) echo '*'.form_error('password');?>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail">Confirm Password<span class="font10 text-danger">(required)</span></label>
											<input type="password" value="<?php echo set_value('cpassword'); ?>" class="form-control" name="cpassword">
											<div class="font10 text-danger">
												<?php if(form_error('cpassword')) echo '*'.form_error('cpassword');?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="inputName">Teaching Experience Level (1-5)<span class="font10 text-danger">(required)</span></label>
											<select class="form-control" name="experience">
												<option>1 (no experience)</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5 (expert)</option>
											</select>
											<div class="font10 text-danger">
												<?php if(form_error('experience')) echo '*'.form_error('experience');?>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="inputMessage">Mailing Address <span class="font10 text-danger">(required)</span></label>
											<textarea name="maddress" class="form-control" rows="2" minlength="20" maxlength="200"><?php echo set_value('maddress'); ?></textarea>
											<div class="font10 text-danger">
												<?php if(form_error('maddress')) echo '*'.form_error('maddress');?>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="inputMessage">Permanent Address<span class="font10 text-danger">(required)</span></label>
											<textarea name="paddress" class="form-control" rows="2" minlength="20" maxlength="200"><?php echo set_value('paddress'); ?></textarea>
											<div class="font10 text-danger">
												<?php if(form_error('paddress')) echo '*'.form_error('paddress');?>
											</div>
										</div>
									</div>
								</div>



							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary btn-block mt-5 link-style">Get Registered</button>
								</div>
							</div>

							</div>
						</div>


					</form>
				</div>

			</div>

		</div>

	</div>

</div>
<!-- end Main Wrapper -->

<!-- start Footer Wrapper -->
<?php include 'footer.php' ?>
<!-- end Footer Wrapper -->

</div>
<!-- end Container Wrapper -->


<?php endblock();?>


<?php startblock('scripts');?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dropdown.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dropdown-multiple-selection.js');?>"></script>
<?php endblock();?>