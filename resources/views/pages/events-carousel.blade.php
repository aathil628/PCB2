@extends('layouts.layout2')
@php
    $title = 'Event Carousel';
    $subtitle = 'Event Carousel';
@endphp
@section('title', ' Event Carousel || MyFirstPCB ')
@section('content')

<x-strickyHeader/>

    <!--Events Carousel Page Start-->
    <section class="events-carousel-page">
        <div class="container">
            <div class="events-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-1.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Graphic Design Essentials From Concept to Creation</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-2.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Innovative Teaching Strategies for the 21st Century Classroom</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-3.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Role of Social-Emotional Learning in Student Success</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-4.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Key Features and Considerations for Educational Institutions</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-5.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Key Features and Considerations for Educational Institutions</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-6.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Unlocking the Future of Education: How LMS Transforms Learning</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
                <!-- Event One Single Start -->
                <div class="item">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-1.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title">
                                <a href="{{ url('event-details') }}">Graphic Design Essentials From Concept to Creation</a>
                            </h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href="#" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
            </div>
        </div>
    </section>
    <!--Events Carousel Page End-->

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