@extends('layouts.layout4')
@section('title', 'Home | MyFirstPCB')
@section('meta_description', 'Discover MyfirstPCB – the easiest way to design, customize, and order high-quality printed circuit boards online. Get instant quotes, fast turnaround, and expert support for all your electronics projects.')
@section('meta_keywords', 'PCB, printed circuit board, PCB design, custom PCB, online PCB order, electronics projects, PCB manufacturing, MyfirstPCB')
@section('content')


<x-strickyHeader />


<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Banner Two Start -->
<section class="banner-two">
    <div class="banner-two__shape-bg"
        style="background-image: url({{ asset('assets/images/shapes/banner-two-shape-bg.png') }});"></div>
    <div class="banner-two__shape-box float-bob-y">
        <div class="banner-two__shape-1"></div>
    </div>
    <div class="banner-two__shape-2 img-bounce">
        <img src="{{ asset('assets/images/shapes/banner-two-shape-2.png') }}" alt="">
    </div>

    <div class="banner-two__shape-3">
        <img src="{{ asset('assets/images/shapes/banner-two-shape-3.png') }}" alt="">
    </div>
    <div class="banner-two__shape-4 shapemover">
        <img src="{{ asset('assets/images/shapes/banner-two-shape-4.png') }}" alt="">
    </div>
    <div class="banner-two__shape-5 float-bob-y">
        <img src="{{ asset('assets/images/shapes/banner-two-shape-5.png') }}" alt="">
    </div>
    <div class="banner-two__book-icon img-bounce">
        <img src="{{ asset('assets/images/icon/banner-two-book-icon.png') }}" alt="">
    </div>
    <div class="banner-two__shape-7 float-bob-y"></div>
    <div class="banner-two__shape-8 float-bob-x"></div>
    <div class="banner-two__book-icon img-bounce">
        <img src="{{ asset('assets/images/icon/banner-two-book-icon.png') }}" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="banner-two__left">
                    <p class="banner-two__sub-title"># Courses for Students (Age 10 to Age 21)</p>
                    <h2 class="banner-two__title">Robotics: <span>Future Skill</span><br> Every Child Needs</h2>
                    <p class="banner-two__text">Learn PCB — the core of robotics, AI, and space tech — and build real STEM skills for school and college.</p>
                    <div class="banner-two__btn-and-success-student-box">
                        <div class="banner-two__btn-box">
                            @guest
                            <a href="{{ route('login') }}" class="thm-btn-two">
                                <span>Get Started</span>
                                <i class="icon-angles-right"></i>
                            </a>
                            @else
                            <a href="{{ route('course') }}" class="thm-btn-two">
                                <span>Get Started</span>
                                <i class="icon-angles-right"></i>
                            </a>
                            @endguest
                        </div>
                        <div class="banner-two__success-student-box">

                        </div>


                        <div class="banner-two__success-student">
                            <ul class="list-unstyled banner-two__success-student-list">
                                <li>
                                    <div class="banner-two__success-student-img">
                                        <img src="{{ asset('assets/images/resources/banner-two-success-student-1-1.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__success-student-img">
                                        <img src="{{ asset('assets/images/resources/banner-two-success-student-1-2.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__success-student-img">
                                        <img src="{{ asset('assets/images/resources/banner-two-success-student-1-3.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="banner-two__success-student-content">
                                <div class="banner-two__success-student-count-box">
                                    <p class="odometer" data-count="2000">00</p>
                                    <span>+</span>
                                </div>
                                <p class="banner-two__success-student-text">Students Enrolled</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6">
                <div class="banner-two__right">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="banner-two__content-one">
                                <div class="banner-two__content-one-img">
                                    <img src="{{ asset('assets/images/resources/banner-two-content-one-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="banner-two__course-discount">
                                    <div class="banner-two__course-discount-img">
                                        <img src="{{ asset('assets/images/resources/banner-two-course-discount-img-1.jpg') }}"
                                            alt="">
                                        <p class="banner-two__course-discount-rate">-10% Off</p>
                                    </div>
                                    <div class="banner-two__course-discount-content">
                                        <h4 class="banner-two__course-discount-title mt-4"><a
                                                href="{{ route('course-details', optional($courses->first())->id ?? 1) }}">PCB design and fabrication <br />
                                                hands on course</a></h4>
                                        <!-- <p class="banner-two__course-discount-price">$150.00</p> -->
                                        
                                        <div class="banner-two__course-discount-arrow" style="marigin-top: 0.5rem;">
                                            <a href="{{ isset($courses) && $courses->count() ? route('course-details', $courses->first()->id) : route('course') }}"><span
                                                    class="icon-angles-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="banner-two__content-two">
                                <div class="banner-two__content-two-img">
                                    <img src="{{ asset('assets/images/resources/banner-two-content-two-img-1.jpg') }}"
                                        alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Two End -->

<!--About Two Start -->

<!--About Two End -->

<!--Courses Two Start -->
<section class="courses-two">
    <div class="container">
        <div class="section-title-two text-left sec-title-animation animation-style2">
            <div class="section-title-two__tagline-box">
                <div class="section-title-two__tagline-shape">
                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                </div>
                <span class="section-title-two__tagline">Learn Electronics Online — Free Kit Included</span>
            </div>
            <h2 class="section-title-two__title title-animation">Build Boards at Home with Live <br> Course
                <span>Training</span>
            </h2>
        </div>
        <div class="courses-two__inner">
            <ul class="courses-two__filter style1 post-filter list-unstyled clearfix" style="display:none;">
                <li data-filter=".filter-item" class="active">
                    <p><span class="icon-catagory"></span>All Categories</p>
                </li>
                <li data-filter=".design">
                    <p><span class="icon-pen-ruler"></span>Design</p>
                </li>
                <li data-filter=".programming">
                    <p><span class="icon-computer"></span>Programming</p>
                </li>
                <li data-filter=".marketing">
                    <p><span class="icon-bullhorn"></span>Marketing</p>
                </li>
            </ul>
            <div class="row filter-layout">
                <!--Courses Two Single Start-->
                @foreach($courses as $course)
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item design marketing">
                    <div class="courses-two__single">
                        <div class="courses-two__img-box">
                            <div class="courses-two__img">
                                <!-- /storage/courses/course-2-1.jpg -->
                                <img src="{{ Storage::url($course->course_poster) }}" alt="">
                                <!-- <img src="{{ Storage::url('courses/courses-2-1.jpg') }}" alt=""> -->
                                <!-- /storage/courses/courses-2-1.jpg -->

                            </div>
                            
                        </div>
                        <div class="courses-two__content">
                            <div class="courses-two__doller-and-review">
                                <!-- <div class="courses-two__doller">
                                    <p>$240.00</p>
                                </div> -->
                                <!-- <div class="courses-two__review">
                                    <p><i class="icon-star"></i> {{ $course->rating_value }}</p>
                                </div> -->
                            </div>
                            <h3 class="courses-two__title">
                                <a href="{{ route('course-details', $course->id) }}">{{ $course->title }}</a>
                            </h3>
                            <div class="courses-two__btn-and-client-box">
                                <div class="courses-two__btn-box">
                                    <a class="thm-btn-two" onclick="enrollInCourse({{ $course }})">
                                        <span>Enroll Now</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                
                            </div>
                            <ul class="courses-two__meta list-unstyled d-flex justify-content-between">
                                <li>
                                    <div class="icon">
                                        <span class="icon-chart-simple"></span>
                                    </div>
                                    <p>{{ $course->skill_level }}</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Courses Two Single End -->

</section>

<section class="about-two">
    <div class="about-two__bg-shape"
        style="background-image: url({{ asset('assets/images/shapes/about-two-bg-shape.png') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="{{ asset('assets/images/resources/about-two-img-1.png') }}"
                                alt="Robotics Course Trivandrum - Nytt Robotics">
                        </div>
                        <div class="about-two__shape-1">
                            <img src="{{ asset('assets/images/shapes/about-two-shape-1.png') }}"
                                alt="Robotics Learning Shape - Trivandrum">
                        </div>
                        <div class="about-two__shape-2">
                            <img src="{{ asset('assets/images/shapes/about-two-shape-2.png') }}"
                                alt="Robotics Education Background - Coimbatore">
                        </div>
                        <div class="about-two__shape-3 rotate-me">
                            <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}"
                                alt="Interactive Robotics Course Graphic">
                        </div>
                        <!-- <div class="about-two__client-box">
                            <p class="about-two__client-text">“Robotics from Nytt is fun, creative, and perfectly designed for students of all ages!”</p>
                            <div class="about-two__client-info">
                                <div class="about-two__client-img">
                                    <img src="{{ asset('assets/images/resources/about-two-client-img-1.png') }}" alt="Student review on Robotics Course in Coimbatore">
                                </div>
                                <div class="about-two__client-content">
                                    <h3>Teena Francis</h3>
                                    <p>Parent</p>
                                </div>
                                <div class="about-two__client-quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="about-two__class-day">
                            <div class="about-two__class-day-icon">
                                <img src="{{ asset('assets/images/icon/about-two-class-day-icon.png') }}" alt="Class Timing Icon - Robotics Academy">
                            </div>
                            <h3 class="about-two__class-title">Our Class Day</h3>
                            <ul class="about-two__class-list list-unstyled">
                                <li><p>Saturday</p><span>10:00 - 16:00</span></li>
                                <li><p>Sunday</p><span>10:00 - 16:00</span></li>
                                <li><p>Monday</p><span>10:00 - 16:00</span></li>
                                <li><p>Tuesday</p><span>10:00 - 16:00</span></li>
                                <li><p>Wednesday</p><span>10:00 - 16:00</span></li>
                            </ul>
                            <div class="about-two__class-btn-box">
                                <a href="{{ url('course-details') }}" class="thm-btn">
                                    <span class="icon-circle-left"></span>Book Free Class
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="about-two__right">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-shape">
                                <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}"
                                    alt="Shape - Robotics Education Section">
                            </div>
                            <span class="section-title-two__tagline">How This Course Works for You</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">
                            Behind the Scenes: Discover the People & Passion <span>Behind</span>
                        </h2>
                    </div>
                    <p class="about-two__text">
                        At <strong>Nytt Robotics</strong>, we turn curiosity into creation. Led by
                        <strong>Sture Wikman, CEO of Nytt AB, Sweden</strong>, , our programs bring robotics and electronics into everyday learning for students aged 10 to 22.
Each course is designed to match school and college curricula while helping every learner build real skills in circuit design, PCB fabrication, and assembly.
                    </p>
                    <ul class="about-two__points-list list-unstyled">
                        <li>
                            <div class="about-two__icon">
                                <img src="{{ asset('assets/images/icon/about-two-points-icon-1.png') }}"
                                    alt="Course Creation Tools - Robotics Class">
                            </div>
                            <div class="about-two__content">
                                <h3>Design a Circuit:</h3>
                                <p>Students learn to create professional schematics from scratch using industry-standard software.</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-two__icon">
                                <img src="{{ asset('assets/images/icon/about-two-points-icon-2.png') }}"
                                    alt="Learning Analytics - Robotics Course Coimbatore">
                            </div>
                            <div class="about-two__content">
                                <h3>Fabricate a PCB:</h3>
                                <p>They master the end-to-end process of turning a digital design into a real printed circuit board.</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-two__icon">
                                <img src="{{ asset('assets/images/icon/about-two-points-icon-3.png') }}"
                                    alt="Collaborative Robotics Learning Trivandrum">
                            </div>
                            <div class="about-two__content">
                                <h3>Assemble and Test:</h3>
                                <p>Learners gain hands-on experience in soldering, debugging, and testing — bringing their own creation to life.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <p class="about-two__text">Contact us to join our Robotics Courses in Coimbatore and Trivandrum.</p>
                    <div class="about-two__client-and-btn-box mt-3">
                        <div class="about-two__client-info-2">
                            <div class="about-two__client-two-img">
                                <img src="{{ asset('assets/images/resources/whatsapp.png') }}"
                                    alt="Contact Robotics Course Coimbatore and Trivandrum">
                            </div>
                            <!-- <div class="about-two__client-two-content">
                                <p>Have a Question?</p>
                                <h4><a href="mailto:info@domain.com">contact@nyttrobotics.com</a></h4>
                            </div> -->
                        </div>

                        <div class="about-two__btn-box">
                            <!-- {{ url('about') }} -->
                            <a class="thm-btn-two" id="contactWhatsapp" href="https://wa.me/918590870849?text=Hi%20MyFirstPCB" target="_blank" rel="noopener">
                                <span>Enquire on WhatsApp</span>
                                <i class="icon-angles-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Courses Two End -->


<!--Why Choose Two Start -->
<section class="why-choose-two">
    <div class="why-choose-two__shape-5 shapemover">
        <img src="{{ asset('assets/images/shapes/why-choose-two-shape-5.png') }}"
            alt="Robotics Courses Coimbatore Graphic">
    </div>
    <div class="why-choose-two__shape-6"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-two__left">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-shape">
                                <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}"
                                    alt="Why Choose Nytt Robotics">
                            </div>
                            <span class="section-title-two__tagline">Why Choose Nytt Robotics</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">
                            Discover why our students   <br> trust <span>Nytt Robotics</span>
                        </h2>
                    </div>

                    <div class="why-choose-two__left-content-box">
                        <div class="why-choose-two__shape-1"></div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="why-choose-two__left-content">
                                    <!-- Feature 1 -->
                                    <div class="why-choose-two__single wow fadeInUp" data-wow-delay="100ms">
                                        <div class="why-choose-two__icon">
                                            <img src="{{ asset('assets/images/icon/why-choose-two-icon-1.png') }}"
                                                alt="Robotics Course Creation Trivandrum">
                                        </div>
                                        <h3 class="why-choose-two__title">
                                            <a href="{{ url('about') }}">Hands-On Course Creation</a>
                                        </h3>
                                        <ul class="list-unstyled why-choose-two__points">
                                            <li>
                                                <div class="why-choose-two__points-icon">
                                                    <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                </div>
                                                <p>Easy to join and accessible for all learners</p>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__points-icon">
                                                    <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                </div>
                                                <p>Smooth, guided learning for real understanding</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Feature 2 -->
                                    <div class="why-choose-two__single wow fadeInUp" data-wow-delay="200ms">
                                        <div class="why-choose-two__icon">
                                            <img src="{{ asset('assets/images/icon/why-choose-two-icon-2.png') }}"
                                                alt="Collaborative Robotics Course Coimbatore">
                                        </div>
                                        <h3 class="why-choose-two__title">
                                            <a href="{{ url('about') }}">Collaborative Learning</a>
                                        </h3>
                                        <ul class="list-unstyled why-choose-two__points">
                                            <li>
                                                <div class="why-choose-two__points-icon">
                                                    <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                </div>
                                                <p>Interactive community with shared goals</p>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__points-icon">
                                                    <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                </div>
                                                <p>Team-based projects that inspire creativity</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <!-- <div class="why-choose-two__video-box">
                                    <!-- Feature 3 
                                    <div class="why-choose-two__single wow fadeInUp" data-wow-delay="300ms">
                                        <div class="why-choose-two__icon">
                                            <img src="{{ asset('assets/images/icon/why-choose-two-icon-3.png') }}" alt="Robotics Analytics Dashboard">
                                        </div>
                                        <h3 class="why-choose-two__title">
                                            <a href="{{ url('about') }}">Smart Growth</a>
                                        </h3>
                                        <ul class="list-unstyled why-choose-two__points">
                                            <li>
                                                <div class="why-choose-two__points-icon">
                                                    <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                </div>
                                                <p>Individual Attention </p>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__points-icon">
                                                    <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                </div>
                                                <p>Helps in Regular Curriculum</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Video Link 
                                    <div class="why-choose-two__video">
                                        <div class="why-choose-two__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="why-choose-two__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="why-choose-two__video-content">
                                            <h4>Join Our Live Class</h4>
                                            <p>Experience hands-on robotics training in Trivandrum and Coimbatore</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div> <!-- /.row -->
                    </div>
                </div>
            </div>

            <!-- Testimonials and Stats -->
            <div class="col-xl-6">
                <div class="why-choose-two__right">
                    <div class="why-choose-two__shape-box">
                        <div class="why-choose-two__shape-2">
                            <div class="why-choose-two__shape-3">
                                <div class="why-choose-two__shape-4 float-bob-y">
                                    <img src="{{ asset('assets/images/shapes/why-choose-two-shape-4.png') }}"
                                        alt="Nytt Robotics Graphic Element">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why-choose-two__dot-1">
                        <img src="{{ asset('assets/images/shapes/why-choose-two-dot-1.png') }}"
                            alt="Background Dot Shape - Robotics School">
                    </div>
                    <div class="why-choose-two__dot-2">
                        <img src="{{ asset('assets/images/shapes/why-choose-two-dot-2.png') }}"
                            alt="Robotics Coimbatore Background Dot">
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-two__right-content-one">
                                <div class="why-choose-two__right-content-one-user-details">
                                    <div class="why-choose-two__right-content-one-user-details-top">
                                        <div class="why-choose-two__right-content-one-user-details-top-shape-bg"
                                            style="background-image: url('{{ asset('assets/images/shapes/why-choose-two-right-content-one-user-details-top-shape-bg.png') }}');">
                                        </div>
                                        <div class="why-choose-two__right-content-one-user-details-top-img">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-right-content-one-user-details-top-img.png') }}"
                                                alt="Robotics Coach Trivandrum">
                                        </div>
                                    </div>
                                    <div class="why-choose-two__right-content-one-user-details-bottom">
                                        <div class="why-choose-two__right-content-one-user-details-img">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-right-content-one-user-details-img-1.jpg') }}"
                                                alt="Robotics Instructor Coimbatore">
                                        </div>
                                        <div class="why-choose-two__right-content-one-user-details-content">
                                            <h5>Academic Team</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="why-choose-two__student-trained">
                                    <ul class="list-unstyled why-choose-two__student-trained-list">
                                        <li>
                                            <div class="why-choose-two__student-trained-img"><img
                                                    src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-1.jpg') }}"
                                                    alt="Robotics Class Trivandrum"></div>
                                        </li>
                                        <li>
                                            <div class="why-choose-two__student-trained-img"><img
                                                    src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-2.jpg') }}"
                                                    alt="Robotics Student Coimbatore"></div>
                                        </li>
                                        <li>
                                            <div class="why-choose-two__student-trained-img"><img
                                                    src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-3.jpg') }}"
                                                    alt="Robotics Lab Session"></div>
                                        </li>
                                        <li>
                                            <div class="why-choose-two__student-trained-img"><img
                                                    src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-2.jpg') }}"
                                                    alt="Practical Robotics Training"></div>
                                        </li>
                                    </ul>
                                    <div class="why-choose-two__student-trained-count-box">
                                        <div class="why-choose-two__student-trained-count-box-inner count-box">
                                            <p class="count-text" data-stop="2000" data-speed="3000">000</p>
                                            <span>+</span>
                                        </div>
                                        <p class="why-choose-two__student-trained-text">Students Trained in Trivandrum &
                                            Coimbatore</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review box -->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-two__right-content-two">
                                <div class="why-choose-two__udemy-review">
                                    <div class="why-choose-two__udemy-review-img">
                                        <img src="{{ asset('assets/images/resources/why-choose-two-udemy-review-img.jpg') }}"
                                            alt="Student Review Robotics Trivandrum">
                                    </div>
                                    <div class="why-choose-two__udemy-review-logo">
                                        <img src="{{ asset('assets/images/resources/why-choose-two-udemy-review-logo.png') }}"
                                            alt="Nytt Robotics Online Review Logo">
                                    </div>
                                    <div class="why-choose-two__udemy-review-client-info">
                                        <p class="why-choose-two__udemy-review-client-name">Sumi P /</p>
                                        <div class="why-choose-two__udemy-review-star">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="why-choose-two__right-content-two-user-details">
                                    <div class="why-choose-two__right-content-two-user-details-top">
                                        <div class="why-choose-two__right-content-two-user-details-top-shape-bg"
                                            style="background-image: url('{{ asset('assets/images/shapes/why-choose-two-right-content-one-user-details-top-shape-bg.png') }}');">
                                        </div>
                                        <div class="why-choose-two__right-content-two-user-details-top-img">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-right-content-two-user-details-top-img.jpg') }}"
                                                alt="Expert Trainer Robotics Coimbatore">
                                        </div>
                                    </div>
                                    <div class="why-choose-two__right-content-two-user-details-bottom">
                                        <div class="why-choose-two__right-content-two-user-details-icon">
                                            <img src="{{ asset('assets/images/icon/why-choose-two-right-content-two-user-details-icon.png') }}"
                                                alt="Certified Robotics Educator">
                                        </div>
                                        <div class="why-choose-two__right-content-two-user-details-content">
                                            <h5>Management Team</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col -->
                    </div> <!-- row -->
                </div> <!-- why-choose-two__right -->
            </div>
        </div>
    </div>
</section>
<!--Why Choose Two End -->

<!-- Counter Two Start -->
<section class="counter-two">
    <div class="counter-two__wrap">
        <ul class="list-unstyled counter-two__list marquee_mode">
            <li>
                <div class="counter-two__single">
                    <div class="counter-two__img-box">
                        <div class="counter-two__img">
                            <img src="{{ asset('assets/images/resources/counter-2-4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="counter-two__content">
                        <div class="counter-two__count-box">
                            <p class="odometer" data-count="120">00</p>
                            <span>K+</span>
                        </div>
                        <p class="counter-two__text">Successfully <br> Student</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="counter-two__shpae-1">
                    <img src="{{ asset('assets/images/shapes/counter-two-shape-1.png') }}" alt="">
                </div>
            </li>
            <li>
                <div class="counter-two__single">
                    <div class="counter-two__img-box">
                        <div class="counter-two__img">
                            <img src="{{ asset('assets/images/resources/counter-2-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="counter-two__content">
                        <div class="counter-two__count-box">
                            <p class="odometer" data-count="560">00</p>
                            <span>K+</span>
                        </div>
                        <p class="counter-two__text">Courses <br> Completed</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="counter-two__shpae-1">
                    <img src="{{ asset('assets/images/shapes/counter-two-shape-1.png') }}" alt="">
                </div>
            </li>
            <li>
                <div class="counter-two__single">
                    <div class="counter-two__img-box">
                        <div class="counter-two__img">
                            <img src="{{ asset('assets/images/resources/counter-2-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="counter-two__content">
                        <div class="counter-two__count-box">
                            <p class="odometer" data-count="3">00</p>
                            <span>M+</span>
                        </div>
                        <p class="counter-two__text">Satisfied <br> Review</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="counter-two__shpae-1">
                    <img src="{{ asset('assets/images/shapes/counter-two-shape-1.png') }}" alt="">
                </div>
            </li>
            
        </ul>
    </div>
</section>
<!-- Counter Two End -->

<div style="height: 250px;"></div>


<!--Team Two Start -->
<section class="team-two">
    <style>
        .team-two__social-box .team-two__social-list { opacity: 1 !important; visibility: visible !important; transform: none !important; display: block !important; }
        .team-two__plus { display: none !important; }
    </style>
    <div class="team-two__shape-1 float-bob-y">
        <img src="{{ asset('assets/images/shapes/team-two-shape-1.png') }}" alt="">
    </div>
    <div class="team-two__shape-2 float-bob-x">
        <img src="{{ asset('assets/images/shapes/team-two-shape-2.png') }}" alt="">
    </div>
    <div class="container">
        <div class="section-title-two text-left sec-title-animation animation-style2">
            <div class="section-title-two__tagline-box">
                <div class="section-title-two__tagline-shape">
                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-2.png') }}" alt="">
                </div>
                <span class="section-title-two__tagline">Our Team</span>
            </div>
            <h2 class="section-title-two__title title-animation">Meet the Experts A Team <br>
                Team United by <span>Purpose</span>
            </h2>
        </div>
        <div class="team-two__carousel owl-theme owl-carousel">
            <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-1.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">CEO</p>
                        <h3 class="team-two__name">Sture <span>Wikman</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
            <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-2.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Operations</p>
                        <h3 class="team-two__name">Praveen<span> Natarajan</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
            <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-3.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Programming</p>
                        <h3 class="team-two__name">Praveen <span>Palaniswamy</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
            <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-4.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Marketing</p>
                        <h3 class="team-two__name">Jeannie <span>Lendeng</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__plus"><i><span class="icon-plus"></span></i></div>
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
             <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-5.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title"> IoT Project Lead</p>
                        <h3 class="team-two__name">Dr.<span> Sreekumar</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
             <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-6.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Systems Engineer</p>
                        <h3 class="team-two__name">Vignesh<span> S</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
             <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-7.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Embedded Developer</p>
                        <h3 class="team-two__name">Arun<span> Asok</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
             <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-8.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title"> Design Lead</p>
                        <h3 class="team-two__name">Mohaimin<span> Kader</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
             <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-9.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Graphic Designer</p>
                        <h3 class="team-two__name">Aravind<span> A S</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
             <!--Team Two Single Start-->
            <div class="item">
                <div class="team-two__single">
                    <div class="team-two__img-1">
                        <img src="{{ asset('assets/images/team/team-2-10.png') }}" alt="Team member" />
                    </div>
                    <div class="team-two__arrow">
                        <a href="{{ route('about') }}"><span class="icon-circle-left"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Robotics and Analytics</p>
                        <h3 class="team-two__name">Yash<span> Chhalotre</span></h3>
                    </div>
                    <div class="team-two__social-box">
                        <div class="team-two__social-list">
                            <a href="https://www.linkedin.com/company/myfirstpcb/" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->

        </div>
    </div>
    <div class="sliding-text-five">
        <ul class="sliding-text-five__list list-unstyled marquee_mode-2">
            <li>
                <h2 data-hover="Our Professional" class="sliding-text-five__title">Our Professional</h2>
            </li>

            <li>
                <h2 data-hover="Our Professional" class="sliding-text-five__title">Our Professional</h2>
            </li>

        </ul>
    </div>
</section>
<!--Team Two End -->



<!-- Testimonial Two Start -->
<section class="testimonial-two">
    <div class="testimonial-two__shape-6">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-6.png') }}"
            alt="Robotics testimonial section background">
    </div>
    <div class="testimonial-two__shape-1">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="Shape background">
        <div class="testimonial-two__shape-icon-1">
            <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-1.png') }}" alt="Quote icon"
                class="zoom-fade">
        </div>
        <div class="testimonial-two__shape-img-2">
            <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-2.jpg') }}"
                alt="Parent review from Kerala">
        </div>
        <div class="testimonial-two__shape-img-3 img-bounce">
            <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-3.jpg') }}"
                alt="Parent review from Tamil Nadu">
        </div>
    </div>
    <div class="testimonial-two__shape-2">
        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="Background shape">
        <div class="testimonial-two__shape-icon-2 float-bob-y">
            <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-2.png') }}" alt="Robotics star icon">
        </div>
        <div class="testimonial-two__shape-img-1 zoom-fade">
            <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-1.jpg') }}"
                alt="Nytt Robotics local testimonial image">
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
                                    I enrolled Eric in Nytt Robotics' weekend class, and it’s the best decision ever.
                                    He’s excited about learning and talks about sensors and motors every day!
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}"
                                            alt="Parent from Trivandrum">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a
                                                href="{{ url('testimonials') }}">Sumi P</a></h4>
                                        <p class="testimonial-two__client-sub-title">Mother of Eric Aaron, Christ Nagar,
                                            Trivandrum</p>
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
                                    My daughter Tirza now builds small robots at home! The classes are fun, practical,
                                    and help her understand technology in a meaningful way.
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}"
                                            alt="Testimonial Kerala school parent">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a
                                                href="{{ url('testimonials') }}">Teena Francis</a></h4>
                                        <p class="testimonial-two__client-sub-title">Mother of Tirza, Holy Angels,
                                            Trivandrum</p>
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
                                    Aami loves her robotics sessions. Nytt has turned her screen time into creative
                                    time. We are truly thankful for this opportunity in Coimbatore!
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}"
                                            alt="Father from Coimbatore">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a
                                                href="{{ url('testimonials') }}">Reshin Rahman</a></h4>
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
                                    Rithik is now confident in coding and mechanical concepts at just 10 years old. As a
                                    father, it’s amazing to see such learning happening in Trivandrum!
                                </p>
                                <div class="testimonial-two__client-info">
                                    <!-- <div class="testimonial-two__client-logo">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}"
                                            alt="Loyola parent robotics feedback">
                                    </div> -->
                                    <div class="testimonial-two__client-name-box">
                                        <h4 class="testimonial-two__client-name"><a
                                                href="{{ url('testimonials') }}">Ravi Sankar</a></h4>
                                        <p class="testimonial-two__client-sub-title">Father of Rithik, Loyola,
                                            Trivandrum</p>
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
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}"
                                        alt="Parent feedback Trivandrum Robotics">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two__thumb-item">
                            <div class="testimonial-two__img-holder-box">
                                <div class="testimonial-two__img-holder">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}"
                                        alt="Parent feedback Coimbatore Robotics">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two__thumb-item">
                            <div class="testimonial-two__img-holder-box">
                                <div class="testimonial-two__img-holder">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}"
                                        alt="Testimonial by local robotics learner parent">
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

<!-- Sliding Text Three Start -->
<section class="sliding-text-three sliding-text-four">
    <div class="sliding-text-three__wrap">
        <ul class="sliding-text-three__list list-unstyled marquee_mode">

            <li>
                <h2 data-hover="Easy to Learn" class="sliding-text-three__title count-box">
                    Simple & Fun – Eric Aaron, Christ Nagar
                    <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}"
                        alt="Robotics learning Christ Nagar Trivandrum">
                </h2>
            </li>

            <li>
                <h2 data-hover="Boosts Creativity" class="sliding-text-three__title count-box">
                    Loved the Physics! – Tirza, Holy Angels
                    <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}"
                        alt="Physics concepts via Robotics Holy Angels Trivandrum">
                </h2>
            </li>

            <li>
                <h2 data-hover="Science Made Easy" class="sliding-text-three__title count-box">
                    Smart & Easy – Aami, St Shantal
                    <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}"
                        alt="Student review robotics Coimbatore">
                </h2>
            </li>

            <li>
                <h2 data-hover="Fun With Circuits" class="sliding-text-three__title count-box">
                    Helped My Science! – Rithik, Loyola
                    <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}"
                        alt="Loyola Trivandrum robotics academic support">
                </h2>
            </li>

            <li>
                <h2 data-hover="Creative Thinking" class="sliding-text-three__title count-box">
                    Cool & Creative – Ryan, Sarvodaya
                    <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}"
                        alt="Creative robotics student Holy Angels Trivandrum">
                </h2>
            </li>

        </ul>
    </div>
</section>
<!-- Sliding Text Three End -->


<!-- Blog Two Start -->
 <section class="blog-two">
    <div class="container">
        <div class="section-title-two text-center sec-title-animation animation-style1">
            <div class="section-title-two__tagline-box">
                <div class="section-title-two__tagline-shape">
                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                </div>
                <span class="section-title-two__tagline">Our Insight</span>
            </div>
            <h2 class="section-title-two__title title-animation">
                Your Source for Ideas, <br>Insights, and <span>Inspiration</span>
            </h2>
        </div>
        <div class="row">
            <!-- Blog Two Single Start -->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/robotics-kids-trivandrum.jpg') }}" alt="">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 02, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <div class="blog-two__meta-box">
                            <ul class="blog-two__meta list-unstyled d-flex justify-content-between">
                                <li>
                                    <a href="{{ route('blog-details-1') }}"><span class="icon-tags"></span>Business</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details-1') }}"><span class="icon-clock"></span>10 Min Read</a>
                                </li>
                                <!-- <li>
                                    <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                </li> -->
                            </ul>
                        </div>
                        <h4 class="blog-two__title">
                            <a href="{{ route('blog-details-1') }}">Why Every Maker Should Have a PCB Toolkit Ready</a>
                        </h4>
                        <p class="blog-two__text">If you’re into electronics, tinkering, or DIY projects, there’s one thing you’ll quickly learn: having the right tools at your side makes all the difference.</p>
                    </div>
                </div>
            </div>
            <!-- Blog Two Single End -->
            <!-- Blog Two Single Start -->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/industry-connect.jpg') }}" alt="">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 03, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <div class="blog-two__meta-box">
                            <ul class="blog-two__meta list-unstyled d-flex justify-content-between">
                                <li>
                                    <a href="{{ route('blog-details-2') }}"><span class="icon-tags"></span>Business</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details-2') }}"><span class="icon-clock"></span>10 Min Read</a>
                                </li>
                                <!-- <li>
                                    <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                </li> -->
                            </ul>
                        </div>
                        <h4 class="blog-two__title">
                            <a href="{{ route('blog-details-2') }}">5 Simple Projects You Can Do With Our Junior PCB
                                Toolkit</a>
                        </h4>
                        <p class="blog-two__text">Getting started with electronics can feel intimidating, but the truth is, you don’t need to dive into complex circuits on day one.</p>
                    </div>
                </div>
            </div>
            <!-- Blog Two Single End -->
            <!-- Blog Two Single Start -->
            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/starter- pack for-learning- pcb.jpg') }}" alt="">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 04, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <div class="blog-two__meta-box">
                            <ul class="blog-two__meta list-unstyled d-flex justify-content-between">
                                <li>
                                    <a href="{{ route('blog-details-4') }}"><span class="icon-tags"></span>Business</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details-4') }}"><span class="icon-clock"></span>10 Min Read</a>
                                </li>
                                <!-- <li>
                                    <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                </li> -->
                            </ul>
                        </div>
                        <h4 class="blog-two__title">
                            <a href="{{ route('blog-details-4') }}">The Ultimate Starter Pack for Learning PCB Design (Without Getting Overwhelmed)</a>
                        </h4>
                        <p class="blog-two__text">If you’ve ever thought about making your own circuits or designing your own PCBs, you probably know the feeling: too many tools, too many tutorials, and too many decisions.</p>
                    </div>
                </div>
            </div>
            <!-- Blog Two Single End -->
        </div>
    </div>
</section
 <!-- Blog Two End -->


<!--Contact Info One Start -->
<!-- <section class="contact-info-one mt-5">
    <div class="container">
        <style>
            .footer-contact-grid{display:grid;gap:16px}
            .footer-contact-grid .row-1{display:grid;grid-template-columns:repeat(1,1fr);gap:16px}
            .footer-contact-grid .row-2{display:grid;grid-template-columns:repeat(1,1fr);gap:16px}
            .footer-contact-grid .contact-card{display:flex;align-items:flex-start;gap:12px;background:#0b0b0b40;border-radius:8px;padding:16px;color:#fff}
            .footer-contact-grid .contact-card .contact-title{font-size:14px;line-height:1.2;margin:0;opacity:.95;color:#fff}
            .footer-contact-grid .contact-card .contact-text{font-size:16px;line-height:1.5;margin:2px 0 0;color:#fff}
            .footer-contact-grid .contact-card .contact-text a{font-size:16px;color:#fff}
            .footer-contact-grid .contact-card .contact-text a:hover{text-decoration:underline}
            .footer-contact-grid .contact-info-one__icon span{color:#fff}
            @media(min-width:576px){.footer-contact-grid .row-1{grid-template-columns:repeat(2,1fr)}.footer-contact-grid .row-2{grid-template-columns:repeat(2,1fr)}}
            @media(min-width:992px){.footer-contact-grid .row-1{grid-template-columns:repeat(3,1fr)}.footer-contact-grid .row-2{grid-template-columns:repeat(2,1fr)}}
        </style>
        <div class="footer-contact-grid">
            <div class="row-1">
                <div class="contact-card">
                    <div class="contact-info-one__icon"><span class="icon-location"></span></div>
                    <div class="contact-info-one__content">
                        <p class="contact-title">Trivandrum Address</p>
                        <h5 class="contact-text">Nytt Analytics Pvt Ltd<br/>CCCIET, Nalanchira, Trivandrum 695015</h5>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-info-one__icon"><span class="icon-location"></span></div>
                    <div class="contact-info-one__content">
                        <p class="contact-title">Coimbatore Address</p>
                        <h5 class="contact-text">Nytt Analytics Pvt Ltd<br/>Plot No 3, Sounderan Mills, Sulur, Coimbatore, India</h5>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-info-one__icon"><span class="icon-location"></span></div>
                    <div class="contact-info-one__content">
                        <p class="contact-title">Corporate Address</p>
                        <h5 class="contact-text">Malmskillnadsgatan 42, 111 57,<br/>Stockholm, Sweden</h5>
                    </div>
                </div>
            </div>
            <div class="row-2">
                <div class="contact-card">
                    <div class="contact-info-one__icon"><span class="icon-envelope"></span></div>
                    <div class="contact-info-one__content">
                        <p class="contact-title">Email Address</p>
                        <h5 class="contact-text"><a href="mailto:contact@myfirstpcb.com">contact@myfirstpcb.com</a></h5>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-info-one__icon"><span class="icon-phone"></span></div>
                    <div class="contact-info-one__content">
                        <p class="contact-title">Phone Number</p>
                        <h5 class="contact-text"><a href="tel:+918590870849">+91 85908 70849</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Contact Info One End -->


    <script>

        const contactWhatsapp = document.getElementById('contactWhatsapp');

        if (contactWhatsapp) {
        contactWhatsapp.addEventListener('click', function (e) {
            // prevent default anchor navigation so we control the URL
            e.preventDefault();

            const whatsAppNumber = '918590870849';
            const message = 'Hello, I would like to inquire about your courses.';
            const whatsappURL = `https://wa.me/${whatsAppNumber}?text=${encodeURIComponent(message)}`;

            window.open(whatsappURL, '_blank');
        });
    }

        function enrollInCourse(course) {
            const courseName = course.title;
            const course_id = course.id;
            const user_id = "{{ Auth::user()->id ?? '' }}";
            const whatsappNumber = '8590870849';
            const name = "{{ Auth::user()->name ?? '' }}";
            const email = "{{ Auth::user()->email ?? '' }}";

            if (!user_id) {
                window.location.href = '{{ route('login') }}';
                return;
            }

            const formData = {
                course_id: course_id,
                user_id: user_id,
                name: name,
                email: email,
            }

            fetch('{{ route("enrollment.initiate") }}', {
                method: 'POST',
                body: JSON.stringify(formData),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    toastr.success("Your enrollment inquiry has been recorded! Opening WhatsApp...", {
                        timeOut: 3000,
                    });

                    setTimeout(() => {
                        window.open(data.whatsapp_url, '_blank');
                    }, 3000);
                } else {
                    toastr.error(data.message || 'Failed to initiate enrollment. Please try again.', 'Error!');
                }
            })
            .catch(error => {
                console.error('Error initiating enrollment:', error);
            });
        }
    </script>

<x-contact-grid />
<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection