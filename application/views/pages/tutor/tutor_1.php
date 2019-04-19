
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

			<div class="row">

				<div class="col-sm-12 col-sm-offset-1 col-md-10">

					<div class="section-title mb-30">
						<h2 class="text-center">Congatulations! you're going to be a part of National<strong>Tutors</strong></h2>
						<p>In order to work with National<strong>Tutuors</strong> you need to complete your profile.</p>
					</div>

					<div class="col-md-3 col-sm-4">Personal Information<span class="fa fa-fw fa-check" style="color: #79c44e;"></span></div>

					<div class="col-md-3 col-sm-4">Preference Information
						<?php if(empty($preffered_classes) || empty($preffered_areas) || empty($preffered_subjects)){?>
							<span class="fa fa-fw fa-close" style="color: crimson;"></span>
						<?php }else{?>
							<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
						<?php }?>
					</div>


					<div class="col-md-3 col-sm-4">Personal Documents
						<?php if(empty($personal_documents['cnic_pic_path_1']) || empty($personal_documents['cnic_pic_path_2'])){?>
							<span class="fa fa-fw fa-close" style="color: crimson;"></span>
						<?php }else{?>
							<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
						<?php }?>
					</div>


					<div class="col-md-3 col-sm-4">Acadamic Documents
						<?php if(empty($acadamic_documents)){?>
							<span class="fa fa-fw fa-close" style="color: crimson;"></span>
						<?php }else{?>
							<span class="fa fa-fw fa-check" style="color: #79c44e;"></span>
						<?php }?>
					</div>


					<div class="col-sm-12 text-center mt-40">
						<a href="#" class="btn btn-block btn-primary">Complete Profile</a>
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
