<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Login | National Tutors</title>
<?php endblock();?>

<?php startblock("body") ?>
<!-- start Container Wrapper -->
<div class="container-wrapper">

	<!-- start Header -->
	<?php include 'header.php';?>
	<!-- end Header -->

	<!-- start Main Wrapper -->
	<div class="main-wrapper scrollspy-container">

		<div class="contact-page-wrapper">
			
			<div class="container">

				<div class="contact-map">

					<div class="row">

						<div class="col-sm-12 col-md-11 col-md-offset-1 mb-30">
							
								<?php echo form_open('Login/servlet','data-toggle="validator" class="contact-form-wrapper" id="login_from" method="post" ');?>
								
								<div class="row">
									
									<div class="col-sm-4"></div>
									<div class="col-sm-4">
										<span class="font12 text-danger">
											<?php 
												if(isset($login_error)){
													echo $login_error;
												}
											?>
										</span>
										<div class="form-group">
											<label for="inputEmail">
												Email <span class="font10 text-danger">(required)</span>
											</label>
											<input type="email" name="email" class="form-control" required="">
											<div class="help-block with-errors"></div>
										</div>


										<div class="form-group">
											<label for="inputName">
												Password<span class="font10 text-danger">(required)</span>
											</label>
											<input type="password" name="password" class="form-control" >
											<div class="help-block with-errors"></div>
										</div>

										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" required="">
										</div>
										<p>Don't have an acocunt? 
											<a href="#" class="btn-ajax-register" data-toggle="modal">
												Register
											</a>
										here!</p>

									</div>
									<div class="col-sm-4"></div>



								</div>

							</form>

						</div>

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