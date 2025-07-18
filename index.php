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
							<h5 class="text-uppercase">Software Developer <i class="ri-code-s-slash-fill"></i></h5>
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
				<!-- Stats Card Area -->
				<div class="row text-center mt-5 border-5 rounded-3 bg-white" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
					<div class="col-md-3 col-6 border-right">
						<div class="py-4">
							<h1 class="mb-1">45+</h1>
							<p class="text-muted mb-0">Total Clients</p>
						</div>
					</div>
					<div class="col-md-3 col-6 border-right">
						<div class="py-4">
							<h1 class="mb-1">100+</h1>
							<p class="text-muted mb-0">Total Projects</p>
						</div>
					</div>
					<div class="col-md-3 col-6 border-right">
						<div class="py-4">
							<h1 class="mb-1">3+</h1>
							<p class="text-muted mb-0">Years of Experience</p>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="py-4">
							<h1 class="mb-1">100+</h1>
							<p class="text-muted mb-0">Total Reviews</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<?php include 'components/about-us.php'; ?>

	<?php include 'components/brand-area.php'; ?>

	<?php include 'components/skills.php'; ?>

	<?php include 'components/features.php'; ?>

	<?php include 'components/portfolio.php'; ?>

	<?php include 'components/testimonial.php'; ?>

<!-- END MAIN AREA -->
<?php include 'footer.php' ?>

	