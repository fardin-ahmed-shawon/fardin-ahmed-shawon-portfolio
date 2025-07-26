    <style>
        /* Font Update */
        @import url('https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap');
        *{
            font-family: "Host Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

		/* .row {
			background-image: url(img/mentor-glow.svg); background-repeat: no-repeat; 
		} */

        /* Gradiant Color */
        .footer_area, .newsletter_area, .banner_area {
            background: 
                radial-gradient(ellipse at 5% 50%, rgba(243, 240, 255, 0.5) 0%, transparent 70%),
                radial-gradient(ellipse at 25% 50%, rgba(255, 227, 236, 0.5) 0%, transparent 60%),
                radial-gradient(ellipse at 50% 50%, rgba(255, 245, 218, 0.5) 0%, transparent 60%),
                radial-gradient(ellipse at 75% 50%, rgba(223, 245, 255, 0.5) 0%, transparent 60%),
                radial-gradient(ellipse at 95% 50%, rgba(212, 255, 248, 0.5) 0%, transparent 60%),
                linear-gradient(to right, rgba(243, 240, 255, 0.2), rgba(255, 227, 236, 0.2), rgba(255, 245, 218, 0.2), rgba(223, 245, 255, 0.2), rgba(212, 255, 248, 0.2));

        }
        h4{
            font-weight: 700;
            font-family: "Host Grotesk", sans-serif;
        }
        /* Font end */

        /* linear dark text */
        .gradiant-dark-text {
            background: linear-gradient(to right,rgb(15, 36, 91),rgb(87, 127, 182));
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			color: transparent;
        }

        @media (max-width: 991px) {
            .gradiant-dark-text {
                background: linear-gradient(to right,rgb(186, 186, 186),rgb(88, 116, 156));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                color: transparent;
            }
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