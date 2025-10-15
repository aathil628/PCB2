@extends('layouts.layout2')
@php
$title = 'Blog Details';
$subtitle = 'Blog Details';
@endphp
@section('title', 'Advanced PCB Design Projects for Beginners | MyFirstPCB')
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
                            <img src="{{ asset('assets/images/blog/blog-details-img-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">5 Simple Projects You Can Do With Our Junior PCB Toolkit
                        </h3>
                        <p class="blog-details__text-1">Starting with electronics doesn’t have to be complicated. With
                            the <strong>Junior PCB Toolkit</strong>, you already have everything you need to bring small
                            but exciting projects to life. These projects will help you learn the basics of circuits
                            while giving you something fun and practical to show off.

                            <br /><br />
                            Here are five simple projects you can try right away:
                        </p>

                        <h4 class="blog-details__title-2">1. Blinking LED Circuit
                        </h4>
                        <p class="blog-details__text-2">The first project almost every maker tries, and it never gets
                            old. With just an LED, a resistor, and a power source, you’ll build a circuit that blinks on
                            and off. It’s a quick way to learn how electricity flows and how resistors protect
                            components.
                            <br>

                            <strong>You’ll use:</strong> LED, resistor, breadboard, jumper wires, soldering tools.
                        </p>

                        <h4 class="blog-details__title-2">2. Light-Activated Lamp</h4>
                        <p class="blog-details__text-2">This one’s like magic. Using a light-dependent resistor (LDR),
                            you can make a lamp that turns on in the dark and off when it’s bright. It’s a neat
                            introduction to sensors and how they interact with circuits. <br>
                            <strong>You’ll use:</strong> LDR, LED, transistor, resistors, breadboard, jumper wires.
                        </p>

                        <h4 class="blog-details__title-2">3. Buzzer Alarm
                        </h4>
                        <p class="blog-details__text-2">Want to build a mini alarm system? Connect a buzzer with a
                            switch so that pressing the switch triggers the buzzer. You can later expand this into a
                            door or drawer alarm for fun practical use.
                            <br>
                            <strong>You’ll use:</strong> Buzzer, switch, breadboard, jumper wires, soldering tools.
                        </p>

                        <h4 class="blog-details__title-2">4. Temperature Indicator
                        </h4>
                        <p class="blog-details__text-2">With a thermistor, you can design a simple circuit where an LED
                            changes brightness with temperature. It’s a small step into the world of sensors and helps
                            you understand how electronics respond to the environment.
                            <br>
                            <strong>You’ll use:</strong> Thermistor, LED, resistor, breadboard, jumper wires.

                        </p>

                        <h4 class="blog-details__title-2">5. DIY Traffic Light</h4>
                        <p class="blog-details__text-2">Recreate a traffic light system with red, yellow, and green
                            LEDs. Control them with switches or design a sequence manually. It’s a fun way to practice
                            working with multiple components at once.
                            <br>
                            <strong>You’ll use:</strong> 3 LEDs, resistors, switches, breadboard, jumper wires.
                        </p>

                        <div class="blog-details__points-box mt-5">
                            <h4 class="blog-details__points-title">Why These Projects Matter</h4>
                            <!-- <p>Not every maker needs the same level of tools. That’s why we created two versions:</p> -->
                            <ul class="blog-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        They’re <strong>easy to build</strong> in under an hour.
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        They teach you <strong>core electronics concepts</strong> like resistance,
                                        sensing, and switching.
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        They’re <strong>stepping stones</strong>, you can expand them into bigger, more
                                        advanced projects as your skills grow.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <p class="mt-3">The <strong>Junior PCB Toolkit</strong> is built to give you everything you need
                            in one box. No missing parts. No confusion about what tools to buy. Just open it up, pick a
                            project, and start making.
                        </p>
                    </div>
                </div>
                <p class="mt-4">Ready to build your first circuit? Check out our <strong>Junior Toolkit</strong> today
                    and turn your ideas into reality.</p>
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
                                    <img src="{{ asset('assets/images/blog/industry-connect.jpg') }}" alt="PCB Projects">
                                </div>
                                <div class="sidebar__post-content">
                                    <ul class="sidebar__post-meta list-unstyled">
                                        <li>
                                            <p><span class="icon-tags"></span>PCB Projects</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span>5 Min Read</p>
                                        </li>
                                    </ul>
                                    <h3 class="sidebar__post-title"><a href="{{ route('blog-details-2') }}">5 Simple Projects You Can Do With Our Junior PCB Toolkit</a></h3>
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
                    <div class="sidebar__single sidebar__newsletter">
                        <div class="sidebar__title-box">
                            <div class="sidebar__title-icon">
                                <img src="{{ asset('assets/images/icon/sidebar-title-icon.png') }}" alt="">
                            </div>
                            <h3 class="sidebar__title">Newsletter </h3>
                        </div>
                        <p class="sidebar__newsletter-text">Subscribe our newsletter to get every update </p>
                        <form action="#" class="sidebar__newsletter-form">
                            <input type="search" placeholder="Search Blogs">
                            <button type="submit">Subscribe<i class="icon-circle-left"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->

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
                        designed to cater to various learning
                    </p>
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