@extends('layouts.layout2')
@php
$title = 'Blog Details';
$subtitle = 'Blog Details';
@endphp
@section('title', ' Blog Details || MyfirstPCB || MyfirstPCB Laravel Template ')
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
                            <img src="{{ asset('assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">Why Every Maker Should Have a PCB Toolkit Ready
                        </h3>
                        <p class="blog-details__text-1">If you’re into electronics, tinkering, or DIY projects, there’s
                            one thing you’ll quickly learn: having the right tools at your side makes all the
                            difference. It’s exciting to jump straight into designing circuits or soldering components,
                            but without a proper toolkit, small hurdles can slow you down or even kill your momentum.
                            <br /><br />
                            That’s exactly where a dedicated PCB toolkit comes in.
                        </p>

                        <h4 class="blog-details__title-2">1. No More Last-Minute Scrambling
                        </h4>
                        <p class="blog-details__text-2">Imagine you’re in the middle of a build and realize you don’t
                            have flux, or the right wire cutter, or even a basic multimeter. Suddenly, you’re stuck
                            waiting for a delivery or rushing to a store. A toolkit keeps you prepared, everything you
                            need, in one place, ready to go.</p>

                        <h4 class="blog-details__title-2">2. Consistency in Quality</h4>
                        <p class="blog-details__text-2">When you buy tools individually, you often end up with
                            mismatched quality. A high-end soldering iron but cheap tweezers. Or a multimeter that
                            breaks after two weeks. A curated toolkit ensures every tool is reliable and chosen for the
                            job. It’s peace of mind, no weak links in your setup.
                        </p>

                        <h4 class="blog-details__title-2">3. Faster Learning Curve
                        </h4>
                        <p class="blog-details__text-2">For beginners, figuring out which tools you even need can be
                            overwhelming. Do you need a desoldering braid? What about a breadboard? Which kind of solder
                            is best? A toolkit answers that question for you. Instead of endless trial and error, you
                            can focus on what matters: learning and building.
                        </p>

                        <h4 class="blog-details__title-2">4. Project-Ready from Day One
                        </h4>
                        <p class="blog-details__text-2">Whether it’s your first blinking LED circuit or a more advanced
                            project, a toolkit gets you working immediately. No waiting for missing items. No excuses.
                            You open the box, pick up the soldering iron, and start making.

                        </p>

                        <h4 class="blog-details__title-2">5. Saves Money in the Long Run</h4>
                        <p class="blog-details__text-2">Buying tools one by one may feel cheaper at first, but it adds
                            up especially if you buy the wrong items and need to replace them later. A bundled toolkit
                            is designed to cover your essentials without unnecessary extras. You save both money and
                            frustration.
                        </p>

                        <div class="blog-details__points-box mt-5">
                            <h4 class="blog-details__points-title">6. Scales With Your Skills</h4>
                            <!-- <p>Not every maker needs the same level of tools. That’s why we created two versions:</p> -->
                            <ul class="blog-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        <strong>Junior PCB Toolkit</strong> – Perfect for students, hobbyists, and
                                        anyone
                                        just starting out. It has all the basics you’ll need to get hands-on quickly.
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-angles-right"></span>
                                    </div>
                                    <p>
                                        <strong>Senior PCB Toolkit</strong> – Built for advanced makers and small
                                        prototyping projects. More tools, more precision, more room to grow.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <p class="mt-3">This way, you don’t have to overspend as a beginner, but you also won’t outgrow
                            your tools as
                            your projects get more ambitious.
                        </p>
                        <h4 class="blog-details__title-3 mt-5">Final Thoughts</h4>
                        <p class="blog-details__text-5 mt-3">Every maker deserves the freedom to create without
                            unnecessary
                            delays or frustrations. A <strong>PCB toolkit</strong> isn’t just a box of tools, it’s your
                            ticket to faster
                            learning, smoother projects, and more satisfying results. <br />
                            So before you start your next build, ask yourself: Do I have everything I need within reach?
                            If not, it might be the perfect time to get your own toolkit, because when inspiration
                            strikes, you’ll want to be ready.

                        </p>
                    </div>
                </div>
                <p class="mt-4"><strong>Check out our [Junior Toolkit] and [Senior Toolkit] today, and give your ideas
                        the
                        tools they
                        deserve.</strong></p>
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
                                    <img src="{{ asset('assets/images/blog/blog-lp-2.jpg') }}" alt="">">
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
                                    <img src="{{ asset('assets/images/blog/blog-lp-3.jpg') }}" alt="">>
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