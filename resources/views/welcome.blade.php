@extends('layouts.header')

@section('css')

@endsection

@section('body')
    <!-- menu style two -->
    <div id="side-bar" class="side-bar mazin-home">
        <button class="close-icon-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="40" viewbox="0 0 37 40" fill="none">
                <path d="M1.34412 39.4243L35.9024 0.918108" stroke="black"></path>
                <path d="M35.9023 39.4243L1.3441 0.918108" stroke="black"></path>
            </svg>
        </button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <!-- <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/mazin-01.svg" alt="axela_logo"></a> -->
            <div class="inner-wrapper">
                <div class="body-mobile">
                    <nav class="nav-main mainmenu-nav mt--30">
                        <ul class="mainmenu" id="mobile-menu-active">
                            <li class="one">
                                <a href="#home">Home</a>
                            </li>
                            <li class="two">
                                <a href="#about">About Us</a>
                            </li>
                            <li class="three">
                                <a href="#service">Services</a>
                            </li>
                            <li class="four">
                                <a href="#works">Works</a>
                            </li>
                            <li class="five">
                                <a href="#blog">Blog</a>
                            </li>
                            <li class="six">
                                <a href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="contact-info-area-wrapper">
                    <div class="phone single">
                        <h6 class="title">
                            PHONE:
                        </h6>
                        <a href="#">+8801010999999</a>
                    </div>
                    <div class="address single">
                        <h6 class="title">
                            ADDRESS:
                        </h6>
                        <a href="#">121 King Street, gulsam Victoria 3000, USA.</a>
                    </div>
                    <div class="mail single">
                        <h6 class="title">
                            E-mail:
                        </h6>
                        <a href="#">info.example@gmail.com</a>
                    </div>
                    <div class="follow single">
                        <h6 class="title">
                            FOLLOW US:
                        </h6>
                        <div class="social-wrapper-two">
                            <ul class="social-area">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.facebook.com/kamlesh.raghuwanshi.98?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://x.com/raghukamlesh?t=JHKZiaP5QNgvn3GmbLqZkQ&s=08"><i class="fab fa-twitter"></i></a></li>
                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.linkedin.com/in/dr-kamlesh-kumar-raghuvanshi-10355222?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a></li>
                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <!-- menu style two End -->

    <!-- rts banner threea area start -->
    <div class="rts-banner-area-start banner-three-main rts-section-gapTop" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-three-wrapper">
                        <div class="left-area">
                            <h1 class="title quote">
                                Meet Man Who Care <br>
                                About <span>The City</span>
                            </h1>
                            <div class="content">
                                <p class="disc">
                                    Laoreet accumsan viverra aptent suscipit leo metus dmaecenas turpis, <br> rhoncus
                                    tristique
                                    facilisi torquent blandit inceptos
                                </p>
                                <div class="rts-button-area text-anim">
                                    <a href="#service" class="rts-btn btn-main-3 smooth-scroll-1">
                                        My Services
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="right-area">
                            <img src="assets/images/banner/politician-1.jpg" alt="banner-area">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image-banner-three">
            <img src="assets/images/banner/shape/05-1.png" alt="shape-image">
        </div>
    </div>
    <!-- rts banner threea area end -->

    <!-- marquery -->
    <div class="marque-text-area">
        <div class="marquee_text">
            <div>
                <div class="js-marquee" style="margin-right: 50px; float: left;">Work For The People</div>
                <div class="js-marquee" style="margin-right: 50px; float: left;">Work For The People</div>
            </div>
        </div>
    </div>
    <!-- marquery end -->

    <!-- cv area downlaod -->
    <div class="rts-download-cv-area pt--60" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="download-area-inner">
                        <div class="socials">
                            <p class="disc">
                                Follow Me
                            </p>
                            <div class="social-area-wrapper">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/kamlesh.raghuwanshi.98?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://x.com/raghukamlesh?t=JHKZiaP5QNgvn3GmbLqZkQ&s=08" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/in/dr-kamlesh-kumar-raghuvanshi-10355222?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="download-btn">
                            <a href="#" class="rts-btn btn-main-3-alta">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cv area downlaod end -->

    <!-- rts service area start -->
    <div class="rts-service-h4 rts-section-gap" id="service">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        What We Do
                    </span>
                    <h2 class="title">
                        Our Included <span>Service</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/10-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Democracy
                            </h5>
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur elit sceleri sque, dis non rutrum ad mattis hacle
                                sem pulvinar potenti taciti.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/11-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Family
                            </h5>
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur elit sceleri sque, dis non rutrum ad mattis hacle
                                sem pulvinar potenti taciti.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/12-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Ecology
                            </h5>
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur elit sceleri sque, dis non rutrum ad mattis hacle
                                sem pulvinar potenti taciti.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/13-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Social Care
                            </h5>
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur elit sceleri sque, dis non rutrum ad mattis hacle
                                sem pulvinar potenti taciti.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/14-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Policy
                            </h5>
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur elit sceleri sque, dis non rutrum ad mattis hacle
                                sem pulvinar potenti taciti.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/15-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Education
                            </h5>
                            <p class="disc">
                                Lorem ipsum dolor sit amet consectetur elit sceleri sque, dis non rutrum ad mattis hacle
                                sem pulvinar potenti taciti.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
            </div>
        </div>
    </div>
    <!-- rts service area end -->

    <!-- rts about kiills area -->
    <div class="rts-skill-area about-h3 rts-section-gapBottom" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-area-main-wrapper text-anim">

                        <!-- tab area start -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">About Me</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contactg-tab" data-bs-toggle="tab" data-bs-target="#contactg" type="button" role="tab" aria-controls="contactg" aria-selected="false">Awards</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-none" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-none" id="contactes-tab" data-bs-toggle="tab" data-bs-target="#contactes" type="button" role="tab" aria-controls="contactes" aria-selected="false">Skillset</button>
                            </li>
                        </ul>
                        <!-- tab area End -->

                        <!-- tab content area start -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 pb_sm--20">
                                            <div class="content-main">
                                                <h2 class="title">
                                                    Ideological Leader For <br> Youth Generation
                                                </h2>
                                                <p class="about-disc">
                                                    Viverra quisi integer portitor hac morbi nostra habitant varius
                                                    tempor felissoc squaptent vestibulum lectus vel acmsan risus litora
                                                    nibh velit pulvinar ornare porttitor consequat rutrum interdum
                                                </p>
                                                <div class="about-contact-h2">
                                                    <div class="first-line">
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Name</span>
                                                                <a href="#" class="disc">
                                                                    Thomas Smith
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Phone Number</span>
                                                                <a href="#" class="disc">
                                                                    +256 31548 325
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="first-line second">
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Email Address</span>
                                                                <a href="#" class="disc">
                                                                    info@example.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Address</span>
                                                                <a href="#" class="disc">
                                                                    12 SJ Lane, Berlin
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- single tab content hear -->
                                            <div class="thumbnail">
                                                <img src="assets/images/about/07-1.jpg" alt="About_image">
                                            </div>
                                            <!-- single tab content hear End -->
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contactg" role="tabpanel" aria-labelledby="contactg-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <!-- single tab content hear -->
                                            <div class="thumbnail">
                                                <img src="assets/images/skill/01-1.webp" alt="About_image">
                                            </div>
                                            <!-- single tab content hear End -->
                                        </div>
                                        <div class="col-lg-6 pb_sm--20">
                                            <div class="content-main">
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title">Council on Foreign Relations</h6>
                                                    <p class="disc">
                                                        Council on Foreign Relations of the year 2023. Phasellus eleifend tempor dolor, in vestibulum ante semper et.
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title">Award of Innovation </h6>
                                                    <p class="disc">
                                                        Award of Innovation 2023. Phasellus eleifend tempor dolor, in vestibulum ante semper et.
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title">Heroic Act Award </h6>
                                                    <p class="disc">
                                                        Heroic Act Award 2023. Phasellus eleifend tempor dolor, in vestibulum ante semper et.
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title">Outstanding Rookie Award</h6>
                                                    <p class="disc">
                                                        Outstanding Rookie Award 2023. Phasellus eleifend tempor dolor, in vestibulum ante semper et.
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">USA Community Collage</h6>
                                                <p class="disc">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet dapibus nibh ut faucibus nunc, egestas id amet porttitor. Pulvinar quisque sed amet, nulla nunc.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Diploma & Course</h6>
                                                <p class="disc">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet dapibus nibh ut faucibus nunc, egestas id amet porttitor. Pulvinar quisque sed amet, nulla nunc.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">UI / UX Design</h6>
                                                <p class="disc">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet dapibus nibh ut faucibus nunc, egestas id amet porttitor. Pulvinar quisque sed amet, nulla nunc.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">North South New University</h6>
                                                <p class="disc">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet dapibus nibh ut faucibus nunc, egestas id amet porttitor. Pulvinar quisque sed amet, nulla nunc.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Wedding Photography Course</h6>
                                                <p class="disc">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet dapibus nibh ut faucibus nunc, egestas id amet porttitor. Pulvinar quisque sed amet, nulla nunc.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Apps Development Course</h6>
                                                <p class="disc">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet dapibus nibh ut faucibus nunc, egestas id amet porttitor. Pulvinar quisque sed amet, nulla nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contactes" role="tabpanel" aria-labelledby="contactes-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="content-main">
                                                <h2 class="title">
                                                    Ideological Leader For <br> Youth Generation
                                                </h2>
                                                <p class="about-disc">
                                                    Viverra quisi integer portitor hac morbi nostra habitant varius
                                                    tempor felissoc squaptent vestibulum lectus vel acmsan risus litora
                                                    nibh velit pulvinar ornare porttitor consequat rutrum interdum
                                                </p>
                                                <div class="progress-h4-area">
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Social Astuteness
                                                            </p>
                                                            <span class="parcent">
                                                                85%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Interpersonal Influence
                                                            </p>
                                                            <span class="parcent">
                                                                65%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 65%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Networking Ability
                                                            </p>
                                                            <span class="parcent">
                                                                75%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 75%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Apparent Sincerity
                                                            </p>
                                                            <span class="parcent">
                                                                90%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 90%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- single tab content hear -->
                                            <div class="thumbnail">
                                                <img src="assets/images/about/06-1.jpg" alt="">
                                            </div>
                                            <!-- single tab content hear End -->
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                        </div>
                        <!-- tab content area End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about kiills area End -->

    <!-- rts counter up section start -->
    <div class="rts-section-gapBottom rts-counter-up-h3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter-wrapper-h3 text-anim">
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">136</span></h3>
                                <span class="exp-time">Social Work</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">30</span></h3>
                                <span class="exp-time">Project Complete</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">25</span></h3>
                                <span class="exp-time">Assemble</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">853</span></h3>
                                <span class="exp-time">Member</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">1.8</span></h3>
                                <span class="exp-time">Done Work</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts counter up section end -->

    <!-- projects area start -->
    <div class="rts-project-area rts-section-gapBottom" id="portfolio">
        <div class="contailer-fill-screen">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        Case Studies
                    </span>
                    <h2 class="title">
                        My Latest <span>Projects</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="swiper project-h3-swiper product-slider-wrapper">
                        <div class="swiper-wrapper">
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/product/20-1.jpg" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/product/21-1.jpg" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/product/22-1.jpg" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/product/23-1.jpg" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/product/08-1.jpg" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/product/09-1.jpg" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->

                        </div>
                        <div class="swiper-button-wrapper-project-ho-3">
                            <div class="swiper-button-next testimonials-slider-next-btn"></div>
                            <div class="swiper-button-prev testimonials-slider-prev-btn"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- projects area end -->

    <!-- rts clients feedback area start -->
    <div class="rts-client-feedback rts-section-gapBottom pt_sm--60">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        Our Testimonials
                    </span>
                    <h2 class="title">
                        People’s <span>Feedbacks</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 text-anim">
                    <!-- single-testimonials -->
                    <div class="rts-single-testimonials-h3 text-center">
                        <div class="top-area">
                            <img class="quote" src="assets/images/testimonials/quote-1.png" alt="Quote">
                            <p class="disc">
                                “Bibendum auctor enim mi aliquam porta himenaeos mollis ultricies nec. Justo nostra
                                vestibulum litora purus laoreet leo blandit tincidunt mattis natoqu”
                            </p>
                            <div class="start-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="client-profile-area">
                            <img src="assets/images/testimonials/02-1.png" alt="Profile">
                            <div class="discription">
                                <p class="name">
                                    Thomas Adision
                                </p>
                                <span>
                                    Social Worker
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonials End -->
                </div>
                <div class="col-lg-4 col-md-6 text-anim">
                    <!-- single-testimonials -->
                    <div class="rts-single-testimonials-h3 text-center">
                        <div class="top-area">
                            <img class="quote" src="assets/images/testimonials/quote-1.png" alt="Quote">
                            <p class="disc">
                                “Bibendum auctor enim mi aliquam porta himenaeos mollis ultricies nec. Justo nostra
                                vestibulum litora purus laoreet leo blandit tincidunt mattis natoqu”
                            </p>
                            <div class="start-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="client-profile-area">
                            <img src="assets/images/testimonials/03-1.png" alt="Profile">
                            <div class="discription">
                                <p class="name">
                                    Mark Adision
                                </p>
                                <span>
                                    Social Worker
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonials End -->
                </div>
                <div class="col-lg-4 col-md-6 text-anim">
                    <!-- single-testimonials -->
                    <div class="rts-single-testimonials-h3 text-center">
                        <div class="top-area">
                            <img class="quote" src="assets/images/testimonials/quote-1.png" alt="Quote">
                            <p class="disc">
                                “Bibendum auctor enim mi aliquam porta himenaeos mollis ultricies nec. Justo nostra
                                vestibulum litora purus laoreet leo blandit tincidunt mattis natoqu”
                            </p>
                            <div class="start-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="client-profile-area">
                            <img src="assets/images/testimonials/04-1.png" alt="Profile">
                            <div class="discription">
                                <p class="name">
                                    Jone Adision
                                </p>
                                <span>
                                    Social Worker
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonials End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts clients feedback area end -->

    <!-- rts blog area start -->
    <div class="rts-blog-area-h2 blog-h3 rts-section-gapBottom" id="blog">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        News Insights
                    </span>
                    <h2 class="title">
                        Our Latest <span>Updates</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="blog-details-1.html" class="thumbnail">
                            <img src="assets/images/blog/15-1.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="blog-details-1.html">
                                <h5 class="title">
                                    We must once again come together
                                </h5>
                            </a>
                            <a href="blog-details-1.html" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="blog-details-1.html" class="thumbnail">
                            <img src="assets/images/blog/13-1.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="blog-details-1.html">
                                <h5 class="title">
                                    Main principle – stability in the future!
                                </h5>
                            </a>
                            <a href="blog-details-1.html" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="blog-details-1.html" class="thumbnail">
                            <img src="assets/images/blog/14-1.jpg" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="blog-details-1.html">
                                <h5 class="title">
                                    A simple plan to fix our economy
                                </h5>
                            </a>
                            <a href="blog-details-1.html" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->


@endsection
