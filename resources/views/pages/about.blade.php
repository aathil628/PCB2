@extends('layouts.layout4')
@php
    $title = 'About Us';
    $subtitle = 'About Us';
@endphp
@section('title', 'About | MyFirstPCB')

@section('meta_description', 'Learn more about MyfirstPCB, our mission to simplify PCB design and manufacturing, and how we support electronics enthusiasts and professionals worldwide.')
@section('meta_keywords', 'about MyfirstPCB, PCB platform, electronics support, PCB design mission, PCB manufacturing, electronics community')
@section('content')


<x-strickyHeader/>

<!--About Three Start-->
<section class="about-three">
    <div class="about-three__shape-2 rotate-me"></div>
    <div class="about-three__shape-3 text-rotate-box"></div>
    <div class="about-three__shape-4 float-bob-y"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-three__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/about-three-shape-1.png') }}" alt="Robotics Education in Kerala">
                    </div>
                    <div class="about-three__img-box">
                        <div class="about-three__img-one">
                            <img src="{{ asset('assets/images/resources/about-three-img-1.png') }}" alt="Robotics Training Trivandrum">
                        </div>
                        <div class="about-three__img-two">
                            <img src="{{ asset('assets/images/resources/about-three-img-2.png') }}" alt="Robotics Lab Coimbatore">
                        </div>
                        <div class="about-three__experience-box">
                            <div class="about-three__experience-box-inner">
                                <div class="about-three__experience-icon">
                                    <img src="{{ asset('assets/images/icon/about-three-experience-icon.png') }}" alt="Sture Wikman Robotics Expert">
                                </div>
                                <div class="about-three__experience-count-box">
                                    <div class="about-three__experience-count">
                                        <h3 class="odometer" data-count="25">00</h3>
                                        <span>+</span>
                                        <p>Years</p>
                                    </div>
                                    <p>of industry-led experience</p>
                                </div>
                            </div>
                            <div class="about-three__experience-box-shape"></div>
                        </div>
                    </div>
                </div>
            </div>                
            <div class="col-xl-5">
                <div class="about-three__right">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-shape">
                                <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                            </div>
                            <span class="section-title-two__tagline">About Us</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">Empowering Minds with <span>Future Skills</span></h2>
                    </div>
                    <p class="about-three__text-1">
                        Nytt Robotics is a division of Nytt AB, Sweden, led by industry veteran <strong>Sture Wikman</strong>, bringing over 25 years of expertise in automation, robotics, and education. We specialize in delivering hands-on PCB design and fabrication course program in <strong>Trivandrum</strong> and <strong>Coimbatore</strong>, carefully tailored for school students and college students . our approach bridges classroom theory with real - world tech application , building critical thinking and problem - solving shills through electonics skills.
                    </p>
                    <div class="about-three__mission-vission">
                        <div class="about-three__tab-box tabs-box">
                            <ul class="tab-buttons clearfix list-unstyled">
                                <li data-tab="#mission" class="tab-btn active-btn"><span>Our Mission</span></li>
                                <li data-tab="#vission" class="tab-btn"><span>Our Vision</span></li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="mission">
                                    <div class="tabs-content__inner">
                                        <ul class="list-unstyled about-three__mission-vission-list">
                                            <li>
                                                <div class="about-three__mission-vission-content">
                                                    <h4 class="about-three__mission-vission-title">Igniting Interest in STEM</h4>
                                                    <p class="about-three__mission-vission-text">We introduce robotics early to spark curiosity and empower children with skills needed for future tech-driven careers.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="about-three__mission-vission-content">
                                                    <h4 class="about-three__mission-vission-title">Strengthening Industry Connections</h4>
                                                    <p class="about-three__mission-vission-text">We build academic-industry collaborations that help students apply what they learn in labs to real workplace challenges.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab" id="vission">
                                    <div class="tabs-content__inner">
                                        <ul class="list-unstyled about-three__mission-vission-list">
                                            <li>
                                                <div class="about-three__mission-vission-content">
                                                    <h4 class="about-three__mission-vission-title">To Lead India’s School Robotics Movement</h4>
                                                    <p class="about-three__mission-vission-text">Our vision is to be India’s most trusted name in school-level robotics education with hubs across Kerala and Tamil Nadu.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="about-three__mission-vission-content">
                                                    <h4 class="about-three__mission-vission-title">Enabling Future Engineers & Innovators</h4>
                                                    <p class="about-three__mission-vission-text">We want every student who experiences Nytt Robotics to come away with skills that prepare them for a smarter world.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->

<!-- Why Choose Three Start -->
<section class="why-choose-three">
    <div class="why-choose-three__shape-1 img-bounce"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-three__left">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-shape">
                                <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="Why Nytt Robotics Trivandrum">
                            </div>
                            <span class="section-title-two__tagline">Why Choose Us</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">Why Families in Trivandrum & Coimbatore <span>Trust Nytt Robotics</span></h2>
                    </div>
                    <p class="why-choose-three__text-1">we combine Sweden's advanced electronics knowledge with India's academic rigor to deliver engaging , curriculum - based  PCB design and Fabrication courses . Led by Sture Wikman's global Vision and local training teams , we offer hands-on workshops , online classes to create young leaders of tomorrow.</p>
                    <div class="why-choose-three__ceo-speech-box">
                        <div class="why-choose-three__ceo-speech">
                            <div class="why-choose-three__ceo-img-two">
                                <img src="{{ asset('assets/images/resources/why-choose-three-ceo-img-two.jpg') }}" alt="Sture Wikman, Robotics CEO">
                            </div>
                            <div class="why-choose-three__ceo-details">
                                <div class="why-choose-three__ceo-img">
                                    <img src="{{ asset('assets/images/resources/why-choose-three-ceo-img.jpg') }}" alt="Sture Wikman from Nytt AB Sweden">
                                </div>
                                <div class="why-choose-three__ceo-content">
                                    <p>CEO & FOUNDER</p>
                                    <h5>Sture Wikman</h5>
                                </div>
                            </div>
                            <p class="why-choose-three__ceo-text">"At Nytt, we are passionate about creating pathways between education and future-ready careers. Our robotics courses offer much more than just coding—they build character, confidence, and real-world problem-solving skills."
                            </p>
                        </div>
                        <div class="why-choose-three__ceo-speech-border"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="why-choose-three__right">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <ul class="list-unstyled why-choose-three__feature">
                                <li>
                                    <div class="why-choose-three__feature-single">
                                        <div class="why-choose-three__feature-img">
                                            <img src="{{ asset('assets/images/icon/why-choose-three-feature-1.png') }}" alt="AI Personalized Robotics Lessons">
                                        </div>
                                        <div class="why-choose-three__feature-content">
                                            <h4 class="why-choose-three__feature-title">Learn PCB Design:</h4>
                                            <p class="why-choose-three__feature-text">Master KiCAD 9, the industry-standard software, to create professional circuit schematics and layouts.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-three__feature-single">
                                        <div class="why-choose-three__feature-img">
                                            <img src="{{ asset('assets/images/icon/why-choose-three-feature-2.png') }}" alt="Robotics Mobile Learning">
                                        </div>
                                        <div class="why-choose-three__feature-content">
                                            <h4 class="why-choose-three__feature-title">Hands-On Fabrication:</h4>
                                            <p class="why-choose-three__feature-text">Experience the entire process of turning a digital design into a physical circuit board with our all-inclusive kit.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <ul class="list-unstyled why-choose-three__feature why-choose-three__feature--two">
                                <li>
                                    <div class="why-choose-three__feature-single">
                                        <div class="why-choose-three__feature-img">
                                            <img src="{{ asset('assets/images/icon/why-choose-three-feature-3.png') }}" alt="Gamified Robotics Projects">
                                        </div>
                                        <div class="why-choose-three__feature-content">
                                            <h4 class="why-choose-three__feature-title">Build a Working Project:</h4>
                                            <p class="why-choose-three__feature-text">Assemble, solder, and test your first functional PCB to gain real-world hardware development skills.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-three__feature-single">
                                        <div class="why-choose-three__feature-img">
                                            <img src="{{ asset('assets/images/icon/why-choose-three-feature-4.png') }}" alt="Real-Time Progress Analytics">
                                        </div>
                                        <div class="why-choose-three__feature-content">
                                            <h4 class="why-choose-three__feature-title">Real-Time Analytics & Reporting</h4>
                                            <p class="why-choose-three__feature-text">Parents and teachers get access to learning progress data—perfect for staying updated on student growth.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Three End -->


    <!-- Counter One Start -->
    <section class="counter-one">
        <div class="counter-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/counter-one-bg.jpg') }});">
            <div class="counter-one__video-link">
                <div class="counter-one__video-shape-1">
                    <img src="{{ asset('assets/images/shapes/counter-one-video-shape-1.png') }}" alt="">
                </div>
                <div class="counter-one__video-image">
                    <img src="{{ asset('assets/images/resources/counter-one-static.jpg') }}" alt="About preview">
                </div>
            </div>
        </div>
        <div class="counter-one__shape-1" style="background-image: url({{ asset('assets/images/shapes/counter-one-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="counter-one__left">
                        <ul class="counter-one__list list-unstyled">
                            <li>
                                <div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                    <span>k</span>
                                </div>
                                <p>Student Trained</p>
                            </li>
                            <li>
                                <div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="50" data-speed="1500">00</h3>
                                    <span>+</span>
                                </div>
                                <p>Recorded Courses</p>
                            </li>
                            <li>
                                <div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="15" data-speed="1500">00</h3>
                                    <span>M</span>
                                </div>
                                <p>Satisfaction Rate</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter One End -->


 <!-- Testimonial Two Start -->
 <section class="testimonial-two">
    <div class="testimonial-two__shape-6">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-6.png') }}" alt="Robotics testimonial section background">
    </div>
    <div class="testimonial-two__shape-1">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="Shape background">
        <div class="testimonial-two__shape-icon-1">
            <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-1.png') }}" alt="Quote icon" class="zoom-fade">
        </div>
        <div class="testimonial-two__shape-img-2">
            <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-2.jpg') }}" alt="Parent review from Kerala">
        </div>
        <div class="testimonial-two__shape-img-3 img-bounce">
            <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-3.jpg') }}" alt="Parent review from Tamil Nadu">
        </div>
    </div>
    <div class="testimonial-two__shape-2">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="Background shape">
        <div class="testimonial-two__shape-icon-2 float-bob-y">
            <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-2.png') }}" alt="Robotics star icon">
        </div>
        <div class="testimonial-two__shape-img-1 zoom-fade">
            <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-1.jpg') }}" alt="Nytt Robotics local testimonial image">
        </div>
    </div>
    <div class="testimonial-two__shape-3 float-bob-x">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-3.png') }}" alt="Testimonial pattern">
    </div>
    <div class="testimonial-two__shape-4"></div>
    <div class="testimonial-two__shape-5"></div>

    <div class="container">
        <div class="testimonial-two__inner">
            <div class="testimonial-two__quote">
                <span class="icon-quote"></span>
            </div>
            <div class="testimonial-two__slider">
                <div class="testimonial-two__main-content">
                    <div class="testimonial-two__carousel owl-carousel owl-theme">

                        <!-- Testimonial 1 -->
                        <div class="testimonial-two__item">
                            <div class="testimonial-two__inner-content">
                                <div class="testimonial-two__rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                                <p class="testimonial-two__text">
                                    I enrolled Eric in Nytt Robotics' weekend class, and it’s the best decision ever. He’s excited about learning and talks about sensors and motors every day!
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="Parent from Trivandrum">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a href="{{ url('testimonials') }}">Sumi P</a></h4>
                                        <p class="testimonial-two__client-sub-title">Mother of Eric Aaron, Christ Nagar, Trivandrum</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-two__item">
                            <div class="testimonial-two__inner-content">
                                <div class="testimonial-two__rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                                <p class="testimonial-two__text">
                                    My daughter Tirza now builds small robots at home! The classes are fun, practical, and help her understand technology in a meaningful way.
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="Testimonial Kerala school parent">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a href="{{ url('testimonials') }}">Teena Francis</a></h4>
                                        <p class="testimonial-two__client-sub-title">Mother of Tirza, Holy Angels, Trivandrum</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-two__item">
                            <div class="testimonial-two__inner-content">
                                <div class="testimonial-two__rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                                <p class="testimonial-two__text">
                                    Aami loves her robotics sessions. Nytt has turned her screen time into creative time. We are truly thankful for this opportunity in Coimbatore!
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="Father from Coimbatore">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a href="{{ url('testimonials') }}">Reshin Rahman</a></h4>
                                        <p class="testimonial-two__client-sub-title">Father of Aami, St Shantal</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-two__item">
                            <div class="testimonial-two__inner-content">
                                <div class="testimonial-two__rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                                <p class="testimonial-two__text">
                                    Rithik is now confident in coding and mechanical concepts at just 10 years old. As a father, it’s amazing to see such learning happening in Trivandrum!
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="Loyola parent robotics feedback">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a href="{{ url('testimonials') }}">Ravi Sankar</a></h4>
                                        <p class="testimonial-two__client-sub-title">Father of Rithik, Loyola, Trivandrum</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /.testimonial-two__carousel -->
                </div>

                <!-- Thumbnails (if used) -->
                <div class="testimonial-two__thumb-outer-box">
                    <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                        <div class="testimonial-two__thumb-item">
                            <div class="testimonial-two__img-holder-box">
                                <div class="testimonial-two__img-holder">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="Parent feedback Trivandrum Robotics">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two__thumb-item">
                            <div class="testimonial-two__img-holder-box">
                                <div class="testimonial-two__img-holder">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="Parent feedback Coimbatore Robotics">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two__thumb-item">
                            <div class="testimonial-two__img-holder-box">
                                <div class="testimonial-two__img-holder">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="Testimonial by local robotics learner parent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.testimonial-two__thumb-outer-box -->

            </div>
        </div>
    </div>
</section>
<!-- Testimonial Two End -->

    <!-- Sliding Text Three Start-->
    <section class="sliding-text-three sliding-text-four">
        <div class="sliding-text-three__wrap">
            <ul class="sliding-text-three__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Three End -->

    <!--Newsletter Two Start -->
    
    <!--Newsletter Two End -->

    <!--Contact Info One Start -->
    <section class="contact-info-one">
        <div class="container">
            <ul class="list-unstyled contact-info-one__list">
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-envelope"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Email Address:</p>
                            <h5 class="contact-info-one__email">
                                <a href="mailto:contact@myfirstpcb.com">contact@myfirstpcb.com</a>
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Phone Number</p>
                            <h5 class="contact-info-one__email">
                                <a href="#">+91 85908 70849</a>
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Our Address</p>
                            <h5 class="contact-info-one__email">Malmskillnadsgatan 42, 111 57, <br/> Stockholm, Sweden</h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Contact Info One End -->

<x-footer2/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection