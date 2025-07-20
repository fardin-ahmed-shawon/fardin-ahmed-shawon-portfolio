<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Fardin - About';  // Set the page title

$banner_title = 'About Me'; // Set the banner title
$banner_subtitle = 'Get to know me better'; // Set the banner subtitle
?>
<?php include 'header.php' ?>
<!-- START MAIN AREA -->

    <?php include 'components/page-banner.php'; ?>

    <?php include 'components/about-us.php'; ?>

    <?php include 'components/brand-area.php'; ?>

    <?php include 'components/testimonial.php'; ?>

<!-- END MAIN AREA -->
<?php include 'footer.php' ?>