
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
							<h2 class="text-center">Congatulations! We're proud to have you as a part of Naional<strong>Tutors</strong>.</h2>							
							<p>Our team will be contacting you when needed. Stay tuned!</p>
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