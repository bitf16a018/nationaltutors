
<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Home | National Tutors</title>
<?php endblock();?>

<?php startblock("body") ?>
<!-- start Container Wrapper -->
<div class="container-wrapper">

	<!-- start Header -->
	<?php include 'header.php';?>
	<!-- end Header -->

	<!-- start Main Wrapper -->
	<div class="main-wrapper scrollspy-container">

		<!-- start Promo -->
		<div class="promo-box-bg-img">

			<div class="container">
				<div class="row">

					<div class="col-sm-12">


						<div class="row">
							<?php if(isset($alert_message)){?>

								<div class="alert alert-success alert-dismissible">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Hurrah!</strong> <?php echo $alert_message;?>
								</div>

							<?php }?>
						</div>

						<div class="section-title">
							<h2 class="text-center">Congatulations! you're going to be a part of National<strong>Tutors</strong></h2>
							
							<?php if(isset($main_message)) echo '<p>' . $main_message . '</p>';?>
						</div>

						<div class="col-md-3 col-sm-4 mb-20 mt-30">
							<div class="row text-center">
								Personal Information<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
							</div>
							<div class="row">
								<div class="mt-20 col-sm-12 text-center">
									<a href="#" class="btn btn-primary link-style">Personal Info</a>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-4 mb-20 mt-30">
							<div class="row text-center">Preference Information
								<?php $flag_1 = true; if(empty($preffered_classes) || empty($preffered_areas) || empty($preffered_subjects)){ $flag_1 = false;?>
									<span class="fa fa-fw fa-close" style="color: crimson;"></span>
								<?php }else{?>
									<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
								<?php }?>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center mt-20">
									<a href="<?php echo site_url('Tutor/preference_info');?>" class="btn btn-primary link-style">Preference Info</a>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-4 mb-20 mt-30">
							<div class="row text-center">Personal Documents
								<?php if(empty($personal_documents['cnic_pic_path_1']) || empty($personal_documents['cnic_pic_path_2'])){?>
									<span class="fa fa-fw fa-close" style="color: crimson;"></span>
								<?php }else{?>
									<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
								<?php }?>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center mt-20">
									<a href="<?php echo site_url('Tutor/personal_docs');?>" class="btn btn-primary link-style">Personal Documents</a>
								</div>
							</div>
						</div>


						<div class="col-md-3 col-sm-4 mb-20 mt-30">
							<div class="row text-center">Acadamic Documents
								<?php if(empty($acadamic_documents)){?>
									<span class="fa fa-fw fa-close" style="color: crimson;"></span>
								<?php }else{?>
									<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
								<?php }?>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center mt-20">
									<a href="<?php echo site_url('Tutor/academic_docs');?>" class="btn btn-primary link-style">Acadamic Documents</a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- end Promo -->

	</div>
	<!-- end Main Wrapper -->

	<!-- start Footer Wrapper -->
	<?php include 'footer.php' ?>
	<!-- end Footer Wrapper -->

</div>
<!-- end Container Wrapper -->


<?php endblock();?>
