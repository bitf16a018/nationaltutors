<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Tutor Register | National Tutors</title>
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

						<form class="contact-form-wrapper" data-toggle="validator">
							<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">

								
								<div class="row">
									
									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
											<input id="inputName" type="text" class="form-control" data-error="Your name is required" required>
										</div>

									</div>

									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>
									
									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputName">Father Name <span class="font10 text-danger">(required)</span></label>
											<input id="inputName" type="text" class="form-control" data-error="Your name is required" required>
										</div>

									</div>

									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputEmail">Your CNIC <span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputEmail">City<span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputEmail">Phone<span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>



									<div class="col-sm-6">
										
										<div class="form-group">
											<label for="inputEmail">Alternative Phone<span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputMessage">Permanent Address<span class="font10 text-danger">(required)</span></label>
											<textarea id="inputMessage" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputMessage">Mailing Address <span class="font10 text-danger">(required)</span></label>
											<textarea id="inputMessage" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
											<div class="help-block with-errors"></div>
										</div>

									</div>

								</div>

							</div>
							<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">

								
								<div class="row">
									
									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputName">Teacing Experience Level (1-5)<span class="font10 text-danger">(required)</span></label>
											<select class="form-control">
												<option>1 (no experience)</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5 (expert)</option>
											</select>
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputEmail">Preffered Classes<span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputEmail">Preffered Subjects<span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										
										<div class="form-group">
											<label for="inputEmail">Preffered Areas<span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>

									<div class="col-sm-12">
										<div class="form-group">
											<label for="exampleFormControlFile1">Attach your Documents</label>
											<input multiple="multiple" type="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>

									<div class="col-sm-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">
												Default checkbox
											</label>
										</div>
									</div>

									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary mt-5">Register</button>
									</div>

								</div>


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