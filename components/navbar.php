	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 3px solid #4458DC;">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a style="font-size: 25px; color: #4458DC; font-weight: 600;" class="navbar-brand logo_h" href="index.php">Fardin.</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item <?= $current_page == 'index.php' ? 'active' : '' ?>"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item <?= $current_page == 'about.php' ? 'active' : '' ?>"><a class="nav-link" href="about.php">About</a></li>
							<li class="nav-item <?= $current_page == 'services.php' ? 'active' : '' ?>"><a class="nav-link" href="services.php">Services</a></li>
							<li class="nav-item <?= $current_page == 'portfolio.php' ? 'active' : '' ?>"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="elements.php">Elements</a></li>
									<li class="nav-item"><a class="nav-link" href="portfolio-details.php">Portfolio Details</a></li>
								</ul>
							</li> -->
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
								</ul>
							</li> -->
							<li class="nav-item <?= $current_page == 'contact.php' ? 'active' : '' ?>"><a class="nav-link" href="contact.php">Contact</a></li>
							
							<li class="nav-item"><a class="nav-link" style="cursor: pointer;">
								<!-- Theme Toggle Icons -->
								<i class="ri-sun-fill sun-icon"></i>
								<!-- <i class="ri-moon-fill moon-icon"></i> -->
							</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->