<?php include 'base.php' ?>


<?php startblock('title');?>
<title>Tutor Register | National Tutors</title>
<?php endblock();?>


<?php startblock('styles');?>
<style type="text/css">
	input[type='checkbox'], input[type='radio']{
		display: block;
		opacity: 1;
	}
	#areas-input, #subjects-input, #classes-input{
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
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
	<div class="main-wrapper scrollspy-container">

		<div class="contact-page-wrapper">
			
			<div class="container">

				<h4>Tutor Registration</h4>

				<div class="contact-map">

					<div class="row">

						<?php echo form_open('Tutor/register_servlet','data-toggle="validator" class="contact-form-wrapper" id="registeration_from" method="post"');?>

						<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">


							<div class="row">

								<div class="col-sm-6">

									<div class="form-group">

										<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
										<input id="inputName" type="text" class="form-control" data-error="Your name is required">
									</div>

								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
										<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" >
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputName">Father Name <span class="font10 text-danger">(required)</span></label>
										<input id="inputName" type="text" class="form-control" data-error="Your name is required">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Your CNIC <span class="font10 text-danger">(required)</span></label>
										<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" >
										<div class="help-block with-errors"></div>
									</div>

								</div>


								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleFormControlFile1">Attach CNIC Frontside Pic.</label>
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleFormControlFile1">Attach CNIC Backside Pic.</label>
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Phone<span class="font10 text-danger">(required)</span></label> 
										<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" >
										<div class="help-block with-errors"></div> 
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Alternative Phone<span class="font10 text-danger">(required)</span></label>
										<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" >
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Gender<span class="font10 text-danger">(required)</span></label><br>
										<input type="radio" value="1" name="gender" id="male-gender"><label for="male-gender">Male</label><br>
										<input type="radio" value="0" name="gender" id="female-gender"><label for="female-gender">Female</label>
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">City<span class="font10 text-danger">(required)</span></label>
										<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" >
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label for="inputMessage">Permanent Address<span class="font10 text-danger">(required)</span></label>
										<textarea id="inputMessage" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" ></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-12">

									<div class="form-group">
										<label for="inputMessage">Mailing Address <span class="font10 text-danger">(required)</span></label>
										<textarea id="inputMessage" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" ></textarea>
										<div class="help-block with-errors"></div>
									</div>

								</div>

							</div>

						</div>
						<div class="col-sm-6 col-md-5 col-md-offset-1 mb-30">

							<div class="row">



								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Password <span class="font10 text-danger">(required)</span></label>
										<input id="inputEmail" type="password" class="form-control">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputEmail">Confirm Password<span class="font10 text-danger">(required)</span></label>
										<input id="inputEmail" type="password" class="form-control">
										<div class="help-block with-errors"></div>
									</div>
								</div>

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
									<label for="inputEmail">Preffered Classes<span class="font10 text-danger">(required)</span></label>
									<input type="text" class="form-control" id="classes-input" disabled>
								</div>
								<div class="col-sm-12">
									<button type="button" id="abs" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">Select
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" id="classes-list" style="width: 100%;">
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 1"/>&nbsp;Option 1</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 2"/>&nbsp;Option 2</a></li>
									</ul>
								</div>

								
								<div class="col-sm-12">
									<label for="inputEmail">Preffered Subjects<span class="font10 text-danger">(required)</span></label>
									<input type="text" class="form-control" id="subjects-input" id="areas"  disabled>
								</div>
								<div class="col-sm-12">
									<button type="button" id="abs" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">Select
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" id="subjects-list" style="width: 100%;">
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 1" />&nbsp;Option 1</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 2" />&nbsp;Option 2</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 3" />&nbsp;Option 3</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 4" />&nbsp;Option 4</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 5" />&nbsp;Option 5</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 6" />&nbsp;Option 6</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 7" />&nbsp;Option 7</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 8" />&nbsp;Option 8</a></li>
									</ul>
								</div>


								
								<div class="col-sm-12">
									<label for="inputEmail">Preffered Areas<span class="font10 text-danger">(required)</span></label>
									<input type="text" class="form-control" id="areas-input"  disabled>
								</div>
								<div class="col-sm-12">
									<button type="button" id="abs" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">Select
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" id="areas-list" style="width: 100%;">
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 1"/>&nbsp;Option 1</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 2"/>&nbsp;Option 2</a></li>
										<li><a href="#" class="small" tabIndex="-1"><input type="checkbox" value="option 3" />&nbsp;Option 3</a></li>
									</ul>
								</div>

								
								
								<div class="col-sm-6">

									<div class="form-group">
										<label for="exampleFormControlFile1">Attach your Profile Pic</label>
										<input multiple="multiple" type="file" class="form-control-file">
									</div>

								</div>

								<div class="col-sm-6" id="attach-documents-div">

									<div class="form-group">
										<label for="exampleFormControlFile1">Attach your Documents</label>
										<input multiple="multiple" type="file" class="form-control-file">
									</div>

									<a href="#" id="add-more-attatchment-a" >Add more attatchment.</a>

								</div>

								<div class="col-sm-12">
									<input type="checkbox" value="" id="terms-and-conditins-check" style="display: block; opacity: 1;">
									<label for="terms-and-conditins-check">Agree to Terms and Conditions.</label>
								</div>

								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary mt-5">Register</button>
								</div>

							</div>

							<br>



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
<script type="text/javascript" src="<?php echo base_url('assets/js/dropdown-multiple-selection.js');?>"></script>
<?php endblock();?>