@extends('layouts.layout4')
@php
$title = 'Our Blogs';
$subtitle = 'Our Blogs';
@endphp
@section('title', 'Blog | MyFirstPCB')
@section('content')



<x-strickyHeader />
<div style="height: 30px;"></div>
<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <!--Blog 1: Robotics Courses for Kids in Trivandrum-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <a href="{{ route('blog-details-1') }}" style="text-decoration:none;color:inherit;display:block;">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/robotics-kids-trivandrum.jpg') }}"
                            alt=" No More Last-Minute Scrambling" style="width:100%; height:auto;">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 02, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <h4 class="blog-two__title">
                            Why Every Maker Should Have a PCB Toolkit Ready
                        </h4>
                        <p class="blog-two__text">If you’re into electronics, tinkering, or DIY projects, there’s one
                            thing you’ll quickly learn: having the right tools at your side makes all the difference.
                            It’s exciting to jump straight into designing circuits or soldering components, but without
                            a proper toolkit, small hurdles can slow you down or even kill your momentum.</p>
                    </div>
                </div>
                </a>
            </div>

            <!--Blog 2: Industry Connect-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <a href="{{ route('blog-details-2') }}" style="text-decoration:none;color:inherit;display:block;">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/industry-connect.jpg') }}" alt="Consistency in Quality"
                            style="width:100%; height:auto;">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 03, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <h4 class="blog-two__title">
                            5 Simple Projects You Can Do With Our Junior PCB Toolkit
                        </h4>
                        <p class="blog-two__text">Getting started with electronics can feel intimidating, but the truth
                            is, you don’t need to dive into complex circuits on day one. With the Junior PCB Toolkit,
                            you’ve already got everything you need to try out fun, hands-on projects that will boost
                            your skills and confidence.
                        </p>
                    </div>
                </div>
                </a>
            </div>

            <!--Blog 3-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <a href="{{ route('blog-details-3') }}" style="text-decoration:none;color:inherit;display:block;">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/robotics-curriculum.jpg') }}" alt="Faster Learning Curve"
                            style="width:100%; height:auto;">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 04, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <h4 class="blog-two__title">
                            5 Simple Projects You Can Do With Our Junior PCB Toolkit
                        </h4>
                        <p class="blog-two__text">Starting with electronics doesn’t have to be complicated. With the
                            Junior PCB Toolkit, you already have everything you need to bring small but exciting
                            projects to life. These projects will help you learn the basics of circuits while giving you
                            something fun and practical to show off.
                        </p>
                    </div>
                </div>
                </a>
            </div>

            <!-- Blog 4 -->
                         <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <a href="{{ route('blog-details-4') }}" style="text-decoration:none;color:inherit;display:block;">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ asset('assets/images/blog/starter- pack for-learning- pcb.jpg') }}" alt="Faster Learning Curve"
                            style="width:100%; height:auto;">
                        <div class="blog-two__date">
                            <span class="icon-calendar"></span>
                            <p>April 12, 2025</p>
                        </div>
                    </div>
                    <div class="blog-two__content">
                        <h4 class="blog-two__title">
                            The Ultimate Starter Pack for Learning PCB Design (Without Getting Overwhelmed)
                        </h4>
                        <p class="blog-two__text">If you’ve ever thought about making your own circuits or designing your own PCBs, you probably know the feeling: too many tools, too many tutorials, and too many decisions. It’s easy to get overwhelmed before you even begin.
                        </p>
                    </div>
                </div>
                </a>
            </div>


        </div>
    </div>
</section>
<!--Blog Page End-->


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
                            <a href="tel:001239957689">+91 85908 70849</a>
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
                        <h5 class="contact-info-one__email">Malmskillnadsgatan 42, 111 57, <br /> Stockholm, Sweden</h5>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>


<!--Contact Info One End -->

<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection