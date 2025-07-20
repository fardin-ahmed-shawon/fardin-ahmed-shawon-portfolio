<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Fardin - Portfolio';  // Set the page title

$banner_title = 'Portfolio'; // Set the banner title
$banner_subtitle = 'All Of My Done Projects'; // Set the banner subtitle
?>
<?php include 'header.php' ?>
<!-- START MAIN AREA -->

    <?php include 'components/page-banner.php'; ?>
	<br><br><br><br>
    <?php include 'components/portfolio.php'; ?>

<!-- END MAIN AREA -->
<?php include 'footer.php' ?>