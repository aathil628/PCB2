@extends('layouts.layout5')
@section('title', 'Home Two || MyFirstPCB')
@section('content')
<x-strickyHeader/>

    <!-- Banner Two Start -->
    <section class="banner-two" id="home">
        <div class="banner-two__shape-bg" style="background-image: url({{ asset('assets/images/shapes/banner-two-shape-bg.png') }});"></div>
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
        <div class="banner-two__shape-6 rotate-me">
            <img src="{{ asset('assets/images/shapes/banner-two-shape-6.png') }}" alt="">
        </div>
        <div class="banner-two__shape-7 float-bob-y"></div>
        <div class="banner-two__shape-8 float-bob-x"></div>
        <div class="banner-two__edu-icon shapemover">
            <img src="{{ asset('assets/images/icon/banner-two-edu-icon.png') }}" alt="">
        </div>
        <div class="banner-two__book-icon img-bounce">
            <img src="{{ asset('assets/images/icon/banner-two-book-icon.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="banner-two__left">
                        <p class="banner-two__sub-title"># Best Online Platform</p>
                        <h2 class="banner-two__title">Start Learning <span>Today</span> <br> <span>Discover</span>
                            Your Next <br> Great Skill</h2>
                        <p class="banner-two__text">Enhance your educational journey with our cutting-edge <br>
                            course platform.</p>
                        <div class="banner-two__btn-and-success-student-box">
                            <div class="banner-two__btn-box">
                                <a href="{{ url('contact') }}" class="thm-btn-two">
                                    <span>Get Started</span>
                                    <i class="icon-angles-right"></i>
                                </a>
                            </div>
                            <div class="banner-two__success-student">
                                <ul class="list-unstyled banner-two__success-student-list">
                                    <li>
                                        <div class="banner-two__success-student-img">
                                            <img src="{{ asset('assets/images/resources/banner-two-success-student-1-1.jpg') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-two__success-student-img">
                                            <img src="{{ asset('assets/images/resources/banner-two-success-student-1-2.jpg') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-two__success-student-img">
                                            <img src="{{ asset('assets/images/resources/banner-two-success-student-1-3.jpg') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <div class="banner-two__success-student-content">
                                    <div class="banner-two__success-student-count-box">
                                        <p class="odometer" data-count="2000">00</p>
                                        <span>+</span>
                                    </div>
                                    <p class="banner-two__success-student-text">Success Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-two__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="banner-two__video-icon-box">
                                    <div class="banner-two__video-icon-inner">
                                        <div class="banner-two__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="banner-two__right">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="banner-two__content-one">
                                    <div class="banner-two__content-one-img">
                                        <img src="{{ asset('assets/images/resources/banner-two-content-one-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="banner-two__course-discount">
                                        <div class="banner-two__course-discount-img">
                                            <img src="{{ asset('assets/images/resources/banner-two-course-discount-img-1.jpg') }}" alt="">
                                            <p class="banner-two__course-discount-rate">-10% Off</p>
                                        </div>
                                        <div class="banner-two__course-discount-content">
                                            <h4 class="banner-two__course-discount-title"><a href="{{ url('course-details') }}">UI/UX Design
                                                    Enhancing <br> User Experience Effectively</a></h4>
                                            <p class="banner-two__course-discount-price">$150.00</p>
                                            <div class="banner-two__course-discount-rating">
                                                <p class="banner-two__course-discount-rating-text">5.50/
                                                    <span>14</span> </p>
                                                <div class="banner-two__course-discount-star">
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                </div>
                                            </div>
                                            <div class="banner-two__course-discount-arrow">
                                                <a href="{{ url('course-details') }}"><span
                                                        class="icon-angles-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="banner-two__content-two">
                                    <div class="banner-two__content-two-img">
                                        <img src="{{ asset('assets/images/resources/banner-two-content-two-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="banner-two__experience-box">
                                        <div class="banner-two__experience-box-inner">
                                            <div class="banner-two__experience-icon">
                                                <img src="{{ asset('assets/images/icon/banner-two-experience-icon.png') }}" alt="">
                                            </div>
                                            <div class="banner-two__experience-count-box">
                                                <div class="banner-two__experience-count">
                                                    <h3 class="odometer" data-count="25">00</h3>
                                                    <span>+</span>
                                                    <p>Years</p>
                                                </div>
                                                <p>of experience</p>
                                            </div>
                                        </div>
                                        <div class="banner-two__experience-box-shape"></div>
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

    <!--Category Two Start -->
    <section class="category-two">
        <div class="container">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Category</span>
                </div>
                <h2 class="section-title-two__title title-animation">
                    Explore Our World's Class <br>Best Courses <span>Categories</span>
                </h2>
            </div>
            <div class="row">
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-1.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title">
                                <a href="{{ url('course-details') }}">Tech &<br> Programming</a>
                            </h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">
                                    View More<span class="icon-circle-left"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->

                <!-- Repeat similar blocks for other categories -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-2.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title">
                                <a href="{{ url('course-details') }}">Creative Art <br> & Design</a>
                            </h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">
                                    View More<span class="icon-circle-left"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="500ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-3.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title"><a href="{{ url('course-details') }}">Business &
                                    <br> Finance</a></h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">View More<span
                                        class="icon-circle-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="700ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-4.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title"><a href="{{ url('course-details') }}">Health, Fitness &
                                    <br>Wellness</a></h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">View More<span
                                        class="icon-circle-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="900ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-5.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title"><a href="{{ url('course-details') }}">Writing &
                                    <br>Communication</a></h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">View More<span
                                        class="icon-circle-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="1100ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-6.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title"><a href="{{ url('course-details') }}">User Research &
                                    <br>Analytics</a></h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">View More<span
                                        class="icon-circle-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="1300ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-7.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title"><a href="{{ url('course-details') }}">Digital Marketing
                                    <br> & Camping</a></h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">View More<span
                                        class="icon-circle-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->
                <!--Category Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="1400ms">
                    <div class="category-two__single">
                        <div class="category-two__icon">
                            <img src="{{ asset('assets/images/icon/categoyr-two-icon-8.png') }}" alt="">
                        </div>
                        <div class="category-two__single-inner">
                            <p class="category-two__sub-title">14 Courses</p>
                            <h3 class="category-two__title"><a href="{{ url('course-details') }}">Lifestyle &
                                    <br>Productivity</a></h3>
                            <div class="category-two__btn-box">
                                <a href="{{ url('course-details') }}" class="category-two__btn thm-btn">View More<span
                                        class="icon-circle-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Category Two Single End-->
            </div>
        </div>
    </section>
    <!--Category Two End -->

    <!--About Two Start -->
    <section class="about-two" id="about">
        <div class="about-two__bg-shape" style="background-image: url({{ asset('assets/images/shapes/about-two-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-two__img-box">
                            <div class="about-two__img">
                                <img src="{{ asset('assets/images/resources/about-two-img-1.png') }}" alt="">
                            </div>
                            <div class="about-two__shape-1">
                                <img src="{{ asset('assets/images/shapes/about-two-shape-1.png') }}" alt="">
                            </div>
                            <div class="about-two__shape-2">
                                <img src="{{ asset('assets/images/shapes/about-two-shape-2.png') }}" alt="">
                            </div>
                            <div class="about-two__shape-3 rotate-me">
                                <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}" alt="">
                            </div>
                            <div class="about-two__client-box">
                                <p class="about-two__client-text">“It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.”</p>
                                <div class="about-two__client-info">
                                    <div class="about-two__client-img">
                                        <img src="{{ asset('assets/images/resources/about-two-client-img-1.png') }}" alt="">
                                    </div>
                                    <div class="about-two__client-content">
                                        <h3>Alisa Oliva</h3>
                                        <p>Web Designer</p>
                                    </div>
                                    <div class="about-two__client-quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="about-two__class-day">
                                <div class="about-two__class-day-icon">
                                    <img src="{{ asset('assets/images/icon/about-two-class-day-icon.png') }}" alt="">
                                </div>
                                <h3 class="about-two__class-title">Our Class Day</h3>
                                <ul class="about-two__class-list list-unstyled">
                                    <li>
                                        <p>Saturday</p>
                                        <span>10:00 - 16:00</span>
                                    </li>
                                    <li>
                                        <p>Sunday</p>
                                        <span>10:00 - 16:00</span>
                                    </li>
                                    <li>
                                        <p>Monday</p>
                                        <span>10:00 - 16:00</span>
                                    </li>
                                    <li>
                                        <p>Tuesday</p>
                                        <span>10:00 - 16:00</span>
                                    </li>
                                    <li>
                                        <p>Wednesday</p>
                                        <span>10:00 - 16:00</span>
                                    </li>
                                </ul>
                                <div class="about-two__class-btn-box">
                                    <a href={{ url('course-details') }} class="thm-btn"><span class="icon-circle-left"></span>Book Free Class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-two__right">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">About Us</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">Behind the Scenes: Discover the People & Passion <span>Behind</span></h2>
                        </div>
                        <p class="about-two__text">Meet the talented individuals who bring our vision to life every day. With a shared passion and commitment, our team works tirelessly to deliver exceptional quality and innovation. Discover the stories, skills, and dedication that make us who we are.</p>
                        <ul class="about-two__points-list list-unstyled">
                            <li>
                                <div class="about-two__icon">
                                    <img src="{{ asset('assets/images/icon/about-two-points-icon-1.png') }}" alt="">
                                </div>
                                <div class="about-two__content">
                                    <h3>It provides tools for course creation</h3>
                                    <p>Enrollment management, and tracking learner progress, ensuring a streamlined learning experience.</p>
                                </div>
                            </li>
                            <li>
                                <div class="about-two__icon">
                                    <img src="{{ asset('assets/images/icon/about-two-points-icon-2.png') }}" alt="">
                                </div>
                                <div class="about-two__content">
                                    <h3>An effective LMS offers robust analytics</h3>
                                    <p>Reporting features that enable businesses to track <br>learner performance, completion rates, and<br> engagement levels.</p>
                                </div>
                            </li>
                            <li>
                                <div class="about-two__icon">
                                    <img src="{{ asset('assets/images/icon/about-two-points-icon-3.png') }}" alt="">
                                </div>
                                <div class="about-two__content">
                                    <h3>Many LMS platforms include collaborative </h3>
                                    <p>Collaborative features such as discussion forums, <br>messaging, and group projects, which facilitate<br> interaction and communication among learners.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-two__client-and-btn-box">
                            <div class="about-two__client-info-2">
                                <div class="about-two__client-two-img">
                                    <img src="{{ asset('assets/images/resources/about-two-client-two-img-1.png') }}" alt="">
                                </div>
                                <div class="about-two__client-two-content">
                                    <p>Have a Questions</p>
                                    <h4><a href="mailto:info@domain.com">info@domain.com</a></h4>
                                </div>
                            </div>
                            <div class="about-two__btn-box">
                                <a href={{ url('about') }} class="thm-btn-two">
                                    <span>Know More</span>
                                    <i class="icon-angles-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End -->

    <!--Courses Two Start -->
    <section class="courses-two" id="course">
        <div class="container">
            <div class="section-title-two text-left sec-title-animation animation-style2">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Our Courses</span>
                </div>
                <h2 class="section-title-two__title title-animation">Explore Our Comprehensive<br> Course
                    <span>Offerings</span>
                </h2>
            </div>
            <div class="courses-two__inner">
                <ul class="courses-two__filter style1 post-filter list-unstyled clearfix">
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
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item design marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-1.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$240.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Getting Started with Computers and Beginner's Guide to Basic Skills</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Sarah Alison</h4>
                                            <p><span class="odometer" data-count="12">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Beginner</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lessons</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>620h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Courses Two Single End-->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item design programming">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-2.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$120.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Cooking Made Easy: Essential Skills for Everyday Meals</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Mitchel March</h4>
                                            <p><span class="odometer" data-count="20">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Advance</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>120 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>12h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item programming marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-3.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$640.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Graphic Design Basics: Learn the Foundations of Visual</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-3.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Mr. Harry</h4>
                                            <p><span class="odometer" data-count="5">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Entry Level</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>620h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-4.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$350.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Photography for Everyone: How to Capture Stunning Photos with Ease</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-4.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Alisa Olivia</h4>
                                            <p><span class="odometer" data-count="8">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Advance</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>80 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>156h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-5.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$150.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Writing Made Simple: From Ideas to Finished Pieces for All Levels</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-5.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Jordan Walk</h4>
                                            <p><span class="odometer" data-count="16">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Medium</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>326h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item design marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-6.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$290.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">A Beginner’s Guide to Building Your Online Presence</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-6.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Aman Ellison</h4>
                                            <p><span class="odometer" data-count="12">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Beginner</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>620h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                </div>
            </div>
        </div>
    </section>
    <!--Courses Two End -->

    <!--Why Choose Two Start -->
    <section class="why-choose-two">
        <div class="why-choose-two__shape-5 shapemover">
            <img src="{{ asset('assets/images/shapes/why-choose-two-shape-5.png') }}" alt="">
        </div>
        <div class="why-choose-two__shape-6"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two__left">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">Why Choose Us</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">Discover Why Our Student <br> and
                                Clients
                                <span>Choose Us</span>
                            </h2>
                        </div>
                        <div class="why-choose-two__left-content-box">
                            <div class="why-choose-two__shape-1"></div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-two__left-content">
                                        <!--Why Choose Two Single Start -->
                                        <div class="why-choose-two__single wow fadeInUp" data-wow-delay="100ms">
                                            <div class="why-choose-two__icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-icon-1.png') }}" alt="">
                                            </div>
                                            <h3 class="why-choose-two__title"><a href="{{ url('about') }}">It provides tools
                                                    for <br>
                                                    course creation,</a></h3>
                                            <ul class="list-unstyled why-choose-two__points">
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Enrollment management,
                                                        and <br> tracking learner progress,</p>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text"> ensuring a streamlined
                                                        learning <br> experience.</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Why Choose Two Single End -->
                                        <!--Why Choose Two Single Start -->
                                        <div class="why-choose-two__single wow fadeInUp" data-wow-delay="200ms">
                                            <div class="why-choose-two__icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-icon-2.png') }}" alt="">
                                            </div>
                                            <h3 class="why-choose-two__title"><a href="{{ url('about') }}">Many LMS
                                                    platforms <br>
                                                    include collaborative</a></h3>
                                            <ul class="list-unstyled why-choose-two__points">
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Features such as
                                                        discussion <br> forums, messaging,</p>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Which facilitate
                                                        interaction and <br> communication among learners <br> and
                                                        instructors.</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Why Choose Two Single End -->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-two__video-box">
                                        <!--Why Choose Two Single Start -->
                                        <div class="why-choose-two__single wow fadeInUp" data-wow-delay="300ms">
                                            <div class="why-choose-two__icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-icon-3.png') }}" alt="">
                                            </div>
                                            <h3 class="why-choose-two__title"><a href="{{ url('about') }}">An effective LMS
                                                    offers
                                                    <br> robust analytics </a></h3>
                                            <ul class="list-unstyled why-choose-two__points">
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Reporting features that
                                                        enable <br> businesses to track learner</p>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text"> This data helps
                                                        organizations <br> assess the effectiveness of their <br>
                                                        training programs </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Why Choose Two Single End -->
                                        <div class="why-choose-two__video">
                                            <div class="why-choose-two__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="why-choose-two__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="why-choose-two__video-content">
                                                <h4>Join Our Live Class</h4>
                                                <p>It has survived not only five centuries, but also the</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two__right">
                        <div class="why-choose-two__shape-box">
                            <div class="why-choose-two__shape-2">
                                <div class="why-choose-two__shape-3">
                                    <div class="why-choose-two__shape-4 float-bob-y">
                                        <img src="{{ asset('assets/images/shapes/why-choose-two-shape-4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-two__dot-1">
                            <img src="{{ asset('assets/images/shapes/why-choose-two-dot-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-two__dot-2">
                            <img src="{{ asset('assets/images/shapes/why-choose-two-dot-2.png') }}" alt="">
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
                                                <img src="{{ asset('assets/images/resources/why-choose-two-right-content-one-user-details-top-img.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="why-choose-two__right-content-one-user-details-bottom">
                                            <div class="why-choose-two__right-content-one-user-details-img">
                                                <img src="{{ asset('assets/images/resources/why-choose-two-right-content-one-user-details-img-1.jpg') }}" alt="">
                                            </div>
                                            <div class="why-choose-two__right-content-one-user-details-content">
                                                <h5>Sarah Amanda</h5>
                                                <p>Product Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-choose-two__student-trained">
                                        <div class="why-choose-two__student-trained-shape-1"></div>
                                        <ul class="list-unstyled why-choose-two__student-trained-list">
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-1.jpg') }}" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-2.jpg') }}" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-3.jpg') }}" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-4.jpg') }}" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="why-choose-two__student-trained-count-box">
                                            <div class="why-choose-two__student-trained-count-box-inner count-box">
                                                <p class="count-text" data-stop="100" data-speed="3000">00</p>
                                                <span>+</span>
                                            </div>
                                            <p class="why-choose-two__student-trained-text">Student Trained</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="why-choose-two__right-content-two">
                                    <div class="why-choose-two__udemy-review">
                                        <div class="why-choose-two__udemy-review-img">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-udemy-review-img.jpg') }}" alt="">
                                        </div>
                                        <div class="why-choose-two__udemy-review-logo">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-udemy-review-logo.png') }}" alt="">
                                        </div>
                                        <div class="why-choose-two__udemy-review-client-info">
                                            <p class="why-choose-two__udemy-review-client-name">Alisa Olivia/</p>
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
                                                <img src="{{ asset('assets/images/resources/why-choose-two-right-content-two-user-details-top-img.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="why-choose-two__right-content-two-user-details-bottom">
                                            <div class="why-choose-two__right-content-two-user-details-icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-right-content-two-user-details-icon.png') }}" alt="">
                                            </div>
                                            <div class="why-choose-two__right-content-two-user-details-content">
                                                <h5>Jhon Oleson</h5>
                                                <p>Sr. Developer</p>
                                            </div>
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
    <!--Why Choose Two End -->

    <!-- Counter Two Start -->
    <section class="counter-two">
        <div class="counter-two__wrap">
            <ul class="list-unstyled counter-two__list marquee_mode">
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
            </ul>
        </div>
    </section>
    <!-- Counter Two End -->

    <!-- Courses Three Start -->
    <section class="courses-three">
        <div class="container">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Best Selling</span>
                </div>
                <h2 class="section-title-two__title title-animation">Our Courses Designed for <br>Your Success
                    <span>History</span>
                </h2>
            </div>
            <div class="row">
                <!-- Courses Three Single Start -->
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="courses-three__single">
                        <div class="courses-three__img">
                            <img src="{{ asset('assets/images/resources/courses-3-1.jpg') }}" alt="">
                        </div>
                        <div class="courses-three__content">
                            <div class="courses-three__price-and-review">
                                <h4 class="courses-three__price">$240.00</h4>
                                <div class="courses-three__review-box">
                                    <div class="courses-three__review-star">
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="courses-three__review-text">4.5 <span>(129 Reviews)</span></p>
                                </div>
                            </div>
                            <h3 class="courses-three__title"><a href={{ url('course-details') }}>A Beginner's Guide to
                                    Basic <br> Skills and Improved</a></h3>
                            <div class="courses-three__btn-and-heart-box">
                                <div class="courses-three__btn-box">
                                    <a href={{ url('course-details') }} class="thm-btn-two">
                                        <span>Enroll Now</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                <div class="courses-three__heart-box">
                                    <a href={{ url('course-details') }}><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <ul class="courses-three__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-book"></span>
                                    </div>
                                    <p>12 Lesson</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <p>620h, 20min</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Courses Three Single End -->
                <!-- Courses Three Single Start -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="courses-three__single">
                        <div class="courses-three__img">
                            <img src="{{ asset('assets/images/resources/courses-3-2.jpg') }}" alt="">
                        </div>
                        <div class="courses-three__content">
                            <div class="courses-three__price-and-review">
                                <h4 class="courses-three__price">$240.00</h4>
                                <div class="courses-three__review-box">
                                    <div class="courses-three__review-star">
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="courses-three__review-text">4.5 <span>(129 Reviews)</span></p>
                                </div>
                            </div>
                            <h3 class="courses-three__title"><a href={{ url('course-details') }}>Learn the Foundations of
                                    <br> Visual Communication</a></h3>
                            <div class="courses-three__btn-and-heart-box">
                                <div class="courses-three__btn-box">
                                    <a href={{ url('course-details') }} class="thm-btn-two">
                                        <span>Enroll Now</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                <div class="courses-three__heart-box">
                                    <a href={{ url('course-details') }}><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <ul class="courses-three__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-book"></span>
                                    </div>
                                    <p>12 Lesson</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <p>620h, 20min</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Courses Three Single End -->
                <!-- Courses Three Single Start -->
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="courses-three__single">
                        <div class="courses-three__img">
                            <img src="{{ asset('assets/images/resources/courses-3-3.jpg') }}" alt="">
                        </div>
                        <div class="courses-three__content">
                            <div class="courses-three__price-and-review">
                                <h4 class="courses-three__price">$240.00</h4>
                                <div class="courses-three__review-box">
                                    <div class="courses-three__review-star">
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="courses-three__review-text">4.5 <span>(129 Reviews)</span></p>
                                </div>
                            </div>
                            <h3 class="courses-three__title"><a href={{ url('course-details') }}>Cooking Made Easy: Essential <br> Skills
                                    for Everyday Meals</a></h3>
                            <div class="courses-three__btn-and-heart-box">
                                <div class="courses-three__btn-box">
                                    <a href={{ url('course-details') }} class="thm-btn-two">
                                        <span>Enroll Now</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                <div class="courses-three__heart-box">
                                    <a href={{ url('course-details') }}><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <ul class="courses-three__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-book"></span>
                                    </div>
                                    <p>12 Lesson</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <p>620h, 20min</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Courses Three Single End -->
                <!-- Courses Three Single Start -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="courses-three__single">
                        <div class="courses-three__img">
                            <img src="{{ asset('assets/images/resources/courses-3-4.jpg') }}" alt="">
                        </div>
                        <div class="courses-three__content">
                            <div class="courses-three__price-and-review">
                                <h4 class="courses-three__price">$240.00</h4>
                                <div class="courses-three__review-box">
                                    <div class="courses-three__review-star">
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="courses-three__review-text">4.5 <span>(129 Reviews)</span></p>
                                </div>
                            </div>
                            <h3 class="courses-three__title"><a href={{ url('course-details') }}>How to Capture Stunning <br> Photos with
                                    Ease</a></h3>
                            <div class="courses-three__btn-and-heart-box">
                                <div class="courses-three__btn-box">
                                    <a href={{ url('course-details') }} class="thm-btn-two">
                                        <span>Enroll Now</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                <div class="courses-three__heart-box">
                                    <a href={{ url('course-details') }}><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <ul class="courses-three__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-book"></span>
                                    </div>
                                    <p>12 Lesson</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <p>620h, 20min</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Courses Three Single End -->
            </div>
        </div>
    </section>
    <!-- Courses Three End -->

    <!--Team Two Start -->
    <section class="team-two" id="team">
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
                            <img src="{{ asset('assets/images/team/team-2-1.jpg') }}" alt="">
                        </div>
                        <div class="team-two__arrow">
                            <a href="{{ url('instructor-details') }}"><span class="icon-circle-left"></span></a>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__sub-title">Graphics Designer</p>
                            <h3 class="team-two__name">
                                <a href="{{ url('instructor-details') }}">Thomas<br><span>Alison</span></a>
                            </h3>
                        </div>
                        <div class="team-two__social-box">
                            <div class="team-two__plus">
                                <i><span class="icon-plus"></span></i>
                            </div>
                            <div class="team-two__social-list">
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-1">
                            <img src="{{ asset('assets/images/team/team-2-2.jpg') }}" alt="">
                        </div>
                        <div class="team-two__arrow">
                            <a href="{{ url('instructor-details') }}"><span class="icon-circle-left"></span></a>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__sub-title">Fashion Designer</p>
                            <h3 class="team-two__name">
                                <a href="{{ url('instructor-details') }}">Monalisa<br><span>Olivia</span></a></h3>
                        </div>
                        <div class="team-two__social-box">
                            <div class="team-two__plus">
                                <i><span class="icon-plus"></span></i>
                            </div>
                            <div class="team-two__social-list">
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-1">
                            <img src="{{ asset('assets/images/team/team-2-3.jpg') }}" alt="">
                        </div>
                        <div class="team-two__arrow">
                            <a href="{{ url('instructor-details') }}"><span class="icon-circle-left"></span></a>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__sub-title">UI Designer</p>
                            <h3 class="team-two__name">
                                <a href="{{ url('instructor-details') }}">Richard<br><span>Mark</span></a></h3>
                        </div>
                        <div class="team-two__social-box">
                            <div class="team-two__plus">
                                <i><span class="icon-plus"></span></i>
                            </div>
                            <div class="team-two__social-list">
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-1">
                            <img src="{{ asset('assets/images/team/team-2-1.jpg') }}" alt="">
                        </div>
                        <div class="team-two__arrow">
                            <a href="{{ url('instructor-details') }}"><span class="icon-circle-left"></span></a>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__sub-title">Graphics Designer</p>
                            <h3 class="team-two__name">
                                <a href="{{ url('instructor-details') }}">Thomas<br><span>Alison</span></a>
                            </h3>
                        </div>
                        <div class="team-two__social-box">
                            <div class="team-two__plus">
                                <i><span class="icon-plus"></span></i>
                            </div>
                            <div class="team-two__social-list">
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-1">
                            <img src="{{ asset('assets/images/team/team-2-2.jpg') }}" alt="">
                        </div>
                        <div class="team-two__arrow">
                            <a href="{{ url('instructor-details') }}"><span class="icon-circle-left"></span></a>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__sub-title">Fashion Designer</p>
                            <h3 class="team-two__name">
                                <a href="{{ url('instructor-details') }}">Monalisa<br><span>Olivia</span></a></h3>
                        </div>
                        <div class="team-two__social-box">
                            <div class="team-two__plus">
                                <i><span class="icon-plus"></span></i>
                            </div>
                            <div class="team-two__social-list">
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Two Single End-->
                <!--Team Two Single Start-->
                <div class="item">
                    <div class="team-two__single">
                        <div class="team-two__img-1">
                            <img src="{{ asset('assets/images/team/team-2-3.jpg') }}" alt="">
                        </div>
                        <div class="team-two__arrow">
                            <a href="{{ url('instructor-details') }}"><span class="icon-circle-left"></span></a>
                        </div>
                        <div class="team-two__content">
                            <p class="team-two__sub-title">UI Designer</p>
                            <h3 class="team-two__name">
                                <a href="{{ url('instructor-details') }}">Richard<br><span>Mark</span></a></h3>
                        </div>
                        <div class="team-two__social-box">
                            <div class="team-two__plus">
                                <i><span class="icon-plus"></span></i>
                            </div>
                            <div class="team-two__social-list">
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
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
                <li><img src="{{ asset('assets/images/shapes/sliding-text-five-shape-1.png') }}" alt=""></li>
                <li>
                    <h2 data-hover="Our Professional" class="sliding-text-five__title">Our Professional</h2>
                </li>
                <li><img src="{{ asset('assets/images/shapes/sliding-text-five-shape-1.png') }}" alt=""></li>
            </ul>
        </div>
    </section>
    <!--Team Two End -->

    <!--live class Two Start -->
    <section class="live-class-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="live-class-two__left">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">Join Live</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">Join Our live Class, Start<br> Your Online
                                <span>Journey</span>
                            </h2>
                        </div>
                        <ul class="live-class-two__list list-unstyled">
                            <li>
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="live-class-two__icon"></div>
                                </a>
                                <div class="live-class-two__content">
                                    <ul class="live-class-two__content-meta-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-book"></span>
                                            </div>
                                            <p>45 Lesson</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <p>620h 55min</p>
                                        </li>
                                    </ul>
                                    <h3 class="live-class-two__content-title">
                                        <a href="{{ url('course-details') }}">Master Python Programming for<br> Beginners and Beyond</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="live-class-two__icon"></div>
                                </a>
                                <div class="live-class-two__content">
                                    <ul class="live-class-two__content-meta-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-book"></span>
                                            </div>
                                            <p>45 Lesson</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <p>620h 55min</p>
                                        </li>
                                    </ul>
                                    <h3 class="live-class-two__content-title">
                                        <a href="{{ url('course-details') }}">Meet the Team: Passionate People,<br> Exceptional Talent</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="live-class-two__icon"></div>
                                </a>
                                <div class="live-class-two__content">
                                    <ul class="live-class-two__content-meta-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-book"></span>
                                            </div>
                                            <p>45 Lesson</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <p>620h 55min</p>
                                        </li>
                                    </ul>
                                    <h3 class="live-class-two__content-title">
                                        <a href="{{ url('course-details') }}">The Faces Behind the Brand,<br> Dedicated, Driven</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="live-class-two__right">
                        <div class="live-class-two__shape-1 rotate-me">
                            <img src="{{ asset('assets/images/shapes/live-class-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="live-class-two__shape-2 text-rotate-box">
                            <img src="{{ asset('assets/images/shapes/live-class-two-shape-2.png') }}" alt="">
                        </div>
                        <div class="live-class-two__img-box">
                            <img src="{{ asset('assets/images/resources/live-class-two-img-1.jpg') }}" alt="">
                            <ul class="list-unstyled live-class-two__video-control">
                                <li><a href="#"><span class="icon-screen-share"></span></a></li>
                                <li><a href="#"><span class="icon-microphone"></span></a></li>
                                <li><a href="#"><span class="icon-phone"></span></a></li>
                                <li><a href="#"><span class="icon-video-slash"></span></a></li>
                                <li><a href="#"><span class="icon-share-from"></span></a></li>
                            </ul>
                            <div class="live-class-two__live">
                                <div class="live-class-two__live-icon">
                                    <span class="icon-wifi"></span>
                                </div>
                                <p class="live-class-two__live-text">LIVE - 01:30:56</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--live class Two End -->

    <!-- Testimonial Two Start -->
    <section class="testimonial-two" id="testimonial">
        <div class="testimonial-two__shape-6">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-6.png') }}" alt="">
        </div>
        <div class="testimonial-two__shape-1">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
            <div class="testimonial-two__shape-icon-1">
                <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-1.png') }}" alt="" class="zoom-fade">
            </div>
            <div class="testimonial-two__shape-img-2">
                <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-2.jpg') }}" alt="">
            </div>
            <div class="testimonial-two__shape-img-3 img-bounce">
                <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-3.jpg') }}" alt="">
            </div>
        </div>
        <div class="testimonial-two__shape-2">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
            <div class="testimonial-two__shape-icon-2 float-bob-y">
                <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-2.png') }}" alt="">
            </div>
            <div class="testimonial-two__shape-img-1 zoom-fade">
                <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="testimonial-two__shape-3 float-bob-x">
            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-3.png') }}" alt="">
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
                            <!-- Testimonial Item 1 -->
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
                                        It has survived not only five centuries, but also the leap into electronic<br>
                                        typesetting, remaining essentially unchanged. It was popularised in the<br>
                                        1960s with the release of Letraset sheets containing Lorem Ipsum<br>
                                        passages, and more recently with desktop publishing software like Aldus<br>
                                        PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <div class="testimonial-two__client-info">
                                        <!-- <div class="testimonial-two__client-logo">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="">
                                        </div> -->
                                        <div class="testimonial-two__client-name-box">
                                            <h4 class="testimonial-two__client-name">
                                                <a href={{ url('testimonials') }}>Mitchel Clack</a>
                                            </h4>
                                            <p class="testimonial-two__client-sub-title">Tech Specialist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item 2 -->
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
                                        It has survived not only five centuries, but also the leap into electronic<br>
                                        typesetting, remaining essentially unchanged. It was popularised in the<br>
                                        1960s with the release of Letraset sheets containing Lorem Ipsum<br>
                                        passages, and more recently with desktop publishing software like Aldus<br>
                                        PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <div class="testimonial-two__client-info">
                                        <!-- <div class="testimonial-two__client-logo">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="">
                                        </div> -->
                                        <div class="testimonial-two__client-name-box">
                                            <h4 class="testimonial-two__client-name">
                                                <a href={{ url('testimonials') }}>Mitchela Smith</a>
                                            </h4>
                                            <p class="testimonial-two__client-sub-title">Tech Specialist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item 3 -->
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
                                        It has survived not only five centuries, but also the leap into electronic<br>
                                        typesetting, remaining essentially unchanged. It was popularised in the<br>
                                        1960s with the release of Letraset sheets containing Lorem Ipsum<br>
                                        passages, and more recently with desktop publishing software like Aldus<br>
                                        PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <div class="testimonial-two__client-info">
                                        <!-- <div class="testimonial-two__client-logo">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="">
                                        </div> -->
                                        <div class="testimonial-two__client-name-box">
                                            <h4 class="testimonial-two__client-name">
                                                <a href={{ url('testimonials') }}>Sarah Smith</a>
                                            </h4>
                                            <p class="testimonial-two__client-sub-title">Tech Specialist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-two__thumb-outer-box">
                        <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                            <div class="testimonial-two__thumb-item">
                                <div class="testimonial-two__img-holder-box">
                                    <div class="testimonial-two__img-holder">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__thumb-item">
                                <div class="testimonial-two__img-holder-box">
                                    <div class="testimonial-two__img-holder">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__thumb-item">
                                <div class="testimonial-two__img-holder-box">
                                    <div class="testimonial-two__img-holder">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    <h2 data-hover="20+ Instructor" class="sliding-text-three__title count-box">
                        Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor" class="sliding-text-three__title count-box">
                        Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor" class="sliding-text-three__title count-box">
                        Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor" class="sliding-text-three__title count-box">
                        Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="20+ Instructor" class="sliding-text-three__title count-box">
                        Testimonial
                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Three End -->

    <!-- Blog Two Start -->
    <section class="blog-two one-page-two-blog" id="blog">
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
                            <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title">
                                <a href={{ url('blog-details') }}>How to Succeed in Online Learning: Tips for Students</a>
                            </h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two Single End -->
                <!-- Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title">
                                <a href={{ url('blog-details') }}>The Future of Education: Why Online Learning is Here to Stay</a>
                            </h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two Single End -->
                <!-- Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title">
                                <a href={{ url('blog-details') }}>Creating a Productive Study Space for Online Learning</a>
                            </h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two Single End -->
            </div>
        </div>
    </section>
    <!-- Blog Two End -->

    <!--Contact Three Start-->
    <section class="contact-three" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-three__left">
                        <div class="contact-three__img">
                            <img src="{{ asset('assets/images/resources/contact-three-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-three__right">
                        <div class="section-title-two text-left sec-title-animation animation-style1">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">Get in Touch</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">We’re Here to Help and Ready to
                                Hear from You</span>
                            </h2>
                        </div>
                        <form class="contact-form-validated contact-three__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-three__input-title">Full Name</h4>
                                    <div class="contact-three__input-box">
                                        <input type="text" name="name" placeholder="Jhon Doe" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-three__input-title">Email Address *</h4>
                                    <div class="contact-three__input-box">
                                        <input type="email" name="email" placeholder="jhon@doman.com" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-three__input-title">Subject *</h4>
                                    <div class="contact-three__input-box">
                                        <input type="text" name="Phone" placeholder="write about your enquiry"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-three__input-title">Message *</h4>
                                    <div class="contact-three__input-box text-message-box">
                                        <textarea name="message" placeholder="Write Your Message"></textarea>
                                    </div>
                                    <div class="contact-three__btn-box">
                                        <button type="submit" class="thm-btn-two contact-three__btn"><span>Submit
                                                Review</span><i class="icon-angles-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Three End-->

    <!--Newsletter Two Start -->
    <section class="newsletter-two">
        <div class="container">
            <div class="newsletter-two__inner">
                <div class="newsletter-two__img">
                    <img src="{{ asset('assets/images/resources/newsletter-two-img-1.png') }}" alt="">
                </div>
                <div class="newsletter-two__inner-content">
                    <div class="newsletter-two__shape-bg"
                        style="background-image: url('{{ asset('assets/images/shapes/newsletter-two-shape-bg.png') }}');">
                    </div>
                    <div class="newsletter-two__like">
                        <img src="{{ asset('assets/images/shapes/newsletter-two-like.png') }}" alt="">
                    </div>
                    <div class="newsletter-two__title-box">
                        <h3 class="newsletter-two__title">Subscribe our <span>Newsletter</span></h3>
                        <p class="newsletter-two__text">Explore a diverse selection of courses all in one platform,
                            <br>
                            designed to cater to various learning</p>
                    </div>
                    <div class="newsletter-two__form-box">
                        <form class="newsletter-two__form">
                            <div class="newsletter-two__input">
                                <input type="email" placeholder="Enter Your Email">
                            </div>
                            <button type="submit" class="newsletter-two__btn">
                                <span class="icon-arrow-circle"></span> Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                <a href="mailto:info@example.com">info@example.com</a>
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
                                <a href="tel:001239957689">+00 123 (99) 57689</a>
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
                            <h5 class="contact-info-one__email">1234 Elm Street Springfield,</h5>
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