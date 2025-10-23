@extends('layouts.layout2')
@php
    $title = 'Blog List';
    $subtitle = 'Blog List';
@endphp
@section('title', ' Blog List || MyFirstPCB ')
@section('content')

<x-strickyHeader/>

    <!--Blog List Start-->
    <section class="blog-list">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-list__left">
                        <!--Blig List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img-box">
                                <div class="blog-list__img">
                                    <img src="{{ asset('assets/images/blog/blog-list-1-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-list__date">
                                    <p><span class="icon-calendar"></span>Nov 02, 2024</p>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <div class="blog-list__client-and-meta">
                                    <div class="blog-list__client-box">
                                        <div class="blog-list__client-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-client-img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="blog-list__client-content">
                                            <p>Published By</p>
                                            <h4>Jordan Walk</h4>
                                        </div>
                                    </div>
                                    <ul class="blog-list__client-meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tags"></span>
                                            </div>
                                            <p>Marketing</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p>10 Min Read</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-comments"></span>
                                            </div>
                                            <p>(24 Comments)</p>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-list__title-1">
                                    <a href="{{ url('blog-details') }}">Creating a Productive Study Space for Online Learning</a>
                                </h3>
                                <p class="blog-list__text">
                                    Setting up a conducive study environment, engaging with peers and instructors, and utilizing available resources to enhance learning outcomes.
                                </p>
                                <div class="blog-list__btn-box">
                                    <a href="{{ url('blog-details') }}" class="thm-btn-two">
                                        <span>More Details</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <!--Blig List Single Start-->
                        <div class="blog-list__single blog-list__single-2">
                            <div class="blog-list__content">
                                <div class="blog-list__client-and-meta">
                                    <div class="blog-list__client-box">
                                        <div class="blog-list__client-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-client-img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="blog-list__client-content">
                                            <p>Published By</p>
                                            <h4>Jordan Walk</h4>
                                        </div>
                                    </div>
                                    <ul class="blog-list__client-meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tags"></span>
                                            </div>
                                            <p>Marketing</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p>10 Min Read</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-comments"></span>
                                            </div>
                                            <p>(24 Comments)</p>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-list__title-1">
                                    <a href="{{ url('blog-details') }}">The Future of Education: Why Online Learning is Here to Stay</a>
                                </h3>
                                <p class="blog-list__text">
                                    Setting up a conducive study environment, engaging with peers and instructors, and utilizing available resources to enhance learning outcomes.
                                </p>
                                <div class="blog-list__btn-box">
                                    <a href="{{ url('blog-details') }}" class="thm-btn-two">
                                        <span>More Details</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <!--Blig List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img-box">
                                <div class="blog-list__img">
                                    <img src="{{ asset('assets/images/blog/blog-list-1-3.jpg') }}" alt="">
                                </div>
                                <div class="blog-list__date">
                                    <p><span class="icon-calendar"></span>Nov 05, 2024</p>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <div class="blog-list__client-and-meta">
                                    <div class="blog-list__client-box">
                                        <div class="blog-list__client-img">
                                            <img src="{{ asset('assets/images/blog/blog-list-client-img-3.jpg') }}" alt="">
                                        </div>
                                        <div class="blog-list__client-content">
                                            <p>Published By</p>
                                            <h4>Jordan Walk</h4>
                                        </div>
                                    </div>
                                    <ul class="blog-list__client-meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tags"></span>
                                            </div>
                                            <p>Marketing</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <p>10 Min Read</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-comments"></span>
                                            </div>
                                            <p>(24 Comments)</p>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-list__title-1">
                                    <a href="{{ url('blog-details') }}">How to Succeed in Online Learning: Tips for Students</a>
                                </h3>
                                <p class="blog-list__text">
                                    Setting up a conducive study environment, engaging with peers and instructors, and utilizing available resources to enhance learning outcomes.
                                </p>
                                <div class="blog-list__btn-box">
                                    <a href="{{ url('blog-details') }}" class="thm-btn-two">
                                        <span>More Details</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <div class="blog-list__btn-box-2">
                            <a href="{{ url('blog-details') }}" class="thm-btn-two">
                                <span>More Blogs</span>
                                <i class="icon-angles-right"></i>
                            </a>
                        </div>                        
                        <div class="blog-list__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <li class="prev">
                                    <a href="#" aria-label="prev"><i class="fas fa-arrow-left"></i></a>
                                </li>
                                <li class="count active"><a href="#">01</a></li>
                                <li class="count"><a href="#">02</a></li>
                                <li class="count"><a href="#">03</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next"><i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <div class="sidebar__title-box">
                                <div class="sidebar__title-icon">
                                    <img src="{{ asset('assets/images/icon/sidebar-title-icon.png') }}" alt="">
                                </div>
                                <h3 class="sidebar__title">Search </h3>
                            </div>
                            <p class="sidebar__search-text">
                                Search blogs to discover a vast world of online content on countless topics.
                            </p>
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search..">
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>                        
                        <div class="sidebar__single sidebar__category">
                            <div class="sidebar__title-box">
                                <div class="sidebar__title-icon">
                                    <img src="{{ asset('assets/images/icon/sidebar-title-icon.png') }}" alt="">
                                </div>
                                <h3 class="sidebar__title">Category </h3>
                            </div>
                            <ul class="sidebar__category-list list-unstyled">
                                <li>
                                    <a href={{ url('blog-details') }}>Digital Marketing - (45)<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href={{ url('blog-details') }}>Health & Fitness - (12)<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li class="active">
                                    <a href={{ url('blog-details') }}>Programming & Tech - (78)<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href={{ url('blog-details') }}>Product Design - (45)<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                                <li>
                                    <a href={{ url('blog-details') }}>Online Chef - (12)<span
                                            class="fas fa-arrow-right"></span></a>
                                </li>
                            </ul>
                        </div>
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
                                        <img src="{{ asset('assets/images/blog/blog-lp-1.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="sidebar__post-meta list-unstyled">
                                            <li>
                                                <p><span class="icon-tags"></span>Development</p>
                                            </li>
                                            <li>
                                                <p><span class="icon-clock"></span>10 Min Read</p>
                                            </li>
                                        </ul>
                                        <h3 class="sidebar__post-title"><a href={{ url('blog-details') }}>Creating a
                                                Productive Study Space for Online Learning</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/blog/blog-lp-2.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="sidebar__post-meta list-unstyled">
                                            <li>
                                                <p><span class="icon-tags"></span>Development</p>
                                            </li>
                                            <li>
                                                <p><span class="icon-clock"></span>10 Min Read</p>
                                            </li>
                                        </ul>
                                        <h3 class="sidebar__post-title"><a href={{ url('blog-details') }}>Universities,
                                                colleges, and independent platforms</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/blog/blog-lp-3.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="sidebar__post-meta list-unstyled">
                                            <li>
                                                <p><span class="icon-tags"></span>Development</p>
                                            </li>
                                            <li>
                                                <p><span class="icon-clock"></span>10 Min Read</p>
                                            </li>
                                        </ul>
                                        <h3 class="sidebar__post-title"><a href={{ url('blog-details') }}>How to Succeed
                                                in Online Learning: Tips for Students</a></h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tag">
                            <div class="sidebar__title-box">
                                <div class="sidebar__title-icon">
                                    <img src="{{ asset('assets/images/icon/sidebar-title-icon.png') }}" alt="">
                                </div>
                                <h3 class="sidebar__title">Keywords</h3>
                            </div>
                            <div class="sidebar__tag-list">
                                <a href={{ url('blog-details') }}>Business</a>
                                <a href={{ url('blog-details') }}>Design</a>
                                <a href={{ url('blog-details') }}>Development</a>
                                <a href={{ url('blog-details') }}>Technology</a>
                                <a href={{ url('blog-details') }}>Fitness</a>
                                <a href={{ url('blog-details') }}>Cooking</a>
                                <a href={{ url('blog-details') }}>Health Care</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog List End-->

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
                                <a href="tel:+918590870849">+91 85908 70849</a>
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