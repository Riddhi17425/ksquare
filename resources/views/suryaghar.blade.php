<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/suryaghar/ksqaure.png') }}">
    <title>PM Surya Ghar Muft Bijli Yojana</title>
    <meta name="description" content="PM Surya Ghar Muft Bijli Yojana offers free electricity to households in India. Learn more about the scheme and eligibility. Contact us for details!">

    <!-- bootstrap 5 cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
<style>
    *{box-sizing: border-box;}
:root{
 --wb-blue:#1A2E9E;
 --wb-black:#1C1C1C;
 --wb-lg-blue: #040B39 ;
 --black:#000;
 --white:#fff;
 --wb-golden:#7E5632;
 --wb-lg-gold:#F4E2C6;
 --wb-border:#E1D7C7;
}

body{background: linear-gradient(115deg, #F8F5F1 3.28%, #F6F5F3 79.8%), #FFF; color: var(--wb-golden);font-family: 'Nunito Sans', sans-serif;font-size: 18px;font-style: normal;font-weight: 400;line-height: 28px;}
.wrapper {
    max-width: 1567px;
    margin: 0 auto;
    padding: 0 15px;
}
.indian_homes_scheme, .sustainable, .documents, .bijli_yojana, .trusted_solar_partner, .asked_questions{margin-top: 80px;}
.soler_name{font-family: 'Gupter',sans-serif;font-size: 55px;font-style: normal;font-weight: 500;line-height: 64px;letter-spacing: -0.58px;color: var(--wb-blue);}
.soler_name span{color: var(--wb-lg-blue);}
.video_are img{border-radius: 20px;}
.play_btn {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}
.play_btn img {width: 114px !important;}
.logo {max-width: 1660px;border-bottom: 1px solid var(--wb-border);padding: 0 0 0 90px;margin-bottom: 30px;}
.logo img {padding: 23px 20px 23px 0;border-right: 1px solid var(--wb-border);}
.bg_effect {background: linear-gradient(90deg, #1A2E9E 0%, #040B39 100%);padding: 80px 137px 80px 60px;transform: translateY(-16%);}
.custom_hg {height: 716px;}
.money_save{color: var(--white);font-size: 28px;font-weight: 600;line-height: normal;}
.opportunity p{color: var(--wb-lg-gold);}
.respo {padding-right: 0;max-width: 640px;margin: 0 auto;}
.opportunity {max-width: 500px;margin: 0 0 0 auto;text-align: right;}
.apply{color: var(--white);font-family: 'Gupter',sans-serif;font-size: 44px;font-style: normal;font-weight: 500;line-height: normal;}
.fm_input {width: 100%;background: transparent;border: 0;border-bottom: 1px solid #5263C6;color: var(--wb-lg-gold);margin-top: 6px;}
::placeholder{color: var(--wb-lg-gold);}
label{color: var(--white);font-family: 'Gupter',sans-serif;margin-top: 32px; width: 100%;}
textarea{resize: none;}
.fm_input:focus-visible {outline: none;}
.submit_btn {color: var(--white);background: transparent;padding: 9px 27px;border-radius: 6px;border: 1px solid var(--white);margin-top: 27px;}
.counters {padding: 48px 0;border: 1px solid var(--wb-border);border-right: 0;border-left: 0;}
.counter{color: var(--wb-black);font-family: 'Gupter',sans-serif;font-size: 54px;font-style: normal;font-weight: 600;line-height: 60px;}
.schemes{color: var(--wb-black);font-family: 'Gupter',sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: normal;}
.sustainable_slides{border-radius: 6px;border: 1px solid var(--wb-golden);background: #F7F5F2; display: block; text-decoration: none;}
.slid_inner_info{padding: 24px;height:245px;}
.slid_inner_info h2{color: var(--wb-black);font-family: 'Gupter',sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: normal;}
.slid_inner_info p{color: var(--wb-golden);}
.sustainable_area{margin:0 20px;}
.sustainable_area:first-child{margin-right: 0px;}

/* ======Slider Arrows css=======  */
.sustainable_slider .slick-prev:before, .slick-next:before, .step-slider .slick-prev:before, .slick-next:before {font-family: unset;display: none;}
.sustainable_slider button.slick-prev.slick-arrow, .step-slider button.slick-prev.slick-arrow{top: -20%;left: 87%;}
.sustainable_slider button.slick-next.slick-arrow, .step-slider button.slick-next.slick-arrow{top: -20%;right: 7%;}
/* ======Slider Arrows css=======  */

.documents{background-image: url('public/suryaghar/documents-banner.jpg');background-repeat: no-repeat; background-size: cover; padding: 100px 0;}
.info_box {border-radius: 6px;background: #F6F5F3;width: 700px;padding: 30px;margin: 0 0 0 auto;}
.step {padding: 20px;}
.circle { width: 50px; height: 50px; line-height: 50px; border-radius: 50%; background-color: #DEE7FB; color: var(--wb-black); font-weight: bold; text-align: center; margin: 0;}
.step h4{color: var(--wb-black);font-family: 'Gupter',sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: normal;}
.brd_box{border: 1px solid var(--wb-golden);border-radius: 50%;width: 60px;height: 60px;display: flex;align-items: center;justify-content: center;margin-bottom: 10px;background: linear-gradient(115deg, #F8F5F1 3.28%, #F6F5F3 79.8%)}
.step-slider::before {content: "";position: absolute;border: 1px solid var(--wb-golden);width: 97%;top: 18%;right: 0;}
.trusted_solar_partner{background-image: url('public/suryaghar/trusted_solar_partner.jpg');background-repeat: no-repeat; background-size: cover; padding: 100px 0;}
.asked_questions .accordion-item {margin-bottom: 30px;border: none;background: transparent;border-bottom: 1px solid #C6C5C2;border-radius: 0;}
.asked_questions .accordion-button {background: transparent;box-shadow: none;color: var(--wb-black);}
.accordion-button:focus{color: var(--wb-black);}

footer{padding: 60px 0; border-top: 1px solid #C6C5C2; margin-top: 40px;}
.ft_head{color: var(--wb-black);font-family: 'Gupter',sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: normal;}
.ft_links{text-decoration: none;color: var(--wb-golden);}
.ft_links:hover{color: var(--wb-golden);}
.ft_bottom{margin-top: 50px;}


/* qualify */
.qualify{margin-top: 34px;}

.circle-card {
    width: 166px;
    height: 166px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    border: 1px solid var(--wb-golden);
    padding: 10px;
    position: relative;
}

.inner_circle{background-color: #DEE7FB;border-radius: 50%;height: 160px;width: 155px;display: flex;flex-direction: column;align-items: center;justify-content: center;padding: 10px;}
.circle_info{position: absolute;left: -56%;width: 180px;top: 90%;}

.item-1{top: 93%;left:-17%;}
.item-2{bottom: -150%;left: 16%;}
.item-3{bottom: -95%;left: 16%;}
.item-4{bottom: -145%;left: -45px;}
.item-5{bottom: -278%;left: 290%;}
.item-3 .circle_info{left: 45%;top: 85%;}
.item-5 .circle_info{left: 0;top:110%;}
.item-4 .circle_info{left: 21%;top:97%;}


.circle-slider { margin-top: -15%;margin-bottom: 300px;}

.circle-slider {
    display: flex;
    justify-content: center;
    align-items: center;
    position:relative;
}
.circle-content {
    width: 700px;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    top:42%;
}
.circle-slider .circle-shap1 {
    z-index: 2;
    width: 950px;
    height: 900px;
    border-radius: 468.717px;
    border-bottom: 0.972px solid rgba(44, 14, 58, 0.60);
}
.right_circle_wrapper{display: flex;flex-direction: column;justify-content: flex-end;align-items: flex-end;}
.quality_mob{display:none;}

.indian_p{margin-bottom:70px;}

@media only screen and (max-width: 1535px){
    .respo {max-width: 548px;}
    .soler_name{font-size: 46px;}
    .bg_effect{padding: 67px;}
    .logo{padding: 0 0 0 45px;}
    .wrapper {max-width: 1246px;}
}

@media only screen and (max-width: 1367px){
    .custom_hg {height: 691px;}
    .wrapper {max-width: 1160px;}
    .eligibility-grid::before {
        height: 81%;
        width: 81%;
        right: 9%;
        top: 0%;
    }
}

@media only screen and (max-width: 1199px){
    .bg_effect {padding: 40px;transform: translateY(-18%);}
    .custom_hg {height: 633px;}
    .soler_name {font-size: 39px;line-height: 50px;}
    .money_save{font-size: 20px;}
    .apply{font-size: 31px;}
    .respo{padding-right: 12px;}
    .logo {padding-left: 13px;}
    .sustainable_slider button.slick-prev.slick-arrow, .step-slider button.slick-prev.slick-arrow {left: 84%;}
    footer{padding: 50px 0 40px;}
}

@media only screen and (max-width: 991px){
    .respo{max-width:unset}
    .custom_hg {height: auto;}
    .video_are img{width: 100%;}
    .bg_effect{transform: translateY(0);margin-top: 10px;}
    .soler_name{font-size: 42px;}
    .counter{font-size: 40px;}
    .counters{padding: 28px 0;}
    .indian_homes_scheme, .sustainable, .documents, .bijli_yojana, .trusted_solar_partner, .asked_questions {margin-top: 50px;}
    .respo_cl {padding-bottom: 62px;}
    .sustainable_slider button.slick-prev.slick-arrow, .step-slider button.slick-prev.slick-arrow {left: 79%;}
    .info_box{margin: 0 auto;}
}

@media only screen and (max-width: 769px){
    .info_box{width: 500px;}
    .ft_bottom, .respo_ft {margin-top: 31px;}
    .qualitydesk{display:none;}
    .quality_mob{display:block;}
    /*.circle-content{width:100%;top:0;position:static;}*/
    /*.circle-slider .circle-shap1{height:100%;width:100%;border-bottom:none;}*/
    /*.circle-slider{margin-top:0;flex-direction:column;}*/
    /*.right_circle_wrapper{display:block;}*/
    /*.circle_info{left:0;top:100%;}*/
    /*.circle-card{position:static;}*/
    /*.circle-shap1 .col-md-12{display: flex;flex-direction: column;align-items: center;}*/
    /*.inner_circle p{text-align:center!important;}*/
    /*.item-1{top: 73%;left: 7%;}*/
    /*.item-2 {bottom: -20%;left: 67%;}*/
}

@media only screen and (max-width: 575px){
    .sustainable_slider button.slick-prev.slick-arrow, .step-slider button.slick-prev.slick-arrow {
        left: 74%;
    }
    .info_box {width: 100%;}
    .respo_cl {padding-bottom: 90px;}
    .info_box .schemes {display: flex;align-items: center;}
}

@media only screen and (max-width: 479px){}

@media only screen and (max-width: 319px){}

</style>

</head>

<body>
    <header class="top_head">
        <div class="logo">
            <a href="javascript:void(0)"><img src="{{ asset('public/suryaghar/logo.svg') }}" alt="Logo"></a>
        </div>
        <div class="container-fluid">
            <div class="row custom_hg">
                <div class="col-lg-6 col-md-12 respo">
                    <h1 class="soler_name">Transform Your Home into a Powerhouse of Solar Energy <span>with PM Surya
                            Ghar Scheme!</span></h1>

                    <div class="video_are position-relative pt-3">
                        <img src="{{ asset('public/suryaghar/video_banner.jpg') }}" alt="Video" class="img-fluid">
                        <!--<div class="play_btn">-->
                        <!--    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="{{ asset('public/suryaghar/video-play.png') }}" alt="Play Video"></a>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 bg_effect">
                    <div class="opportunity">
                        <h4 class="money_save"><i>Save money & energy now!</i></h4>
                        <p>Govt-backed PM Surya Ghar Scheme brings solar energy subsidies to you. Don’t miss this golden
                            opportunity! </p>
                    </div>
                    <h2 class="apply">Apply for Subsidy</h2>

                    <div>
                        <form method="post" action="{{ route('suryagharstore') }}" id="contact_form">
                            @csrf
                            <label for="full_name">Full Name *:</label><br>
                            <input class="fm_input" type="text" id="full_name" name="full_name" 
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').slice(0, 50);" 
                                placeholder="Enter your Full Name"><br>
                        
                            <label for="email">Email ID *:</label><br>
                            <input class="fm_input" type="email" id="email" name="email" 
                                placeholder="Enter your Email ID"><br>
                        
                            <label for="phone">Phone Number *:</label><br>
                            <input class="fm_input" type="tel" id="phone" name="phone" minlength="10" maxlength="15" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" 
                                placeholder="Enter your Phone Number"><br>
                        
                            <label for="message">Message</label><br>
                            <textarea class="fm_input" id="message" name="message" 
                                placeholder="Enter your Message" rows="1"></textarea><br>
                        
                            <input class="submit_btn" type="submit" value="Contact us">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="counters">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-2">
                    <h3 class="counter" data-target="650">0</h3>
                    <p>Happy Clients in B2B Solar industry</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <h3 class="counter" data-target="2000">0</h3>
                    <p>Residential and Commercial Solar Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <h3 class="counter" data-target="6000">0</h3>
                    <p>Happy Clients in B2C Solar industry</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <h3 class="counter" data-target="500000">0</h3>
                    <p>We have supplied products to our customers across India.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="indian_homes_scheme">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <h5>India’s Largest Solar Initiative</h5>
                    <h2 class="soler_name">Powering 1 Crore Indian Homes with Solar Energy through the PM Surya Ghar
                        Scheme!</h2>
                </div>
                <div class="col-lg-5 col-md-12">
                    <p class="text-end">The PM Surya Ghar Muft Bijli Yojana is a groundbreaking government initiative that provides free solar electricity to households across India. By installing rooftop solar panels, eligible families receive up to 300 units of free electricity every month, significantly reducing power costs and promoting clean energy. This scheme also offers financial assistance for the installation of solar systems, ensuring access to affordable and sustainable energy. </p>
                </div>
                <div class="col-lg-7 col-md-12 mb-2">
                    <img src="{{ asset('public/suryaghar/Indian-Homes.jpg') }}"" alt="Home" class="img-fluid mt-2">
                </div>
                <div class="col-lg-5 col-md-12 mb-2">
                    <!--<p class="text-end">PM Surya Ghar Muft Bijli Yojana is a game-changing scheme that offers free solar-->
                    <!--    power for households across India. If you qualify, you’ll receive financial assistance to-->
                    <!--    install a rooftop solar system and cut down on your electricity bills.</p>-->

                    <div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-2">
                                <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Bills.svg') }}" alt="Bills"></span>
                                    Zero Electricity Bills </h4>
                                <p>With the PM Surya Ghar Muft Bijli Yojana, eligible households can save up to ₹18,000
                                    per year by generating their own solar power.</p>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-2">
                                <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/HomesTarget.svg') }}"
                                            alt="HomesTarget"></span> 1 Crore Homes Target</h4>
                                <p>This scheme aims to solarize 1 crore homes across India, making renewable energy
                                    affordable for middle-class families.</p>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-2">
                                <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Govt-Backed.svg') }}"
                                            alt="Govt-Backed"></span> Govt-Backed Subsidy</h4>
                                <p>Get direct financial assistance from the government to install a rooftop solar system
                                    with a hassle-free subsidy process.</p>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-2">
                                <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/future.svg') }}"
                                            alt="future"></span> Sustainable Future </h4>
                                <p>By installing solar panels, your home becomes self-sufficient in energy productionand
                                    protecting against rising electricity costs. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sustainable">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-2">
                    <h5>India’s Largest Solar Initiative</h5>
                    <h2 class="soler_name">PM Surya Ghar Scheme – Sustainable, Smart, and Savings-Driven!</h2>
                </div>
                <div class="col-lg-5 col-md-12 mb-2">
                    <p class="text-end respo_cl">The PM Surya Ghar Muft Bijli Yojana is a government initiative aimed at
                        providing free solar electricity to millions of households. By installing </p>
                </div>
                <div class="sustainable_slider mt-3">
                    <div class="sustainable_area">
                        <a href="" class="sustainable_slides">
                            <img src="{{ asset('public/suryaghar/Reduction_in_Carbon_Emissions.jpg') }}"" alt="slider" class="img-fluid w-100">
                            <div class="slid_inner_info">
                                <h2>Reduction in Carbon Emissions</h2>
                                <p>Utilizing solar power reduces reliance on fossil fuels, thereby decreasing greenhouse gas emissions and contributing to a cleaner environment.</p>
                            </div>
                        </a>
                    </div>
                    <div class="sustainable_area">
                        <a href="" class="sustainable_slides">
                            <img src="{{ asset('public/suryaghar/Eco_Friendly_&_Sustainable_Living.jpg') }}"" alt="slider" class="img-fluid w-100">
                            <div class="slid_inner_info">
                                <h2>Eco-Friendly & Sustainable Living</h2>
                                <p>Solar power helps in reducing carbon footprints, ensuring a cleaner and greener environment for future generations.</p>
                            </div>
                        </a>
                    </div>
                    <div class="sustainable_area">
                        <a href="" class="sustainable_slides">
                            <img src="{{ asset('public/suryaghar/Cut_Down_on_Electricity_Costs.jpg') }}"" alt="slider" class="img-fluid w-100">
                            <div class="slid_inner_info">
                                <h2>Cut Down on Electricity Costs</h2>
                                <p>Power your home with solar energy and see a drastic reduction in your monthly power bills, saving thousands annually. </p>
                            </div>
                        </a>
                    </div>
                    <div class="sustainable_area">
                        <a href="" class="sustainable_slides">
                            <img src="{{ asset('public/suryaghar/Reliable_and_Renewable_Energy_Supply.jpg') }}"" alt="slider" class="img-fluid w-100">
                            <div class="slid_inner_info">
                                <h2>Reliable and Renewable Energy Supply</h2>
                                <p>Enjoy uninterrupted power, even during outages, with a self-sufficient solar energy system tailored to your home’s needs. </p>
                            </div>
                        </a>
                    </div>
                    <div class="sustainable_area">
                        <a href="" class="sustainable_slides">
                            <img src="{{ asset('public/suryaghar/Seamless_Application_&_Quick_Approval.jpg') }}"" alt="slider" class="img-fluid w-100">
                            <div class="slid_inner_info">
                                <h2>Seamless Application & Quick Approval</h2>
                                <p>A simple online process ensures quick approvals and subsidy disbursals, eliminating long waiting times and paperwork hassles. </p>
                            </div>
                        </a>
                    </div>
                    <div class="sustainable_area">
                        <a href="" class="sustainable_slides">
                            <img src="{{ asset('public/suryaghar/Energy_Independence_for_Your_Home.jpg') }}"" alt="slider" class="img-fluid w-100">
                            <div class="slid_inner_info">
                                <h2>Energy Independence for Your Home</h2>
                                <p>Say goodbye to power cuts and voltage fluctuations—solar energy ensures a reliable power supply round the clock. </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="documents">
        <div class="wrapper">
            <div class="info_box">
                <h5>Essential Documents</h5>
                <h2 class="soler_name">Documents Required for PM Surya Ghar Yojana Registration</h2>
                <p>To apply for the PM Surya Ghar Muft Bijli Yojana, you need to provide the following documents. Ensure
                    you have them ready to make the application process smooth and hassle-free.</p>

                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/AadhaarCard.svg') }}"
                                    alt="Aadhaar Card"></span>Aadhaar Card</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Bills.svg') }}"
                                    alt="Bills"></span>Electricity Bill</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/BankAccount.svg') }}"
                                    alt="Bank Account"></span>Bank Account Details</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/IncomeCertificate.svg') }}"
                                    alt="Income Certificate"></span>Income Certificate</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Ownership.svg') }}"
                                    alt="Ownership"></span>Property Ownership Document</h4>
                    </div>
                </div>
            </div>


        </div>
    </section>

     <section class="qualify">
         <img src="{{ asset('public/suryaghar/quality_desktop.svg') }}" class="img-fluid qualitydesk">
         <div class="text-center quality_mob">
            <h5>Are You Eligible for Free Solar Electricity?</h5>
            <h2 class="soler_name">Check If You Qualify for PM Surya Ghar Muft Bijli Yojana</h2>
            <p>The PM Surya Ghar Muft Bijli Yojana is designed to make solar power accessible to every
                household. To benefit from this scheme, you must meet the following eligibility requirements:
            </p>
            <img src="{{ asset('public/suryaghar/check_quality_mob.svg') }}" class="img-fluid">
        </div>
        <div class="circle-slider d-none">
            <div class="circle-content" id="circleContent">
                <div class="item-6 text-center">
                    <h5>Are You Eligible for Free Solar Electricity?</h5>
                    <h2 class="soler_name">Check If You Qualify for PM Surya Ghar Muft Bijli Yojana</h2>
                    <p>The PM Surya Ghar Muft Bijli Yojana is designed to make solar power accessible to every
                        household. To benefit from this scheme, you must meet the following eligibility requirements:
                    </p>
                </div>
            </div>
            <div class="circle-shap1">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="circle-card item-1 mb-4">
                            <div class="inner_circle">
                                <img height="64" width="64" src="{{ asset('public/suryaghar/IndianCitizenship.svg') }}"
                                    alt="Indian Citizenship">
                                <p>Indian Citizenship</p>
                            </div>
                            <div class="circle_info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" viewBox="0 0 35 60"
                                    fill="none">
                                    <path
                                        d="M34.3679 0.99993C32.9709 14.9806 25.9114 41.336 8.12938 38.2713C-4.01132 36.1792 1.03157 22.6595 14.2163 25.453C27.401 28.2466 30.0523 50.7025 4.01695 55.7555M4.01695 55.7555L6.37703 51.0269M4.01695 55.7555L10.5014 58.5755"
                                        stroke="#AC8663" stroke-linecap="round"></path>
                                </svg>
                                <p class="text-start">The applicant must be a citizen of India to apply for the scheme.</p>
                            </div>
                        </div>
                        <div class="circle-card item-2 mb-5">
                            <div class="inner_circle">
                                <img height="64" width="64" src="{{ asset('public/suryaghar/PropertyOwnership.svg') }}"
                                    alt="Property Ownership">
                                <p>Property Ownership</p>
                            </div>
                            <div class="circle_info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" viewBox="0 0 35 60"
                                    fill="none">
                                    <path
                                        d="M34.3679 0.99993C32.9709 14.9806 25.9114 41.336 8.12938 38.2713C-4.01132 36.1792 1.03157 22.6595 14.2163 25.453C27.401 28.2466 30.0523 50.7025 4.01695 55.7555M4.01695 55.7555L6.37703 51.0269M4.01695 55.7555L10.5014 58.5755"
                                        stroke="#AC8663" stroke-linecap="round"></path>
                                </svg>
                                <p class="text-start">Applicants must own a house with a suitable rooftop for installing solar panels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-end right_circle_wrapper">
                        <div class="circle-card item-3 mb-5">
                            <div class="inner_circle">
                                <img height="64" width="64" src="{{ asset('public/suryaghar/Lower-IncomeHousehold.svg') }}"
                                    alt="Lower-Income Household">
                                <p>Lower-Income Household</p>
                            </div>
                            <div class="circle_info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" viewBox="0 0 27 64" fill="none">
                                    <path d="M8.99671 0.999942C4.32817 14.2519 -0.465294 41.1121 16.9365 45.884C28.8174 49.1423 29.9892 34.7604 16.8652 31.6941C3.74121 28.6278 -8.18999 47.8357 13.2397 63.4607M13.2397 63.4607L13.1095 58.1775M13.2397 63.4607L6.17132 63.2621" stroke="#AC8663" stroke-linecap="round"/>
                                </svg>
                                <p class="text-end">This scheme is aimed at supporting financially weaker sections, making solar power more affordable.</p>
                            </div>
                        </div>
                        <div class="circle-card item-4 mb-5">
                            <div class="inner_circle">
                                <img height="64" width="64" src="{{ asset('public/suryaghar/NoPreviousSolarSubsidy.svg') }}"
                                    alt="No Previous Solar Subsidy">
                                <p class="text-end">No Previous Solar Subsidy</p>
                            </div>
                            <div class="circle_info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" viewBox="0 0 35 60"
                                    fill="none">
                                    <path
                                        d="M34.3679 0.99993C32.9709 14.9806 25.9114 41.336 8.12938 38.2713C-4.01132 36.1792 1.03157 22.6595 14.2163 25.453C27.401 28.2466 30.0523 50.7025 4.01695 55.7555M4.01695 55.7555L6.37703 51.0269M4.01695 55.7555L10.5014 58.5755"
                                        stroke="#AC8663" stroke-linecap="round"></path>
                                </svg>
                                <p>If you have already received a government subsidy for solar panels, you may not be eligible for this scheme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="circle-card item-5">
                            <div class="inner_circle">
                                <img height="64" width="64" src="{{ asset('public/suryaghar/ValidElectricityConnection.svg') }}"
                                    alt=" Valid Electricity Connection">
                                <p> Valid Electricity Connection</p>
                            </div>
                            <div class="circle_info">                                
                                <p>A registered electricity meter connection is necessary to qualify for the subsidy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bijli_yojana">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-2">
                    <h5>Simple Steps to Get Your Free Solar Power</h5>
                    <h2 class="soler_name">Steps to apply for the PM Surya Ghar Muft Bijli Yojana</h2>
                </div>
                <div class="col-lg-5 col-md-12 mb-2">
                    <p class="text-end respo_cl">Follow these easy steps to apply for the PM Surya Ghar Muft Bijli
                        Yojana and start saving on electricity.</p>
                </div>
            </div>
            <div class="step-slider position-relative">
                <div class="step">
                    <div class="brd_box">
                        <h5 class="circle">1</h5>
                    </div>
                    <h4>Visit the official website</h4>
                    <p>Open your browser and visit the official website for the PM Surya Ghar Muft Bijli Yojana scheme.
                    </p>
                </div>
                <div class="step">
                    <div class="brd_box">
                        <h5 class="circle">2</h5>
                    </div>
                    <h4>Apply for rooftop solar</h4>
                    <p>On the homepage, click the "Apply for Rooftop Solar" button located on the left side.</p>
                </div>
                <div class="step">
                    <div class="brd_box">
                        <h5 class="circle">3</h5>
                    </div>
                    <h4>Fill details about yourself</h4>
                    <p>Provide your state, district, electricity distribution company, and customer account number, then
                        click Next to proceed.</p>
                </div>
                <div class="step">
                    <div class="brd_box">
                        <h5 class="circle">4</h5>
                    </div>
                    <h4>Create your account</h4>
                    <p>Enter your email address and phone number to complete the registration process and create your
                        account.</p>
                </div>
                <div class="step">
                    <div class="brd_box">
                        <h5 class="circle">5</h5>
                    </div>
                    <h4>Login into the portal</h4>
                    <p>Use your electricity customer number and mobile number to log in to the portal.</p>
                </div>
                <div class="step">
                    <div class="brd_box">
                        <h5 class="circle">6</h5>
                    </div>
                    <h4>Login into the portal</h4>
                    <p>Use your electricity customer number and mobile number to log in to the portal.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="trusted_solar_partner">
        <div class="wrapper">
            <div class="info_box">
                <h5>Your Trusted Solar Partner</h5>
                <h2 class="soler_name">Seamless Solar Solutions with Maximum Savings</h2>
                <p>Ksquare Energy ensures a hassle-free solar journey—from installation to subsidy approval. Get expert
                    support, certified solar solutions, and after-sales service for a worry-free experience. We handle
                    everything—from design and installation to subsidy claims—so you can enjoy solar savings without the
                    stress.</p>

                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Certified.svg') }}"
                                    alt="Certified"></span>Certified Installers</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Assistance.svg') }}"
                                    alt="Assistance"></span>End-to-End Assistance</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Installation.svg') }}"
                                    alt="Installation"></span>Fast & Secure Installation</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Lifetime.svg') }}"
                                    alt="Lifetime"></span>Lifetime Support</h4>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-2">
                        <h4 class="schemes"><span class="pe-2"><img src="{{ asset('public/suryaghar/Support.svg') }}" alt="Support"></span>24/7
                            Customer Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="asked_questions">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-2">
                    <h2 class="soler_name">Frequently Asked Questions About PM Surya Ghar Muft Bijli Yojana</h2>
                </div>
                <div class="col-lg-7 col-md-12 mb-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is the PM Surya Ghar Muft Bijli Yojana?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    It's a government scheme launched on February 15, 2024, to offer free electricity by subsidizing rooftop solar panel installations for households. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Who is eligible for this scheme?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Eligibility criteria include:
                                    <ul>
                                        <li>Indian citizenship</li>
                                        <li>Ownership of a house with a suitable roof for solar panels</li>
                                        <li>A valid electricity connection</li>
                                        <li>Not having received any prior solar panel subsidies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. How much subsidy is provided?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The government offers a subsidy covering up to 40% of the solar panel installation cost.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    4. How can I apply for the scheme?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Applications can be submitted online through the official portal.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    5. What documents are required for application?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Required documents include:
                                    <ul>
                                        <li>Proof of identity</li>
                                        <li>Proof of address</li>
                                        <li>Electricity bill</li>
                                        <li>Roof ownership certificate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    6. What are the benefits of installing rooftop solar panels under this scheme?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Benefits include:
                                    <ul>
                                        <li>Up to 300 units of free electricity per month</li>
                                        <li>Reduced electricity costs</li>
                                        <li>Increased use of renewable energy</li>
                                        <li>Reduced carbon emissions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                   7. Is there a deadline to apply for the scheme?
                                </button>
                            </h2>
                            <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The scheme is operational until March 31, 2027.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingeight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                   8. Can I relocate the installed solar panels if I move to a new house?
                                </button>
                            </h2>
                            <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, the solar installations are designed to be dismantled and reassembled, allowing you to move them to your new residence if needed.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <img src="{{ asset('public/suryaghar/logo.svg') }}" alt="Logo" class="mb-3">
                    <p>Ksquare Energy offers an extensive selection of solar inverters designed to meet the unique
                        energy needs of both homes and businesses. From on-grid solutions to off-grid and hybrid
                        inverters.</p>

                    <div class="d-flex gap-3 flex-wrap">
                        <a href="https://www.linkedin.com/company/ksquare-energy-pvt-ltd" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35"
                                fill="none">
                                <path
                                    d="M31.4832 0.762207H2.51016C1.12227 0.762207 0 1.85791 0 3.2126V32.3052C0 33.6599 1.12227 34.7622 2.51016 34.7622H31.4832C32.8711 34.7622 34 33.6599 34 32.3118V3.2126C34 1.85791 32.8711 0.762207 31.4832 0.762207ZM10.0871 29.7353H5.04023V13.5056H10.0871V29.7353ZM7.56367 11.2942C5.94336 11.2942 4.63516 9.98603 4.63516 8.37236C4.63516 6.75869 5.94336 5.45049 7.56367 5.45049C9.17734 5.45049 10.4855 6.75869 10.4855 8.37236C10.4855 9.97939 9.17734 11.2942 7.56367 11.2942ZM28.973 29.7353H23.9328V21.8462C23.9328 19.9669 23.8996 17.5431 21.3098 17.5431C18.6867 17.5431 18.2883 19.595 18.2883 21.7134V29.7353H13.2547V13.5056H18.0891V15.7235H18.1555C18.8262 14.4485 20.473 13.1005 22.9234 13.1005C28.0301 13.1005 28.973 16.4606 28.973 20.8302V29.7353V29.7353Z"
                                    fill="#2B398B" />
                            </svg></a>

                        <a href="https://www.facebook.com/ksquareenergy/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35"
                                fill="none">
                                <g clip-path="url(#clip0_10_412)">
                                    <path
                                        d="M34 17.7622C34 8.37336 26.3888 0.762207 17 0.762207C7.61115 0.762207 0 8.37336 0 17.7622C0 26.2473 6.21662 33.2804 14.3438 34.5557V22.6763H10.0273V17.7622H14.3438V14.0169C14.3438 9.75627 16.8818 7.40283 20.7649 7.40283C22.6243 7.40283 24.5703 7.73486 24.5703 7.73486V11.9185H22.4267C20.315 11.9185 19.6562 13.229 19.6562 14.5747V17.7622H24.3711L23.6174 22.6763H19.6562V34.5557C27.7834 33.2804 34 26.2473 34 17.7622Z"
                                        fill="#2B398B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_10_412">
                                        <rect width="34" height="34" fill="white" transform="translate(0 0.762207)" />
                                    </clipPath>
                                </defs>
                            </svg></a>

                        <a href="https://www.instagram.com/ksquare_energy/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35"
                                fill="none">
                                <path
                                    d="M17 3.82353C21.5422 3.82353 22.0801 3.84346 23.8664 3.92314C25.5266 3.99619 26.423 4.2751 27.0207 4.50752C27.8109 4.81299 28.382 5.18486 28.973 5.77588C29.5707 6.37353 29.9359 6.93799 30.2414 7.72822C30.4738 8.32588 30.7527 9.229 30.8258 10.8825C30.9055 12.6755 30.9254 13.2134 30.9254 17.7489C30.9254 22.2911 30.9055 22.829 30.8258 24.6153C30.7527 26.2755 30.4738 27.172 30.2414 27.7696C29.9359 28.5599 29.5641 29.131 28.973 29.722C28.3754 30.3196 27.8109 30.6849 27.0207 30.9903C26.423 31.2228 25.5199 31.5017 23.8664 31.5747C22.0734 31.6544 21.5355 31.6743 17 31.6743C12.4578 31.6743 11.9199 31.6544 10.1336 31.5747C8.47344 31.5017 7.57695 31.2228 6.9793 30.9903C6.18906 30.6849 5.61797 30.313 5.02695 29.722C4.4293 29.1243 4.06406 28.5599 3.75859 27.7696C3.52617 27.172 3.24727 26.2688 3.17422 24.6153C3.09453 22.8224 3.07461 22.2845 3.07461 17.7489C3.07461 13.2067 3.09453 12.6688 3.17422 10.8825C3.24727 9.22236 3.52617 8.32588 3.75859 7.72822C4.06406 6.93799 4.43594 6.36689 5.02695 5.77588C5.62461 5.17822 6.18906 4.81299 6.9793 4.50752C7.57695 4.2751 8.48008 3.99619 10.1336 3.92314C11.9199 3.84346 12.4578 3.82353 17 3.82353ZM17 0.762207C12.3848 0.762207 11.807 0.782129 9.99414 0.861816C8.18789 0.941504 6.94609 1.23369 5.87031 1.65205C4.74805 2.09033 3.79844 2.66807 2.85547 3.61768C1.90586 4.56064 1.32813 5.51025 0.889844 6.62588C0.471484 7.7083 0.179297 8.94346 0.0996094 10.7497C0.0199219 12.5692 0 13.147 0 17.7622C0 22.3774 0.0199219 22.9552 0.0996094 24.7681C0.179297 26.5743 0.471484 27.8161 0.889844 28.8919C1.32813 30.0142 1.90586 30.9638 2.85547 31.9067C3.79844 32.8497 4.74805 33.4341 5.86367 33.8657C6.94609 34.2841 8.18125 34.5763 9.9875 34.656C11.8004 34.7356 12.3781 34.7556 16.9934 34.7556C21.6086 34.7556 22.1863 34.7356 23.9992 34.656C25.8055 34.5763 27.0473 34.2841 28.123 33.8657C29.2387 33.4341 30.1883 32.8497 31.1312 31.9067C32.0742 30.9638 32.6586 30.0142 33.0902 28.8985C33.5086 27.8161 33.8008 26.581 33.8805 24.7747C33.9602 22.9618 33.9801 22.3841 33.9801 17.7688C33.9801 13.1536 33.9602 12.5759 33.8805 10.763C33.8008 8.95674 33.5086 7.71494 33.0902 6.63916C32.6719 5.51025 32.0941 4.56064 31.1445 3.61768C30.2016 2.67471 29.252 2.09033 28.1363 1.65869C27.0539 1.24033 25.8188 0.948145 24.0125 0.868457C22.193 0.782129 21.6152 0.762207 17 0.762207Z"
                                    fill="#2B398B" />
                                <path
                                    d="M17 9.02979C12.1789 9.02979 8.26758 12.9411 8.26758 17.7622C8.26758 22.5833 12.1789 26.4946 17 26.4946C21.8211 26.4946 25.7324 22.5833 25.7324 17.7622C25.7324 12.9411 21.8211 9.02979 17 9.02979ZM17 23.4267C13.8723 23.4267 11.3355 20.8899 11.3355 17.7622C11.3355 14.6345 13.8723 12.0978 17 12.0978C20.1277 12.0978 22.6645 14.6345 22.6645 17.7622C22.6645 20.8899 20.1277 23.4267 17 23.4267Z"
                                    fill="#2B398B" />
                                <path
                                    d="M28.1164 8.68467C28.1164 9.81358 27.2 10.7233 26.0777 10.7233C24.9488 10.7233 24.0391 9.80694 24.0391 8.68467C24.0391 7.55576 24.9555 6.646 26.0777 6.646C27.2 6.646 28.1164 7.5624 28.1164 8.68467Z"
                                    fill="#2B398B" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <h3 class="ft_head"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                viewBox="0 0 24 25" fill="none" style="margin-right: 10px;">
                                <path
                                    d="M6.03252 16.1682L12.0001 22.8809L17.9677 16.1682C22.5447 11.0197 18.8894 2.88086 12.0001 2.88086C5.1108 2.88086 1.4555 11.0197 6.03252 16.1682Z"
                                    stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M15 10.8809C15 12.5378 13.6569 13.8809 12 13.8809C10.3432 13.8809 9 12.5378 9 10.8809C9 9.22401 10.3432 7.88086 12 7.88086C13.6569 7.88086 15 9.22401 15 10.8809Z"
                                    stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span>Ahmedabad Branch Office
                    </h3>
                    <a class="ft_links" href="https://maps.app.goo.gl/cicTRjNeybQkK5Ct9" target="_blank">B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad -
                        382210</a>

                    <div class="ft_bottom">
                        <h3 class="ft_head"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none" style="margin-right: 10px;">
                                    <path
                                        d="M3.51089 2.88086L7.15002 3.01255C7.91653 3.04028 8.59676 3.52432 8.89053 4.25106L9.96656 6.91299C10.217 7.53245 10.1496 8.23923 9.78693 8.7972L8.40831 10.9184C9.22454 12.0905 11.4447 14.8367 13.7955 16.4442L15.5484 15.3654C15.9939 15.0912 16.5273 15.0098 17.0314 15.139L20.5161 16.0326C21.4429 16.2703 22.0674 17.1591 21.9942 18.1361L21.7705 21.1194C21.6919 22.1663 20.8351 22.9878 19.818 22.8696C6.39245 21.3085 -1.48056 2.88083 3.51089 2.88086Z"
                                        stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Contact Us
                        </h3>
                        <a class="ft_links" href="tel:+91 7227931916">+91 7227931916</a> ,
                        <a class="ft_links" href="tel:+91 79 6969 7979">+91 79 6969 7979</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <h3 class="ft_head respo_ft"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                viewBox="0 0 24 25" fill="none" style="margin-right: 10px;">
                                <path
                                    d="M6.03252 16.1682L12.0001 22.8809L17.9677 16.1682C22.5447 11.0197 18.8894 2.88086 12.0001 2.88086C5.1108 2.88086 1.4555 11.0197 6.03252 16.1682Z"
                                    stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M15 10.8809C15 12.5378 13.6569 13.8809 12 13.8809C10.3432 13.8809 9 12.5378 9 10.8809C9 9.22401 10.3432 7.88086 12 7.88086C13.6569 7.88086 15 9.22401 15 10.8809Z"
                                    stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span>Surat Branch Office
                    </h3>
                    <a class="ft_links" href="https://maps.app.goo.gl/TxWjYdU8YfXsgXke8" target="_blank">233, Marvella Business Hub, Opp, Pal RTO, Adajan, Surat, Gujarat
                        395009.</a>

                    <div class="ft_bottom">
                        <h3 class="ft_head"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none" style="margin-right:10px;">
                                    <path
                                        d="M20.5 6.38086L12 13.8809L3.5 6.38086M4 19.8809H20C20.5523 19.8809 21 19.4332 21 18.8809V6.88086C21 6.32858 20.5523 5.88086 20 5.88086H4C3.44772 5.88086 3 6.32858 3 6.88086V18.8809C3 19.4332 3.44772 19.8809 4 19.8809Z"
                                        stroke="#1C1C1C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Contact Us
                        </h3>
                        <a class="ft_links" href="mailto:info@ksquareenergy.com">info@ksquareenergy.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </footer>

</body>

<!-- jquery cdn  -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<!-- bootstrap bundle cdn  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- Slick JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  counters.forEach((counter) => {
    const target = +counter.getAttribute("data-target");

    const updateCounter = () => {
      const count = +counter.innerText.replace(/\+/g, "");
      const increment = target / 100;
      if (count < target) {
        counter.innerText = Math.ceil(count + increment) + "+";
        setTimeout(updateCounter, 30);
      } else {
        counter.innerText = target + "+";
      }
    };

    updateCounter();
  });
});

$(document).ready(function () {
    if ($(".sustainable_slider").length) {
      $(".sustainable_slider").slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        infinite: true, 
        prevArrow:
          '<button type="button" class="slick-prev"><img src="{{ asset('public/suryaghar/Previous.svg') }}" alt="Previous"></button>',
        nextArrow:
          '<button type="button" class="slick-next"><img src="{{ asset('public/suryaghar/Next.svg') }}" alt="Next"></button>',
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }
  });
  

$(document).ready(function(){
    $('.step-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: true,
        infinite: true, 
        prevArrow:
          '<button type="button" class="slick-prev"><img src="{{ asset('public/suryaghar/Previous.svg') }}" alt="Previous"></button>',
        nextArrow:
          '<button type="button" class="slick-next"><img src="{{ asset('public/suryaghar/Next.svg') }}" alt="Next"></button>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              },
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
        ]
    });
});

</script>
<script>
$(document).ready(function() {
    $('#contact_form').on('submit', function(e) {
        e.preventDefault();
        
        // Reset previous error states
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        
        let isValid = true;

        // Validate all input, select, and textarea fields
        $('#contact_form input, #contact_form select, #contact_form textarea').each(function() {
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
                        let field = $('#' + key);
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
    $('#contact_form input, #contact_form textarea').on('input', function() {
        if ($(this).val().trim() !== '') {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        }
    });

    // Remove error message when a select field is changed
    $('#contact_form select').on('change', function() {
        if ($(this).val() !== '') {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        }
    });
});
</script>

</html>