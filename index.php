<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Fardin - Home';  // Set the page title
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
								<a class="primary_btn" href="contact.php"><span>Hire Me</span></a>
								<a class="primary_btn tr-bg" onclick="downloadCV()"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>

				
				<!-- Starts Card Area -->
				 <!-- <style>
					/* .start-container {
						border: 4px solid;
						border-image: linear-gradient(to bottom, #4458dc, #854fee) 1;
					} */
					.start-item:nth-child(1) {
						border-right: 4px solid;
						border-image: linear-gradient(to bottom, #4458dc, #854fee) 1;
					}
					.start-item:nth-child(2) {
						border-right: 4px solid;
						border-image: linear-gradient(to bottom, #4458dc, #854fee) 1;
					}
					.start-item:nth-child(3) {
						border-right: 4px solid;
						border-image: linear-gradient(to bottom, #4458dc, #854fee) 1;
					}
				 </style>
				 <div class="start-container row text-center mt-5 border-5 rounded-3 bg-white" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
					<div class="start-item col-md-3 col-6">
						<div class="py-4">
							<h1 class="mb-1">45+</h1>
							<p class="text-muted mb-0">Total Clients</p>
						</div>
					</div>
					<div class="start-item col-md-3 col-6">
						<div class="py-4">
							<h1 class="mb-1">100+</h1>
							<p class="text-muted mb-0">Total Projects</p>
						</div>
					</div>
					<div class="start-item col-md-3 col-6">
						<div class="py-4">
							<h1 class="mb-1">3+</h1>
							<p class="text-muted mb-0">Years of Experience</p>
						</div>
					</div>
					<div class="start-item col-md-3 col-6">
						<div class="py-4">
							<h1 class="mb-1">100+</h1>
							<p class="text-muted mb-0">Total Reviews</p>
						</div>
					</div>
				</div> -->
				

				<!-- New Stats Section -->
				<style>
					.stats-back {
						background: linear-gradient(135deg,rgb(247, 251, 255), #ffffff);
						border-radius: 10px;
						box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;
						border-right: 2px solid rgb(40, 114, 211);
						border-left: 2px solid rgb(40, 114, 211);
					}
					.stats-back p {
						font-weight: 600;
					}

					.stats-back .stats-br {
						border-right: 2px solid rgb(40, 114, 211);
					}

					@media only screen and (max-width: 1200px) {
						.stats-back .stats-br {
							border-right: none;
						}
					}

					.gradiant-text-light {
						background: linear-gradient(to right,rgb(172, 165, 255),rgb(33, 65, 114));
						-webkit-background-clip: text;
						-webkit-text-fill-color: transparent;
						background-clip: text;
						color: transparent;
					}
				</style>
				<!-- <style>
					.stats-back {
						background: linear-gradient(to right, #0f172a, #334155);
						border-radius: 10px;
						box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;
					}
					.stats-back p {
						font-weight: 600;
					}
					.gradiant-text-light {
						background: linear-gradient(to right, #cbd5e1,rgb(171, 191, 220));
						-webkit-background-clip: text;
						-webkit-text-fill-color: transparent;
						background-clip: text;
						color: transparent;
					}
				</style> -->
				<div class="container">
					<div class="stats-back row text-uppercase p-3 mt-5 mt-lg-0">
						<div class="col-md-6 col-lg-3">
							<div class="stats-br d-flex align-items-center gap-4">
								<h2 class="display-3 gradiant-text-light">
									3+
								</h2>
								<p class="gradiant-text-light justify-content-center ml-2 ls-4">
									Years of <br> experience
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="stats-br d-flex align-items-center gap-4">
								<h2 class="display-3 gradiant-text-light">
									120
								</h2>
								<p class="gradiant-text-light justify-content-center ml-2 ls-4">
									satisfied <br> clients
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="stats-br d-flex align-items-center gap-4">
								<h2 class="display-3 gradiant-text-light">
									1K
								</h2>
								<p class="gradiant-text-light justify-content-center ml-2 ls-4">
									customer <br> reviews
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="d-flex align-items-center gap-4">
							<h2 class="display-3 gradiant-text-light">
								220
							</h2>
							<p class="gradiant-text-light justify-content-center ml-2 ls-4">
								projects completed
							</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End New Stats Section -->

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

	