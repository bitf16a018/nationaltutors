
<!-- start Header -->
<header id="header">

	<!-- start Navbar (Header) -->
	<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">

		<div id="top-header">

			<div class="container">

				<div class="row">

					<div class="col-sm-12">
						<div class="top-header-widget pull-right">
							<?php if(isset($_SESSION['tutor'])){?>
								<a href="<?php echo site_url('Logout');?>">
									Logout
								</a>
							<?php } else { ?>
								<a  href="<?php echo site_url('Login');?>">
									Login
								</a>
							<?php } ?>
						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="container">

			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><i class="education-icon-book7"></i> National<strong class="uppercase">Tutors</strong></a>
			</div>

			<div id="navbar" class="collapse navbar-collapse navbar-arrow">

				<ul class="nav navbar-nav navbar-right" id="responsive-menu">

						<!-- <li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Find a Tutor</a>
						</li>
						<li>
							<a href="#">Be a Tutor</a>
						</li>
						<li>
							<a href="#">Contact Us</a>
						</li> -->
					</ul>

				</div>

			</div>

			<div id="slicknav-mobile"></div>

		</nav>
		<!-- end Navbar (Header) -->

	</header>