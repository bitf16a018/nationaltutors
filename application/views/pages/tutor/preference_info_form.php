<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Tutor Register | National Tutors</title>
<?php endblock();?>


<?php startblock('styles');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dropdown.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2-bootstrap.min.css');?>">
<style type="text/css">
	.select2-container--bootstrap .select2-results__option[aria-selected=true] {
		background-color: #d6d6d6;
		color: black;
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

				<h4>Tutor Preferences</h4>

				<div class="contact-map">

					<div class="row">

						<?php echo form_open_multipart('Tutor/preference_info_servlet','data-toggle="validator" class="contact-form-wrapper" id="registeration_from" method="post"');?>

						<div class="col-sm-12 col-md-11 col-md-offset-1 mb-30">
							<div class="row">
								<div class="row">
									<div class="font10 text-danger">
										<?php if(isset($empty_form_error)) echo $empty_form_error;?>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12" id="classes-multiple-dropdown">
										<label for="inputEmail">Preffered Classes<span class="font10 text-danger">(required)</span></label>
										<select class="form-control" id="prefered_classes" name="classes[]" multiple="multiple"></select>
										<div class="font10 text-danger">
											<?php if(isset($classes_error)) echo $classes_error;?>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-12" id="subjects-multiple-dropdown">
										<label for="inputEmail">Preffered Subjects<span class="font10 text-danger">(required)</span></label>
										<select class="form-control" id="prefered_subjects" name="subjects[]" multiple="multiple"></select>
										<div class="font10 text-danger">
											<?php if(isset($subjects_error)) echo $subjects_error;?>
										</div>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="col-sm-12" id="areas-multiple-dropdown">
										<label for="inputEmail">Preffered Areas<span class="font10 text-danger">(required)</span></label>
										<select class="form-control" id="prefered_areas" name="areas[]" multiple="multiple"></select>
										<div class="font10 text-danger">
											<?php if(isset($areas_error)) echo $areas_error;?>
										</div>
									</div>
								</div>

								<br>
								<div class="row">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary btn-block mt-5">Save</button>
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
<script type="text/javascript" src="<?php echo base_url('assets/js/select2.full.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dropdown-multiple-selection.js');?>"></script>
<?php endblock();?>