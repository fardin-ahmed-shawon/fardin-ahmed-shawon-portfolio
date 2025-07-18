<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Fardin - Portfolio';  // Set the page title
?>
<?php include 'header.php' ?>
<!-- START MAIN AREA -->
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">I am Fardin Ahmed</h1>
							<h5 class="text-uppercase">Web Application Developer</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="#"><span>Hire Me</span></a>
								<a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<?php include 'components/about-us.php'; ?>

	<?php include 'components/brand-area.php'; ?>

	<?php include 'components/features.php'; ?>

	<?php include 'components/portfolio.php'; ?>

	<?php include 'components/testimonial.php'; ?>

<!-- END MAIN AREA -->
<?php include 'footer.php' ?>

	