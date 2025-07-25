<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title><?= $page_title ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- Remix Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">

	<style>
        /* Font Update */
        @import url('https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap');
        *{
            font-family: "Host Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
        h4{
            font-weight: 700;
            font-family: "Host Grotesk", sans-serif;
        }
        /* Font end */

        /* linear dark text */
        .gradiant-dark-text {
            background: linear-gradient(to right, #0f172a, #334155);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			color: transparent;
        }
        

        .primary_btn span {
            color: #fff;
        }
        .primary_btn:hover span {
            color: #0a0f32;
        }
        .tr-bg span {
            color: #000;
        }
        .tr-bg:hover span {
            color: #fff;
        }

		/* start Skill section */
        .skills-section {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            /* background: linear-gradient(135deg, #1a1a2e, #16213e); */
        }
        .skills-section h2 {
            color: #00d4ff;
            margin-bottom: 10px;
        }
        .skills-section p {
            font-size: 14px;
            color: #b0b0b0;
            margin-bottom: 20px;
        }
        .skills-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .skill-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
			background: #FAF8FF;
			padding: 30px;
			border-radius: 10px;
			transition: transform 0.3s, box-shadow 0.3s;
			border: 1px dotted purple;
			cursor: pointer;
			box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            background: linear-gradient(135deg, #efe8ef, #ffffff);
        }
		.skill-item:hover {
			transform: translateY(-10px);
			/* box-shadow: rgba(0, 0, 0, 0.2) 0px 10px 20px; */
            box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
		}
        .skill-item img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .skill-item h4 {
            margin: 0;
            font-size: 14px;
            color: purple;
        }
		/* end Skill section */

        /* services section */
        .feature_item {
            border-radius: 30px;
            padding: 30px;
            /* height: 320px; */
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px dotted purple;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            background: linear-gradient(135deg, #efe8ef, #ffffff);
        }
        .feature_item:hover {
            transform: translateY(-10px);
            background: linear-gradient(135deg, #efe8ef, #ffffff);
            box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
        }
        /* End */

        /* portfolio */
        .portfolio_box {
            transition: 0.5s;
            cursor: pointer;
        }
        .portfolio_box:hover {
            box-shadow: 0px 15px 30px rgba(77, 87, 222, 0.3);
            padding: 20px;
            border: 1px dotted purple;
        }
        /* End */

        /* testimonial */
        .testi_item {
            transition: 0.5s;
            cursor: pointer;
            border-radius: 10px;
            padding: 30px;
            border: 1px dotted purple;
        }
    </style>
</head>

<body>

<?php include 'components/navbar.php' ?>

	