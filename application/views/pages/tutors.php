<?php include 'base.php' ?>

<?php startblock('title');?>
<title>Find Tutor | National Tutors</title>
<?php endblock();?>

<?php startblock('styles');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dropdown.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2-bootstrap.min.css');?>">
<style type="text/css">
	.select2-container .select2-selection--single .select2-selection__rendered {
		padding: 0px;
	}
	.select2-container .select2-selection--single {
		height: 40px;
		border-radius: 0px;
	}
</style>
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
										<label for="inputName">Area</label>
										<select id="area" class="form-control" name="area">
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>

								</div>

								<div class="col-sm-5">

									<div class="form-group">
										<label for="inputEmail">Subject</label>
										<select id="subject" class="form-control" name="subject">
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="WY">Wyoming</option>
										</select>
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

					<div class="GridLex-gap-20 cont">

						<div class="GridLex-grid-noGutter-equalHeight items-container">

							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
							<div class="GridLex-col-3_sm-4_xs-6_xss-12 single-item">

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
<?php startblock('scripts');?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dropdown.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/select2.full.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/find_tutor_select2.js');?>"></script>
<?php endblock();?>