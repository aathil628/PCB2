@extends('layouts.layout2')
@php
    $title = 'Gallery';
    $subtitle = 'Gallery';
@endphp
@section('title', ' Gallery || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>

    <!--Gallery Page Start-->
    <section class="gallery-page">
        <div class="container">
            <div class="row masonary-layout">
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-1.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-1.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-2.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-2.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-3.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-3.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-4.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-4.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-5.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-5.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-6.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-6.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-7.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-7.jpg') }}"><span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-8.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-8.jpg') }}"><span class="icon-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
                <!--Gallery Page Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <div class="gallery-page__img-box">
                                <img src="{{ asset('assets/images/gallery/gallery-page-1-9.jpg') }}" alt="">
                            </div>
                            <div class="gallery-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/gallery/gallery-page-1-9.jpg') }}">
                                    <span class="icon-plus"></span>
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery Page Single End-->
            </div>
        </div>
    </section>
    <!--Gallery Page End-->

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