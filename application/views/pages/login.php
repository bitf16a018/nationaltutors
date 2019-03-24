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

						<div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">
							
							<form class="contact-form-wrapper" data-toggle="validator">
								
								<div class="row">
									
									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
											<input id="inputName" type="text" class="form-control" data-error="Your name is required" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label>Subject</label>
											<input type="text" class="form-control" />
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
											<textarea id="inputMessage" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary mt-5">Send Message</button>
									</div>

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