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
                        <a href="#">raghukamlesh@gmail.com</a>
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
                            Meet Kamlesh, 
                               Who<br> Cares About <span>Everyone</span>
                            </h1>
                            <div class="content">
                                <p class="disc">
                                "Welcome to my personal website, where my journey unfolds as a Politician, Leader, Social Worker, Entrepreneur, Professor, and Mentor. Discover how each role shapes my commitment to serving and inspiring others."                                </p>
                                <div class="rts-button-area text-anim">
                                    <a href="#workarea" class="rts-btn btn-main-3 smooth-scroll-1">
                                        My Workareas
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
                <div class="js-marquee" style="margin-right: 50px; float: left;">Politician Leader Social Worker Entrepreneur Professor  Mentor</div>
                <div class="js-marquee" style="margin-right: 50px; float: left;">Politician Leader Social Worker Entrepreneur Professor  Mentor</div>
            </div>
        </div>
    </div>
    <!-- marquery end -->

    <!-- cv area downlaod -->
    <div class="rts-download-cv-area pt--60">
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
                        <div class="download-btn" id="workarea">
                            <a href="#" class="rts-btn btn-main-3-alta">Download CV</a>s
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
                <div  class="title-area-h3 text-center" >
                    <span class="pre-title">
                        What We Do
                    </span>
                    <h2 class="title">
                        Our  <span>WorkAreas</span>
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
                                NGO
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Lokutthan Foundation is a prominent non-governmental organization dedicated to fostering social development and upliftment. The foundation aims to address the needs of underprivileged and marginalized communities through a range of impactful programs.                            </p>
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
                                Politices BJP
                            </h5>
                            <p class="disc" style="text-align: justify;">
                           Dr. Kamlesh kumar Reghuwanshi is an active and dedicated member of the Bharatiya Janata Party (BJP), contributing significantly to its initiatives and activities. His involvement with the party reflects his commitment to public service and the betterment of society through political engagement.
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
                               RSS
                            </h5>
                            <p class="disc"  style="text-align: justify;">
                            Dr. Kamlesh kumar Reghuwanshi is a dedicated member of the Rashtriya Swayamsevak Sangh (RSS), playing a significant role in its activities and initiatives. His involvement reflects a deep commitment to the organization's mission of promoting Hindu cultural values and contributing to national unity.
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
                               Manacle Mentor
                            </h5>
                            <p class="disc"  style="text-align: justify;">
                            The Esteemed Mentor serves as a respected guide at Manacle, a dynamic company focused on innovative solutions and business growth. Their mentorship is instrumental in guiding the company's strategic direction and fostering professional development within the organization.
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
                                IBM (Technologies)
                            </h5>
                            <p class="disc"  style="text-align: justify;">
                            Dr. Kamlesh kumar Reghuwanshi  has extensive experience with IBM’s suite of technologies, including artificial intelligence, cloud computing, data analytics, and blockchain. His deep understanding of these solutions enables him to implement and optimize IBM technologies effectively.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" >
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/15-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               Professor(CS)
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            The Esteemed Professor contributes to the development and enhancement of the college’s curriculum. Their insights help ensure that the courses are up-to-date with industry trends and academic standards, preparing students for future careers.
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
    <div class="rts-skill-area about-h3 rts-section-gapBottom" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-area-main-wrapper text-anim" id="about">

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
                                                The Leader For Youth Generation
                                                </h2>
                                                <p class="about-disc">
                                                Dr. Kamlesh Kumar Raghuvanshi is a distinguished academic and professional, holding a Doctor of Philosophy (Ph.D.) in Computer Science. With a profound expertise in his field, Dr. Raghuvanshi has made significant contributions to both academia and industry.
                                                </p>
                                                <div class="about-contact-h2">
                                                    <div class="first-line">
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Name</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">
                                                                   Dr.Kamlesh kumar Reghuwanshi
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Phone Number</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">

                                                                +919810298704
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
                                                                <a href="#" class="disc" style="font-size: 14px;">
                                                                raghukamlesh@gmail.com 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Address</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">
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
                                                <img src="assets/images/image-needed.png" alt="About_image">
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
                                                <img src="assets/images/image-needed.png" alt="About_image">
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
                                                <h6 class="title">11+ Years of Experience in IT Industry</h6>
                                                <p class="disc">
                                                Dr. Raghuvanshi has over 11 years of professional experience in the IT industry, specializing in the Telecom Billing Domain.
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">ComverseOne PCAT Expert:</h6>
                                                <p class="disc">
                                                He has worked as a ComverseOne PCAT expert, showcasing his in-depth knowledge and expertise in this area.                                    </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Green Field Implementation of Kenan FX 2.0</h6>
                                                <p class="disc">
                                                Dr. Raghuvanshi has been involved in the green field implementation of Kenan FX 2.0, demonstrating his capability in handling large-scale projects.                                               </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Expertise in Kenan FX Product Configuration</h6>
                                                <p class="disc">
                                                His prime areas of expertise include Kenan FX product configuration, rating, and Kenan FX 2.0 product installation.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Integration with Various External Systems</h6>
                                                <p class="disc">
                                                Dr. Raghuvanshi has worked extensively on integrating Kenan FX with various external systems like CRM, Payment Systems, NMS, and KIOSK using Kenan API-TS.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Knowledge of Kenan/Bp 12.0 Database and Processes:</h6>
                                                <p class="disc">
                                                He possesses extensive knowledge of the Kenan/Bp 12.0 database, collections, rating, billing, payment, and journaling processes.                                                </p>
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
                                                   The Leader For <br> Youth Generation
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
                                                                Social Awards
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
                                                <img src="assets/images/image-needed.png" alt="">
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
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
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
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh kumar Raghuwanshi expertise in Computer Science and the Telecom Billing Domain is unparalleled. His dedication to excellence and innovative approach make him an invaluable asset.
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
                            <img src="assets/images/testimonials/rishi-sir.jpg" alt="Profile" style="height:100px; width:100px; border-radius: 50%;">
                            <div class="discription">
                                <p class="name">
                                Dr. Rishi M Bhatnagar
                                </p>
                                <span>
                                Enterepnaur, Technology expert, Politician & Mentor
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
                            <p class="disc" style="text-align: justify;" >
                            Dr. Kamlesh kumar Raghuwanshi profound knowledge and expertise in the IT field are truly impressive. His dedication to his work and his innovative approach have greatly benefited our projects and initiatives.
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
                            <img src="assets/images/testimonials/bhopindernath.jpg" alt="Profile" style="height:100px; width:100px; border-radius: 50%;">
                            <div class="discription">
                                <p class="name">
                                Bhoopendra N Pandey
                                </p>
                                <span>
                                Vice President
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
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh kumar Raghuwanshi expertise and dedication are unmatched. His contributions to our projects have been invaluable, showcasing his exceptional skills and commitment to excellence.
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
                            <img src="assets/images/testimonials/shilendrapathak.PNG" alt="Profile" style="height:100px; width:100px; border-radius: 50%;">
                            <div class="discription">
                                <p class="name">
                                Shailendra Pathak
                                </p>
                                <span>
                                Secretary
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
                            <img src="assets/images/image-needed.png" alt="rts-blog-image">
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
                            <img src="assets/images/image-needed.png" alt="rts-blog-image">
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
                            <img src="assets/images/image-needed.png" alt="rts-blog-image">
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
