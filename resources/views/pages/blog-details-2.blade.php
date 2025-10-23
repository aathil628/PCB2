@extends('layouts.layout2')
@php
$title = 'Blog Details';
$subtitle = 'Blog Details';
@endphp
@section('title', '5 Simple Projects You Can Do With Our Junior PCB Toolkit | MyFirstPCB')
@section('content')

<x-strickyHeader />

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img-box">
                        <div class="blog-details__img">
                            <img src="{{ asset('assets/images/blog/blog-details-img-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">5 Simple Projects You Can Do With Our Junior PCB Toolkit
                        </h3>
                        <p class="blog-details__text-1">Getting started with electronics can feel intimidating, but the
                            truth is, you don’t need to dive into complex circuits on day one. With the <strong>Junior
                                PCB Toolkit</strong>, you’ve already got everything you need to try out fun, hands-on
                            projects that will boost your skills and confidence.

                            <br /><br />
                            Here are five simple projects you can make right away with the kit.
                        </p>

                        <h4 class="blog-details__title-2">1. Blinking LED Circuit
                        </h4>
                        <p class="blog-details__text-2">The classic beginner’s project, and for good reason. You’ll
                            learn how resistors work with LEDs, how to place components, and how current flows through a
                            simple circuit. Plus, nothing beats the excitement of seeing that first LED blink to life.
                            <br>

                            <strong>What you’ll use from the kit:</strong> soldering iron, resistors, LEDs, breadboard,
                            jumper wires.
                        </p>

                        <h4 class="blog-details__title-2">2. Light-Activated Night Lamp</h4>
                        <p class="blog-details__text-2">Want a small lamp that turns on automatically when it’s dark?
                            Pair a photoresistor (LDR) with a transistor and an LED. The LED lights up when the sensor
                            detects low light. <br>
                            <strong>What you’ll use from the kit:</strong> LDR, LEDs, breadboard, jumper wires,
                            soldering tools.
                        </p>

                        <h4 class="blog-details__title-2">3. Buzzer Alarm System
                        </h4>
                        <p class="blog-details__text-2">This project teaches you how to trigger sound using a simple
                            circuit. Hook up a buzzer with a switch, press the switch, and the buzzer goes off. You can
                            expand this later into a door alarm or alert system.
                            <br>
                            <strong>What you’ll use from the kit:</strong> buzzer, switch, breadboard, jumper wires.
                        </p>

                        <h4 class="blog-details__title-2">4. Simple Temperature Tester (Using a Thermistor)
                        </h4>
                        <p class="blog-details__text-2">Thermistors change resistance with temperature. By wiring one
                            into a circuit with an LED, you can create a basic indicator, when it gets hot, the LED
                            brightness changes. A fun way to understand sensors and real-world applications.
                            <br>
                            <strong>What you’ll use from the kit:</strong> thermistor, resistors, LED, breadboard,
                            jumper wires.

                        </p>

                        <h4 class="blog-details__title-2">5. DIY Traffic Light System</h4>
                        <p class="blog-details__text-2">Use three LEDs (red, yellow, green) and resistors to mimic a
                            traffic light sequence. You’ll practice wiring multiple components and controlling their
                            timing manually with switches, or take it further later by adding an Arduino.
                            <br>
                            <strong>What you’ll use from the kit:</strong> LEDs, resistors, switches, breadboard, jumper
                            wires.
                        </p>

                        <div class="blog-details__points-box mt-5">
                            <h4 class="blog-details__points-title">Why Start With These Projects?</h4>
                            <!-- <p>Not every maker needs the same level of tools. That’s why we created two versions:</p> -->
                            <ul class="blog-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        <strong>They’re quick to build: </strong> you can finish most in under an hour.
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        <strong>They teach core concepts </strong> like resistance, sensing, switching,
                                        and sequencing.
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        <strong>They’re expandable: </strong> today it’s an LED, tomorrow it’s an
                                        Arduino-controlled system.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <p class="mt-3">The <strong>Junior PCB Toolkit</strong> is designed for exactly this, giving you
                            the right tools to learn by doing. Once you’ve mastered these basics, you’ll feel ready to
                            explore more complex builds.
                        </p>
                    </div>
                </div>
                <p class="mt-4"><strong>Grab your Junior Toolkit today and start building your first project this
                        weekend!</strong></p>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <div class="sidebar__title-box">
                            <div class="sidebar__title-icon">
                                <img src="{{ asset('assets/images/icon/sidebar-title-icon.png') }}" alt="">
                            </div>
                            <h3 class="sidebar__title">Latest Post </h3>
                        </div>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('assets/images/blog/robotics-kids-trivandrum.jpg') }}" alt="PCB Toolkit">
                                </div>
                                <div class="sidebar__post-content">
                                    <ul class="sidebar__post-meta list-unstyled">
                                        <li>
                                            <p><span class="icon-tags"></span>PCB Toolkit</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span>8 Min Read</p>
                                        </li>
                                    </ul>
                                    <h3 class="sidebar__post-title"><a href="{{ route('blog-details-1') }}">Why Every Maker Should Have a PCB Toolkit Ready</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('assets/images/blog/robotics-curriculum.jpg') }}" alt="PCB Projects">
                                </div>
                                <div class="sidebar__post-content">
                                    <ul class="sidebar__post-meta list-unstyled">
                                        <li>
                                            <p><span class="icon-tags"></span>PCB Projects</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span>8 Min Read</p>
                                        </li>
                                    </ul>
                                    <h3 class="sidebar__post-title"><a href="{{ route('blog-details-3') }}">Advanced PCB Design Projects for Beginners</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('assets/images/blog/starter- pack for-learning- pcb.jpg') }}" alt="PCB Learning">
                                </div>
                                <div class="sidebar__post-content">
                                    <ul class="sidebar__post-meta list-unstyled">
                                        <li>
                                            <p><span class="icon-tags"></span>PCB Learning</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span>12 Min Read</p>
                                        </li>
                                    </ul>
                                    <h3 class="sidebar__post-title"><a href="{{ route('blog-details-4') }}">The Ultimate Starter Pack for Learning PCB Design</a></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->


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
                            <h5 class="contact-info-one__email">Malmskillnadsgatan 42, 111 57, <br/> Stockholm, Sweden</h5>
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