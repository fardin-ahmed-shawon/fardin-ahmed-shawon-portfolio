<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Fardin - Services';  // Set the page title

$banner_title = 'Services'; // Set the banner title
$banner_subtitle = 'My Offered Service List'; // Set the banner subtitle
?>
<?php include 'header.php' ?>
<!-- START MAIN AREA -->

    <?php include 'components/page-banner.php'; ?>
	<br><br><br><br>
    <?php include 'components/features.php'; ?>

    <?php include 'components/testimonial.php'; ?>

<!-- END MAIN AREA -->
<?php include 'footer.php' ?>