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

				<h4>Personal Documents</h4>

				<div class="contact-map">

					<div class="row">

						<?php echo form_open_multipart('Tutor/register_servlet','data-toggle="validator" class="contact-form-wrapper" id="registeration_from" method="post"');?>

						<div class="col-sm-12 col-md-11 col-md-offset-1 mb-30">
							<div class="row">

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label >Attach CNIC Frontside Pic.<span class="font10 text-danger">(required)</span></label>
											<input type="file" class="form-control-file" name="cnic-pic-1">
											<div class="font10 text-danger">
												<?php 
												if(isset($cnic_pic_1_errors))
												{
													echo '<b>Error uploading CNIC frontside pic!</b>';
													print_r($cnic_pic_1_errors);
												}
												?>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Attach CNIC Backside Pic.<span class="font10 text-danger">(required)</span></label>
											<input type="file" class="form-control-file" name="cnic-pic-2">
											<div class="font10 text-danger">
												<?php 
												if(isset($cnic_pic_2_errors))
												{
													echo '<b>Error uploading CNIC backside pic!</b>';
													print_r($cnic_pic_2_errors);
												}
												?>
											</div>
										</div>
									</div>
								</div>
								<br>
								<br>
								<br>
								<br>
								<div class="row">
									<div class="col-sm-3">
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
<script type="text/javascript" src="<?php echo base_url('assets/js/dropdown-multiple-selection.js');?>"></script>
<?php endblock();?>