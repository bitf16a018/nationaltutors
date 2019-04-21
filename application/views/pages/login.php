<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Login | National Tutors</title>
<?php endblock();?>

<?php startblock("body") ?>
<!-- start Container Wrapper -->
<div class="container-wrapper" style="padding-top: 30px;">

	<!-- start Main Wrapper -->
	<div class="main-wrapper scrollspy-container">

		<div class="contact-page-wrapper" style="padding-top: 0px;">
			
			<div class="container">

				<div class="contact-map">

					<div class="row">
						<div class="container">

							<?php echo form_open('Login/servlet','data-toggle="validator" class="contact-form-wrapper" id="login_from" method="post" ');?>


							<div class="col-sm-4"></div>
							<div class="col-sm-4">

								<div class="row" style="margin-bottom: 50px;">
										<div class="navbar-header col-sm-12">
											<a class="navbar-brand col-sm-12" style="padding:0px" href="<?php echo site_url('Home')?>">
												<img class="center-block img-responsive" style="width: 200px;" src="<?php echo base_url('assets/images/national_tutors_logo_small.png');?>">
											</a>
										</div>
								</div>

								<div class="row">
									<?php if(isset($login_after_register_message)){	?>

										<div class="alert alert-success alert-dismissible">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											<strong>Success!</strong> <?php echo $login_after_register_message;?>
										</div>

									<?php }else if(isset($login_error)){?>

										<div class="alert alert-danger alert-dismissible">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											<strong>Error!</strong> <?php echo $login_error;?>
										</div>

									<?php }?>
								</div>

								<div class="row">
									<div class="form-group">
										<label for="inputEmail">
											Email <span class="font10 text-danger">(required)</span>
										</label>
										<input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
										<div class="font10 text-danger">
											<?php if(form_error('email')) echo '*'.form_error('email');?>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<label for="inputName">
											Password<span class="font10 text-danger">(required)</span>
										</label>
										<input type="password" value="<?php echo set_value('password'); ?>" name="password" class="form-control" title="Your Password must contain atleast one lowercase, one uppercase, one digit and one special character(!@#$&*).">
										<div class="font10 text-danger">
											<?php if(form_error('password')) echo '*'.form_error('password');?>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #7db139; border-color:#7db139; border-radius: 0px" value="Login">
									</div>
								</div>

								<div class="row">
									<p>Don't have an acocunt? 
										<a href="<?php echo site_url('Tutor/register');?>">
											Register
										</a>
									as tutor here!</p>
								</div>

							</div>
							<div class="col-sm-4"></div>

						</form>
					</div>
				</div>

			</div>

		</div>

	</div>

</div>

</div>
<!-- end Main Wrapper -->

</div>
<!-- end Container Wrapper -->


<?php endblock();?>