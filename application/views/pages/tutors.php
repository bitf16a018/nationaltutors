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
	<div class="main-wrapper">
		
		<div class="pt-60 pb-70">
			
			<div class="container">

				<div class="row">
					<div class="col-sm-6 col-md-11 col-md-offset-1 mb-30">

						<form class="contact-form-wrapper" data-toggle="validator">

							<div class="row">

								<div class="col-sm-5">

									<div class="form-group">
										<label for="inputName">Search Criteria</label>
										<select class="form-control">
											<option>Subject</option>
											<option>Class</option>
											<option>Exprience-Level</option>
											<option>Age</option>
											<option>Gender</option>
										</select>
									</div>

								</div>

								<div class="col-sm-5">

									<div class="form-group">
										<label for="inputEmail">Your Input</label>
										<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
									</div>

								</div>

								<div class="col-sm-2">
									<button type="submit" style="margin-top: 25px; border: none; background-color: rgb(13,124,201); color: white; padding-left: 20px; padding-right: 20px; padding-top: 7px;padding-bottom: 7px;">Search</button>
								</div>

							</div>

						</form>

					</div>
				</div>

				<div class="section-title">
					<h2 class="text-center">Our Instructors</h2>
				</div>

				<div class="teacher-item-grid-wrapper">

					<div class="GridLex-gap-20">

						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-3_sm-4_xs-6_xss-12">

								<div class="teacher-item-grid">

									<a href="#">

										<div class="image">
											<img src="<?php echo base_url('assets/images/man/01.jpg');?>" alt="Image" />
										</div>

										<div class="content">
											<h3>Alexey Barnashov</h3>
											<p class="labeling">Computer Teacher</p>

										</div>

									</a>

									<ul class="meta-list">
										<li>He have taught <span class="text-danger font700">12 courses</span></li>
									</ul>

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