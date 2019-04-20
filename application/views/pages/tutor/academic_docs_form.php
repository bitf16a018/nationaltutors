<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Tutor Register | National Tutors</title>
<?php endblock();?>


<?php startblock('styles');?>
<?php endblock();?>

<?php startblock("body") ?>
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

						<?php echo form_open_multipart('Tutor/academic_docs_servlet','data-toggle="validator" class="contact-form-wrapper" id="registeration_from" method="post"');?>


						<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">
							<div class="row">

								<div class="col-sm-6" id="attach-documents-div">
									<div class="form-group">
										<label>Attach your Documents</label>
										<input name="attatchments[]" type="file" class="form-control-file" >
									</div>
									<a href="#" id="add-more-attatchment-a" >Add more attatchment.</a>
									<div class='font10 text-danger'></div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<button type="submit" class="btn btn-primary btn-block mt-5">Save</button>
								</div>
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