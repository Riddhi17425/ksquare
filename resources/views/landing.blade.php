<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksquare</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/marklchaves/cme-styles@1.0.0/dist/cme-styles.min.css"> -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css -->
      <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {

            --wb-black: #111111;
            --wb-blue: #2B398B;
            --white: #fff;
            --wb-dark-blue: #1D224E;
            --wb-grey: #444;
            --wb-light-grey: #808080;
            --wb-body-typography-font-family: "Manrope", sans-serif;
            --wb-heading-typography-font-family: "Playfair Display", sans-serif;
            /*  
             --bg-grey: #F5F5F5;
             --wb-purple: #2C0E3A;
             --wb-light-purple: #9F80AE;
             --white: #fff;
             --wb-golden: #AD8E59; */
        }

        .mt_30 {
            margin-top: 30px;
        }

        a {
            text-decoration: none;
        }

        body {
            font-family: var(--wb-body-typography-font-family);
            color: var(--wb-grey);
            font-size: 18px;
        }

        /* .sub_text_p16{font-family: var(--wb-body-typography-font-family); color: var(--wb-black);font-size: 16px;font-style: normal;font-weight: 400;line-height: 24px; 150%} */
        .title {
            margin-bottom: 0px;
            color: var(--wb-black);
            font-family: var(--wb-heading-typography-font-family);
            font-size: 60px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .title_blue {
            color: var(--wb-blue);
            font-family: var(--wb-heading-typography-font-family);
            font-size: 60px;
            font-style: italic;
            font-weight: 700;
            line-height: normal;
        }

        /* .title_f27{color:var(--wb-black);font-size: 27.24px;font-style: normal; font-weight: 700; line-height: 27.24px;} */
        .section_padding_top {
            padding-top: 100px;
        }

        .section_padding_bottom {
            padding-bottom: 100px;
        }

        .comman_space {
            padding: 100px 0px;
        }

        .darkblue_bg {
            background-color: var(--wb-dark-blue);
        }

        .f_18 {
            font-size: 18px;
            color: var(--wb-black);
        }

        .g_15 {
            gap: 15px;
        }

        /*****header Section *****/
        #header .navbar-collapse.show {
            height: 90vh;
        }

        #header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
            background-color: transparent;
            transition: all 0.3s ease-in-out;
            /* Smooth transition */
        }

        #header.scrolled {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
            transform: translateY(0);
            /* Ensures it's back in position */
            animation: slideDown 0.5s ease;
        }

        /* Optional: Smooth slide-in effect */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        .logo_img {
            width: 200px;
        }

        .navbar-nav {
            gap: 10px;
        }

        .nav-link {
            color: var(--wb-light-black);
        }

        .dark-btn {
            display: flex;
            padding: 7px 25px;
            justify-content: center;
            color: var(--wb-blue);
            align-items: center;
            background-color: transparent;
            border-radius: 30px;
            border: 1px solid var(--wb-blue);
        }

        .navbar-toggler i {
            transition: transform 0.3s ease;
        }

        .navbar-toggler i.fa-times {
            transform: rotate(90deg);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /*****  End header Section *****/

        /*****footer Section *****/
        .footer {
            background-color: var(--wb-dark-blue);
            padding-bottom: 80px;
        }

        .footer_social a {
            font-size: 30px;
            margin: 0px 10px;
            color: var(--white);
        }

        .ft_content {
            color: var(--white);
            padding-top: 100px;
        }

        .ft_24 {
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 30px;
            margin-bottom: 20px;
        }

        .footer_menu p {
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px;
            /* 166.667% */
        }

        /* .ft_content{ position: relative;z-index: 1;padding: 35px 0px;border-top: 1px solid transparent;border-image: linear-gradient(90deg, rgba(87, 187, 187, 0.00) 0%, #BBB 49.92%, rgba(187, 187, 187, 0.00) 100%);border-image-slice: 1;border-bottom: 1px solid transparent;margin: 35px 0px;} */
        /* .ft_rightborder{  border-right: 2px solid transparent; border-image: linear-gradient(180deg, rgba(87, 187, 187, 0.00) 0%, #BBB 49.92%, rgba(187, 187, 187, 0.00) 100%); border-image-slice: 1;} */
        .footer_menu li a,
        .footer_menu a {
            color: var(--white);
            font-weight: 400;
            line-height: 24px;
        }

        .footer_menu {
            margin: 0;
            padding: 0;
        }

        .footer_menu li {
            list-style: none;
            margin-bottom: 10px;
        }

        /***** End footer Section *****/

        /***** index page *****/
        .banner_head {
            position: absolute;
        }

        .banner_head {
            /* max-width: 64%; */
            top: 20%;
            left: 0;
            right: 0;
            text-align: center;
        }

        .solar_img {
            display: flex;
            justify-content: flex-end;
            position: absolute;
            right: 0;
        }

        .solar_leftimg {
            display: flex;
            justify-content: flex-start;
            position: absolute;
            left: 0;
        }

        .future_item {
            display: flex;
            align-items: flex-start;
            gap: 25px;
        }

        /* counter */
        .counter_section .title {
            font-size: 40px;
            font-weight: 500;
            color: var(--white);
        }

        .counter_section .title_blue {
            color: #ddd;
            font-size: 40px;
            font-weight: 500;
            font-style: normal;
        }

        .counter_section .title_blue span {
            color: var(--white);
            font-size: 40px;
            font-weight: 600;
            font-style: italic;
        }

        .counters {
            padding-top: 30px;
        }

        .counter-box p {
            color: #DFE8FA;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
        }

        .counter-box {
            font-size: 54px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            color: var(--white);
        }

        .counter_border {
            border: 1px solid #5563BC;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .sub_text_solar span {
            color: var(--wb-light-grey);
            font-family: Inter;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 28px;
            /* text-transform: capitalize;
            padding: 0px 40px 0px 0px;
           position: relative; */
        }

        .sub_text_solar span::after {
            content: "";
            position: relative;
            border: 1px solid #ddd;
            height: 20px;
            margin: 0px 21PX;
        }

        .sub_text_solar span:last-child::after {
            content: none;
            border: none;
        }

        .sub_text_solar {
            margin-bottom: 45px;
            display: flex;
            flex-wrap: wrap;
        }

        .demo_btn {
            padding: 12px 34px;
            border-radius: 6px;
            background: #111;
            color: #FFF;
            font-size: 18px;
            font-weight: 500;
        }

        .Manufacturer_subtex {
            color: #FFF;
            font-size: 14px;
            font-weight: 400;
            line-height: 26px;
        }

        .Manufacturer_title {
            color: #FFF;
            font-size: 24px;
            font-weight: 600;
            line-height: 30px;
        }

        .Manufacturer {
            border-right: 1px solid #ddd;
            padding-left: 25px;
        }

        .Manufacturer:last-child {
            border-right: none;
        }

        .downlode_btn {
            display: flex;
            padding: 31px 100px;
            align-items: center;
            gap: 30px;
            border-radius: 6px;
            border: 1px solid #D6DCFF;
            color: #FFF;
            font-size: 24px;
            font-weight: 600;
            line-height: 30px;
            /* 125% */
        }

        .fixed_div {
            position: sticky;
            top: 15%;
        }

        .faq_wrapper .accordion-button {
            color: var(--wb-black);
            background-color: transparent;
            box-shadow: none;
            font-size: 18px;
        }

        .faq_wrapper .accordion-body {
            color: var(--wb-grey);
            font-family: Inter;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 22px;
            text-transform: capitalize;
        }

        .contact_wrapper {
            border-radius: 6px;
            border: 1px solid #2B398B;
            margin-top: 30px;
        }

        .contact_form {
            padding: 30px;
        }

        .contact_form label {
            color: var(--wb-black);
            font-size: 20px;
            font-style: normal;
            font-weight: 600;
            line-height: 30px;
        }

        .contact_form .form-control,
        .contact_form .form-select {
            color: var(--wb-grey);
            font-size: 18px;
            font-weight: 400;
            border-bottom: 1px solid #C6C5C2 !important;
            border: none;
            border-radius: 0px;
            padding: 12px 0px;
        }

        .contact_form .form-control:focus,
        .contact_form .form-select:focus,
        .accordion-button:focus {
            box-shadow: none;
        }

        /***** End abous our Values sesction  *****/
        /***** End index page  *****/
        /* / General Marquee Styling / */
        .header-marquee {
            background-color: transparent;
            color: #5C63A7;
            height: 48px;
            text-align: center;
            align-items: center;
            display: flex;
            font-weight: 700;
            white-space: nowrap;
            overflow: hidden;
        }

        .runner {
            justify-content: flex-start;
        }

        /* / Animation Container for Start and End / */
        .runner-start {
            display: flex;
            animation: ticker 25s linear infinite;
            will-change: transform;
        }

        /* / Text Styling / */
        .marquee-line,
        .marquee-line_text {
            display: inline-flex;
            align-items: center;
        }

        /* / Marquee Animation / */
        @keyframes ticker {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* / Responsive Adjustments / */
        
        @media (max-width: 1600px) {
            .logo_img {
                width: 200px;
            }

            .navbar-nav {
                gap: 1px;
            }

            .navbar-nav li.nav-item {
                font-size: 14px;
            }

            .title {
                font-size: 50px;
            }

            .title_blue {
                font-size: 50px;
            }
        }
        @media (max-width: 1423px) {
            .logo_img {
                width: 150px !important;
            }

            .navbar-nav li.nav-item {
                font-size: 14px;
            }

            .navbar-nav {
                gap: 5px;
            }

            header .demo_btn {
                padding: 8px 12px;
                border-radius: 6px;
                background: #111;
                color: #FFF;
                font-size: 15px;
                font-weight: 500;
            }
        }
        @media (max-width: 1290px) {
           .downlode_btn{
               padding: 31px 60px;
           }
         }
        @media (max-width: 1170px) {
            #header {

                background-color: var(--white);
            }
        }

        @media (max-width: 1100px) {
            .nav-link {
                font-size: 16px;
            }

            .logo_img {
                width: 150px;
            }

            .navbar-nav {
                gap: 0px;
            }

        }
        @media (max-width: 991px) {
            .ft_24{
                font-size: 20px;
            }
            .downlode_btn {
                padding: 21px 17px;
                gap: 19px;
                font-size: 20px;
                margin-bottom: 20px;
            }

            .downlode_btn svg {
                width: 25px;
            }

            .section_padding_top {
                padding-top: 50px;
            }

            .section_padding {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .title,
            .title_blue ,.counter_section .title ,.counter_section .title_blue ,.counter_section .title_blue span {
                font-size: 30px;
            }

        }
        @media screen and (max-width: 768px) {
            .title, .title_blue, .counter_section .title, .counter_section .title_blue, .counter_section .title_blue span {
        font-size: 40px;
    }
            .marquee-line_text {
                font-size: 14px;
                padding: 0 16px;
            }

            #Manufacturer {
                padding-top: 50px;
            }

            #certification img {
                margin-bottom: 10px;
            }

            .banner_head {
                top: 24%;
            }

            .comman_space {
                padding: 50px 0px;
            }

            .downlode_btn {
                padding: 30px 24px;
                gap: 20px;
                font-size: 20px;
                margin-bottom: 20px;
            }

            .downlode_btn svg {
                width: 25px;
            }

            .counter-box {
                font-size: 30px;
            }

            .solar_leftimg,
            .solar_img {
                position: relative;
                margin-bottom: 20px;
            }

           

            .Manufacturer {
                border-right: none;

            }
        }
        @media screen and (max-width: 500px){
            .title, .title_blue, .counter_section .title, .counter_section .title_blue, .counter_section .title_blue span {
        font-size: 30px;
    }
        }
        @media screen and (max-width: 766px) {
            .col-md-5.solar_img {
                order: 1;
            }

            .col-md-7.order2 {
                order: 2;
            }
        }

        /* / Add Bullet to Text / */
        .marquee-line_text::after {
            content: "\2022";
            padding: 0 1em;
            color: #F35422;
        }
        @media (min-width: 992px) {
            .dropdown:hover>.dropdown-menu {
                cursor: initial;
                top: 4.25rem;
                opacity: 1;
                pointer-events: initial;
                padding: 30px 0px;
            }

            .dropdown>.dropdown-menu,
            .dropdown.open>.dropdown-menu {
                display: block !important;
                opacity: 0;
                visibility: hidden;
                transition: all ease 0.2s;
            }

            .dropdown:hover>.dropdown-menu,
            .dropdown.open:hover>.dropdown-menu {
                opacity: 1;
                visibility: visible;
            }

            .container-fluid {
                padding-right: calc(var(--bs-gutter-x)* 1.5);
                padding-left: calc(var(--bs-gutter-x)* 1.5);
            }
        }
        @media all and (min-width: 1400px) {

            .container-fluid {
                padding-right: calc(var(--bs-gutter-x)* 2.5);
                padding-left: calc(var(--bs-gutter-x)* 2.5);
            }

        }
        @media (min-width: 1500px) and (max-width: 1610px) {
            header .demo_btn {
                padding: 8px 12px;
                border-radius: 6px;
                background: #111;
                color: #FFF;
                font-size: 15px;
                font-weight: 500;
            }
        }
        @media (min-width: 1680px) and (max-width: 2000px) {
            .slider_area .sub_text_p16 {
                width: 650px;
            }

            .container {
                max-width: 1400px;
            }


        }

      
        @media (min-width: 1900px) {
            .navbar-nav {
                gap: 20px;
            }
        }
    </style>
</head>


<body>
<header id="header">
    <nav class="navbar navbar-expand-xl ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('public/images/landing/logo.svg')}}" alt="logo" class="logo_img" width="250">
            </a>
            <button class="navbar-toggler" id="hamburgerToggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#4_25kW">4 - 25 kW Solar Inverter </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#6_6KWSingle">3.6 - 6 KW Solar Inverter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#3_3KWSingleMPPT">1.3 - 3 KW Solar Inverter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Manufacturer">Manufacturer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certification">Certification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                </ul>
                <div class="d-flex ms-lg-4">
                    <a class=" demo_btn" href="#Contact_us" type="submit">Contact  us</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<section class="banner_wrapper">
    <div class="container-fluid p-0">
        <!--<img src="./img/banner_bg.png" alt="banner_bg" class="img-fluid">-->
        <img src="{{asset('public/images/landing/banner_bg.png')}}"alt="banner_bg" class="img-fluid w-100 d-none d-md-block">
        <img src="{{asset('public/images/landing/banner-bg-m.jpg')}}"alt="banner_bg" class="img-fluid w-100 d-block d-md-none">
        <div class="banner_head">
            <div class="text-center">
                <h1 class="title">Power Your Future with Ksquare</h1>
                <h2 class="title_blue">Solar Inverters</h2>
            </div>
        </div>
    </div>
</section>
<section class="comman_space" id="aboutus">
    <div class="container">
        <div class="row g-0 align-items-md-center">
            <div class="col-md-7 order2">
                <h2 class="title ">Power Your Future</h2>
                <h2 class="title_blue"> Solar Inverters</h2>
                <p>Ksquare Energy is a leading manufacturer of high-quality solar inverters ranging from 1.3 kW to 25 kW, available in both single-phase and three-phase models. Whether you're looking for an efficient on-grid solution, a reliable off-grid system, or a flexible hybrid inverter, we provide advanced solar power solutions tailored to your energy needs.</p>
                <div class="row g-4 mt-3">
                    <div class="col-md-6">
                        <div class="future_item">
                            <!--<img src="./img/superior_efficiency.svg" alt="superior_efficiency" class="img-fluid">-->
                            <img src="{{asset('public/images/landing/superior_efficiency.svg')}}" alt="superior_efficiency" class="img-fluid">
                            <div>
                                <h4 class="f_18">Superior Efficiency</h4>
                                <p class="mb-0">Maximize energy conversion and optimize power utilization.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="future_item">
                            <!--<img src="./img/Cost-Effective.svg" alt="Cost-Effective & Reliable" class="img-fluid">-->
                            <img src="{{asset('public/images/landing/Cost-Effective.svg')}}" alt="Cost-Effective & Reliable" class="img-fluid">
                            <div>
                                <h4 class="f_18">Cost-Effective & Reliable</h4>
                                <p class="mb-0">High performance at competitive prices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="future_item">
                            <!--<img src="./img/Compact_Modern.png" alt="Compact & Modern Design " class="img-fluid">-->
                            <img src="{{asset('public/images/landing/Compact_Modern.png')}}" alt="Compact & Modern Design " class="img-fluid">
                            <div>
                                <h4 class="f_18">Compact & Modern Design </h4>
                                <p class="mb-0">Easy to install for residential and commercial applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="future_item">
                            <!--<img src="./img/Robust_Safety.png" alt="Robust Safety Features" class="img-fluid">-->
                            <img src="{{asset('public/images/landing/Robust_Safety.png')}}" alt="Robust Safety Features" class="img-fluid">
                            <div>
                                <h4 class="f_18">Robust Safety Features</h4>
                                <p class="mb-0">Surge protection, reverse polarity protection, and temperature control.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 solar_img">
                <!--<img src="./img/future_solar.png" alt="future_solar" class="img-fluid">-->
                <img src="{{asset('public/images/landing/future_solar.png')}}" alt="future_solar" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="comman_space counter_section darkblue_bg">
    <div class="container">
        <h2 class="title">Our Success in Numbers</h2>
        <h2 class="title_blue">Powering <span>India’s </span>Solar Revolution</h2>
        <div class="row counters">

            <div class="counter-box col-md-3">
                <span class="counter" data-target="650">0</span>+
                <div class="counter_border"></div>
                <p>Happy Clients in B2B Solar industry</p>
            </div>
            <div class="counter-box col-md-3">
                <span class="counter" data-target="2000">0</span>+
                <div class="counter_border"></div>
                <p>Residential and Commercial Solar Projects Completed</p>
            </div>
            <div class="counter-box col-md-3">
                <span class="counter" data-target="6000">0</span>+
                <div class="counter_border"></div>
                <p>Happy Clients in B2C Solar industry</p>
            </div>
            <div class="counter-box col-md-3">
                <span class="counter" data-target="500000">0</span>+
                <div class="counter_border"></div>
                <p>We have supplied products to our customers across India.</p>
            </div>

        </div>
    </div>
</section>
<section class="comman_space" id="4_25kW">
    <div class="container">
        <div class="row align-items-md-center justify-content-md-end">
            <div class="col-md-5 solar_leftimg">
                <!--<img src="./img/High-Efficiency_4 - 25_kW.png" alt="future_solar" class="img-fluid">-->
                <img src="{{asset('public/images/landing/High-Efficiency_4 - 25_kW.png')}}" alt="future_solar" class="img-fluid">
            </div>
            <div class="col-md-7">
                <h2 class="title ">High-Efficiency 4 - 25 kW</h2>
                <h2 class="title_blue">(3 Phase) Solar Inverter</h2>
                <p>Ksquare Energy is a leading manufacturer of high-quality solar inverters ranging from 1.3 kW to 25 kW, available in both single-phase and three-phase models. Whether you're looking for an efficient on-grid solution, a reliable off-grid system, or a flexible hybrid inverter, we provide advanced solar power solutions tailored to your energy needs.</p>
                <div class="sub_text_solar">
                    <span> 3-phase solar inverter</span>
                    <span> high-efficiency inverter</span>
                    <span> large-scale solar power</span>
                    <span> 25 kW solar inverter</span>
                    <span> grid-tied inverter</span>
                </div>
                <a href="" class="demo_btn">
                    Inquire Now
                </a>
            </div>
        </div>
    </div>
</section>
<section class="comman_space pt-0" id="6_6KWSingle">
    <div class="container">
        <div class="row  align-items-md-center">
            <div class="col-md-7 order2">
                <h2 class="title ">3.6 - 6 KW, Single </h2>
                <h2 class="title_blue">MPPT -20A Solar Inverters</h2>
                <p>Designed for medium-sized solar setups, Ksquare’s 3.6 - 6 kW inverter features advanced MPPT technology, DC switch, and no epoxy colloid, ensuring superior stability and seamless energy conversion. A top choice for residential and commercial applications.SEO Keywords: single MPPT inverter, medium-scale solar inverter, solar energy conversion, stable solar inverter, DC switch solar inverter.
                </p>
                <div class="sub_text_solar">
                    <span> single MPPT inverter</span>
                    <span> medium-scale solar inverter</span>
                    <span> solar energy conversion</span>
                    <span> stable solar inverter</span>
                    <span> DC switch solar inverter</span>
                </div>
                <a href="" class="demo_btn">
                    Inquire Now
                </a>
            </div>
            <div class="col-md-5 solar_img">
                <!--<img src="./img/6_6KW.png" alt="future_solar" class="img-fluid">-->
                <img src="{{asset('public/images/landing/6_6KW.png')}}" alt="future_solar" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="comman_space pt-0" id="3_3KWSingleMPPT">
    <div class="container">
        <div class="row  align-items-md-center justify-content-md-end">
            <div class="col-md-5 solar_leftimg">
                <!--<img src="./img/3-3KW.png" alt="future_solar" class="img-fluid">-->
                <img src="{{asset('public/images/landing/3-3KW.png')}}" alt="future_solar" class="img-fluid">
            </div>
            <div class="col-md-7">
                <h2 class="title ">1.3 - 3 KW, Single MPPT </h2>
                <h2 class="title_blue">-20A Solar Inverters</h2>
                <p> The Ksquare 1.3 - 3 kW inverter is perfect for small solar power systems, featuring a low starting voltage to ensure energy generation even in minimal sunlight. Full protection from surge, reverse polarity, and temperature fluctuations makes it a safe and efficient choice.SEO Keywords: small solar inverter, single MPPT solar inverter, residential solar energy, energy-efficient solar inverter, solar power for homes.</p>
                <div class="sub_text_solar">
                    <span>small solar inverter</span>
                    <span> single MPPT solar inverter</span>
                    <span> residential solar energy</span>
                    <span> energy-efficient solar inverter</span>
                    <span> solar power for homes.</span>
                </div>
                <a href="" class="demo_btn">
                    Inquire Now
                </a>
            </div>
        </div>
    </div>
</section>
<section class=" darkblue_bg" id="Manufacturer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2 class="title text-white">India’s Leading </h2>
                <h2 class="title_blue text-white">Solar Inverter Manufacturer</h2>
                <p class="text-white mt-4">Ksquare Energy offers an extensive selection of solar inverters designed to meet the unique energy needs of both homes and businesses. From on-grid solutions to off-grid and hybrid inverters, we provide high-quality, efficient systems that ensure seamless energy management and help you save on electricity bills.</p>
            </div>
            <div class="col-md-5">
                <!--<img src="./img/indias-leading.svg" alt="indias-leading" class="img-fluid">-->
                <img src="{{asset('public/images/landing/indias-leading.svg')}}" alt="indias-leading" class="img-fluid">
            </div>
        </div>
        <div class="row mt-5 pb-5">
            <div class="col-md-4 Manufacturer">
                <h3 class="Manufacturer_title">On-Grid Solar Inverter</h3>
                <p class="Manufacturer_subtex">Ksquare Energy offers an extensive selection of solar inverters designed to meet the unique energy needs of both homes and businesses. From on-grid solutions to off-grid and hybrid inverters, we provide high-quality, efficient systems that ensure seamless energy management and help you save on electricity bills.</p>
            </div>
            <div class="col-md-4 Manufacturer">
                <h3 class="Manufacturer_title">Off-Grid Solar Inverter</h3>
                <p class="Manufacturer_subtex">Off-grid solar inverters, sometimes called stand-alone or solar battery inverters, are used in systems that operate independently of the utility grid. These inverters don't rely on the grid for electricity, meaning the solar power system is fully self-sustaining. </p>
            </div>
            <div class="col-md-4 Manufacturer">
                <h3 class="Manufacturer_title">Hybrid Solar Inverter</h3>
                <p class="Manufacturer_subtex">A hybrid solar inverter combines the best features of both on-grid and off-grid inverters. It allows you to harness energy from the solar panels, store excess power in a battery, and feed any remaining electricity back into the grid.</p>
            </div>
        </div>
    </div>
</section>
<section class="comman_space" id="certification">
    <div class="container">
        <h2 class="title ">Industry-Recognized Certifications for</h2>
        <h2 class="title_blue">Superior Quality & Safety</h2>
        <div class="row mt-5">
            <div class="col-md-4">
                <!--<img src="./img/Certificat_a.png" alt="Certificat" class="img-fluid">-->
                <img src="{{asset('public/images/landing/Certificat_a.png')}}" alt="Certificat" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="{{asset('public/images/landing/Certifications_b.png')}}" alt="Certificat" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="{{asset('public/images/landing/Certifications_c.png')}}" alt="Certificat" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="comman_space faq_wrapper pt-0" id="faq">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="fixed_div">
                    <h2 class="title ">FAQs About </h2>
                    <h2 class="title_blue">Solar Inverters</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What are Solar Inverters?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Solar inverters convert the DC electricity generated by solar panels into AC electricity, which is used to power your appliances and devices.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                 What is the difference between a hybrid and a grid-tied solar inverter?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            A grid-tied inverter connects to the utility grid and exports excess power, while a hybrid inverter combines grid connection with battery storage for added flexibility, allowing power use even during outages.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            How many solar panels should I connect with my solar inverter?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The number of solar panels depends on your inverter's power rating. Typically, the inverter should match the total wattage of the panels, such as a 5kW inverter with 5kW of panels.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            What is the ideal number of solar panels for my solar inverter?
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The ideal number depends on your energy needs and the inverter's capacity. For example, a 5kW inverter generally requires 15-20 panels, depending on panel wattage.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            How much can I reduce my electricity bill with a Ksquare solar inverter?
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">A Ksquare solar inverter can reduce your electricity bills by up to 70-90%, depending on your energy usage and the size of your system.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            What is the warranty period for Ksquare solar inverters?
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Ksquare best solar inverters come with a warranty period of 5 to 10 years, ensuring reliability and protection against manufacturing defects.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            Are Ksquare solar inverters compatible with all types of Msolar panels?
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, Ksquare solar inverters are compatible with a wide range of solar panels, including monocrystalline, polycrystalline, and thin-film panels.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            How much does it cost to install a solar inverter?
                            </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Installation costs vary but typically range from ₹15,000 to ₹1,00,000, depending on the inverter size and your system’s requirements.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            What size solar inverter do I need for my home?
                            </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For residential systems, the inverter size generally ranges between 1.5kW to 5kW, depending on your energy consumption and solar panel capacity.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                            Can I use a solar inverter for both residential and commercial systems?
                            </button>
                        </h2>
                        <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, Ksquare solar inverters are suitable for both residential and commercial applications, with models available for different system sizes.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" darkblue_bg comman_space">
    <div class="container">
        <h2 class="title text-white">Download </h2>
        <h2 class="title_blue text-white">Datasheet & Brochure</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <a class="downlode_btn" href="https://www.ksquareenergy.com/public/images/Data%20sheet.pdf" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="52" viewBox="0 0 45 52" fill="none">
                        <mask id="path-1-outside-1_0_1147" maskUnits="userSpaceOnUse" x="0" y="0" width="45" height="52" fill="black">
                            <rect fill="white" width="45" height="52" />
                            <path d="M2 36.5V45.25C2 47.7814 4.05203 49.8333 6.58333 49.8333H38.6667C41.198 49.8333 43.25 47.7814 43.25 45.25V36.5M22.625 2V34.0833V2ZM22.625 34.0833L11.1667 21.6064L22.625 34.0833ZM22.625 34.0833L34.0833 21.6066L22.625 34.0833Z" />
                        </mask>
                        <path d="M3.5 36.5C3.5 35.6716 2.82843 35 2 35C1.17157 35 0.5 35.6716 0.5 36.5H3.5ZM44.75 36.5C44.75 35.6716 44.0784 35 43.25 35C42.4216 35 41.75 35.6716 41.75 36.5H44.75ZM24.125 2C24.125 1.17157 23.4534 0.5 22.625 0.5C21.7966 0.5 21.125 1.17157 21.125 2H24.125ZM22.625 34.0833L21.5202 35.0979C21.8043 35.4073 22.205 35.5833 22.625 35.5833C23.045 35.5833 23.4457 35.4073 23.7298 35.0979L22.625 34.0833ZM12.2715 20.5918C11.7111 19.9816 10.7622 19.9412 10.1521 20.5016C9.5419 21.0619 9.50152 22.0108 10.0619 22.621L12.2715 20.5918ZM35.1881 22.6212C35.7485 22.011 35.7081 21.0621 35.0979 20.5018C34.4878 19.9414 33.5389 19.9818 32.9785 20.592L35.1881 22.6212ZM0.5 36.5V45.25H3.5V36.5H0.5ZM0.5 45.25C0.5 48.6098 3.22362 51.3333 6.58333 51.3333V48.3333C4.88044 48.3333 3.5 46.9529 3.5 45.25H0.5ZM6.58333 51.3333H38.6667V48.3333H6.58333V51.3333ZM38.6667 51.3333C42.0265 51.3333 44.75 48.6098 44.75 45.25H41.75C41.75 46.9529 40.3696 48.3333 38.6667 48.3333V51.3333ZM44.75 45.25V36.5H41.75V45.25H44.75ZM21.125 2V34.0833H24.125V2H21.125ZM23.7298 33.0687L12.2715 20.5918L10.0619 22.621L21.5202 35.0979L23.7298 33.0687ZM23.7298 35.0979L35.1881 22.6212L32.9785 20.592L21.5202 33.0687L23.7298 35.0979Z" fill="white" mask="url(#path-1-outside-1_0_1147)" />
                    </svg>
                    Datasheet of Solar Inverter
                </a>
            </div>
            <div class="col-md-6">
                <a class="downlode_btn" href="https://www.ksquareenergy.com/public/images/B2B%20New%20Catalouge_compressed.pdf" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="52" viewBox="0 0 45 52" fill="none">
                        <mask id="path-1-outside-1_0_1147" maskUnits="userSpaceOnUse" x="0" y="0" width="45" height="52" fill="black">
                            <rect fill="white" width="45" height="52" />
                            <path d="M2 36.5V45.25C2 47.7814 4.05203 49.8333 6.58333 49.8333H38.6667C41.198 49.8333 43.25 47.7814 43.25 45.25V36.5M22.625 2V34.0833V2ZM22.625 34.0833L11.1667 21.6064L22.625 34.0833ZM22.625 34.0833L34.0833 21.6066L22.625 34.0833Z" />
                        </mask>
                        <path d="M3.5 36.5C3.5 35.6716 2.82843 35 2 35C1.17157 35 0.5 35.6716 0.5 36.5H3.5ZM44.75 36.5C44.75 35.6716 44.0784 35 43.25 35C42.4216 35 41.75 35.6716 41.75 36.5H44.75ZM24.125 2C24.125 1.17157 23.4534 0.5 22.625 0.5C21.7966 0.5 21.125 1.17157 21.125 2H24.125ZM22.625 34.0833L21.5202 35.0979C21.8043 35.4073 22.205 35.5833 22.625 35.5833C23.045 35.5833 23.4457 35.4073 23.7298 35.0979L22.625 34.0833ZM12.2715 20.5918C11.7111 19.9816 10.7622 19.9412 10.1521 20.5016C9.5419 21.0619 9.50152 22.0108 10.0619 22.621L12.2715 20.5918ZM35.1881 22.6212C35.7485 22.011 35.7081 21.0621 35.0979 20.5018C34.4878 19.9414 33.5389 19.9818 32.9785 20.592L35.1881 22.6212ZM0.5 36.5V45.25H3.5V36.5H0.5ZM0.5 45.25C0.5 48.6098 3.22362 51.3333 6.58333 51.3333V48.3333C4.88044 48.3333 3.5 46.9529 3.5 45.25H0.5ZM6.58333 51.3333H38.6667V48.3333H6.58333V51.3333ZM38.6667 51.3333C42.0265 51.3333 44.75 48.6098 44.75 45.25H41.75C41.75 46.9529 40.3696 48.3333 38.6667 48.3333V51.3333ZM44.75 45.25V36.5H41.75V45.25H44.75ZM21.125 2V34.0833H24.125V2H21.125ZM23.7298 33.0687L12.2715 20.5918L10.0619 22.621L21.5202 35.0979L23.7298 33.0687ZM23.7298 35.0979L35.1881 22.6212L32.9785 20.592L21.5202 33.0687L23.7298 35.0979Z" fill="white" mask="url(#path-1-outside-1_0_1147)" />
                    </svg>
                    Ksquare Company Profile
                </a>
            </div>
        </div>

    </div>
</section>
<section class="comman_space" id="Contact_us">
    <div class="container">
        <h2 class="title ">Start a new <span class="title_blue"> project?</span></h2>
        <div class="contact_wrapper">
             <div class="row">
                 <div class="col-md-6">
                    <form method="post" action="{{ route('landingSubmit') }}" class="contact_form">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').slice(0, 50);" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Id">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" minlength="10" maxlength="15" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"  placeholder="Enter Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="inverter_type" class="form-label">Select Inverter Type</label>
                            <select class="form-select" id="inverter_type" name="inverter_type">
                                <option value="3.6 - 6 KW, Single MPPT -20A">3.6 - 6 KW, Single MPPT -20A</option>
                                <option value="4 - 25 kW Solar Inverter">4 - 25 kW Solar Inverter</option>
                                <option value="1.3 - 3 KW Solar Inverter">1.3 - 3 KW Solar Inverter</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city">
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="demo_btn">Send Message</button>
                        </div>
                    </form>
                 </div>
                 <div class="col-md-6">
                    <!--<img src="./img/blueblack-solar-house.svg" alt="contact" class="img-fluid">-->
                    <img src="{{asset('public/images/landing/blueblack-solar-house.png')}}" alt="contact" class="w-100 h-100">
                 </div>
             </div>
        </div>
    </div>
</section>
<footer class="footer">
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-start text-md-start">
                    <img src="./img/logo.svg" alt="" class="" width="200">
            </div>
            <div class="col-md-6 text-start mt-3 mt-md-0 text-md-end">
               <div class="footer_social ">
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container-fluid p-0">
    <div class="header-marquee">
    <div class="runner-start">
    <div class="marquee-line">
        <span class="marquee-line_text">Logo Design</span>
        <span class="marquee-line_text">Stationery Design</span>
        <span class="marquee-line_text">Employee ID Cards</span>
        <span class="marquee-line_text">Uniform Design</span>
        <span class="marquee-line_text">Presentation Templates</span>
        <span class="marquee-line_text">Signages</span>
        <span class="marquee-line_text">Email Signature</span>
        <span class="marquee-line_text">Screen Savers & Wallpapers</span>
        <span class="marquee-line_text">Brand Architecture</span>
        <span class="marquee-line_text">Brand Manual</span>
        <span class="marquee-line_text">Logo Design</span>
        <span class="marquee-line_text">Stationery Design</span>
        <span class="marquee-line_text">Employee ID Cards</span>
        <span class="marquee-line_text">Uniform Design</span>
        <span class="marquee-line_text">Presentation Templates</span>
        <span class="marquee-line_text">Signages</span>
        <span class="marquee-line_text">Email Signature</span>
        <span class="marquee-line_text">Screen Savers & Wallpapers</span>
        <span class="marquee-line_text">Brand Architecture</span>
        <span class="marquee-line_text">Brand Manual</span>
    </div>
</div>
    </div>
    </div> -->
    
        <div class="ft_content">
            <div class="container">
            <div class="row g-3 g-md-5">
               <div class="col-md-4 mb-4 mb-md-0">
               <!--<img src="./img/ft_logo.svg" alt="ft_logo" class="" width="200">-->
               <img src="{{asset('public/images/landing/ft_logo.svg')}}" alt="ft_logo" class="" width="200">
               <p class="text-white mt-4">
               Ksquare Energy offers an extensive selection of solar inverters designed to meet the unique energy needs of both homes and businesses. From on-grid solutions to off-grid and hybrid inverters.
               </p>
               <div class="footer_social ">
                    <a href="https://in.linkedin.com/company/ksquare-energy" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <!-- <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a> -->
                    <a href="https://www.facebook.com/ksquareenergy/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/ksquare_energy/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
               </div>
               <div class="col-md-4  mb-4 mb-md-0">
                    <div class="footer_menu">
                        <h2 class="text-justify ft_24"><span class="me-3"><i class="fa-solid fa-location-dot"></i></span> Ahmedabad Branch Office</h2>
                        <p>B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210</p>
                        <h2 class="text-justify ft_24 mt-5"><span class="me-3"><i class="fa-solid fa-phone"></i></span> Contact Us</h2>
                         <div><a href="tel:+91 7227931916 " class="me-4">+91 7227931916</a> <a href="tel:+91 79 6969 7979 ">+91 79 6969 7979</a></div>
                    </div>
               </div>
               <div class="col-md-4  mb-4 mb-md-0">
                    <div class="footer_menu">
                        <h2 class="text-justify ft_24"><span class="me-3"><i class="fa-solid fa-location-dot"></i></span> Surat Branch Office</h2>
                        <p>233, Marvella Business Hub, Opp, Pal RTO, Adajan, Surat, Gujarat 395009.</p>
                        <h2 class="text-justify ft_24 mt-5"><span class="me-3"><i class="fa-solid fa-envelope"></i></span> Contact Us</h2>
                        <p><a href="mailto:info@ksquareenergy.com"> info@ksquareenergy.com</a></p>
                        
                        
                    </div>
               </div>
            </div>
            </div>
        </div>
</footer>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
//     // Toggle the hamburger menu on click
// document.getElementById("hamburgerToggle").addEventListener("click", function () {
//     const icon = this.querySelector("i"); // Select the <i> element inside the button
//     if (icon.classList.contains("fa-bars")) {
//         icon.classList.remove("fa-bars");
//         icon.classList.add("fa-times"); // Change to close icon
//     } else {
//         icon.classList.remove("fa-times");
//         icon.classList.add("fa-bars"); // Change back to menu icon
//     }
// });
   document.addEventListener("DOMContentLoaded", function() {
            const navbarToggler = document.getElementById("hamburgerToggle");
            const navbarCollapse = document.getElementById("navbarSupportedContent");
            const icon = navbarToggler.querySelector("i"); // Select the <i> element inside button
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                toggle: false
            }); // Bootstrap Collapse instance

            // Toggle navbar and icon
            navbarToggler.addEventListener("click", function() {
                if (navbarCollapse.classList.contains("show")) {
                    bsCollapse.hide(); // Properly close the menu
                } else {
                    bsCollapse.show(); // Properly open the menu
                }
                icon.classList.toggle("fa-bars");
                icon.classList.toggle("fa-times");
            });

            // Close menu when clicking a nav link
            document.querySelectorAll(".nav-link").forEach(item => {
                item.addEventListener("click", function() {
                    bsCollapse.hide(); // Properly close the menu
                    icon.classList.add("fa-bars"); // Reset to menu icon
                    icon.classList.remove("fa-times");
                });
            });
        });

//sticky header
document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("header");
    
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            if (!header.classList.contains("scrolled")) {
                header.classList.add("scrolled");
                header.style.animation = "slideDown 0.5s ease-in-out"; // Add animation
            }
        } else {
            header.classList.remove("scrolled");
            header.style.animation = ""; // Remove animation
        }
    });
});

// counter js 
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
        let target = Number(counter.getAttribute("data-target").replace(/,/g, "")); // Remove commas
        let count = 0;
        let speed = target / 100; // Adjust speed

        let updateCount = () => {
            if (count < target) {
                count += speed;
                counter.innerText = formatNumber(Math.ceil(count));
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = formatNumber(target); // Ensure exact final value
            }
        };

        updateCount();
    });

    // Function to format numbers (commas only for 6+ digits)
    function formatNumber(num) {
        return num >= 100000 ? num.toLocaleString("en-IN") : num;
    }
});
</script>
<script>
$(document).ready(function() {
    $('.contact_form').on('submit', function(e) {
        e.preventDefault();
        
        // Reset previous error states
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        
        let isValid = true;

        // Validate all input, select, and textarea fields
        $('.contact_form input, .contact_form select, .contact_form textarea').each(function() {
            if ($(this).val().trim() === '') {
                $(this).addClass('is-invalid');

                // Check if an error message already exists to avoid duplicates
                if (!$(this).next('.invalid-feedback').length) {
                    $(this).after('<div class="invalid-feedback">This field is required.</div>');
                }
                
                isValid = false;
            }
        });

        if (!isValid) {
            return;
        }

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.status) {
                    // Redirect to the Thank-You page after success
                    window.location.href = "{{ route('thank-you') }}";
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    
                    // Display validation errors
                    $.each(errors, function(key, value) {
                        let field = $('[name="' + key + '"]');
                        field.addClass('is-invalid');

                        // Check if an error message already exists to avoid duplicates
                        if (!field.next('.invalid-feedback').length) {
                            field.after('<div class="invalid-feedback">' + value[0] + '</div>');
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }
        });
    });

    // Remove error message when user starts typing or selecting
    $('.contact_form input, .contact_form textarea').on('input', function() {
        if ($(this).val().trim() !== '') {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        }
    });

    // Remove error message when a select field is changed
    $('.contact_form select').on('change', function() {
        if ($(this).val() !== '') {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        }
    });
});
</script>


</body>

</html>