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
                            <img src="{{ asset('assets/images/blog/blog-details-img-4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title-1">The Ultimate Starter Pack for Learning PCB Design (Without Getting Overwhelmed)
                        </h3>
                        <p class="blog-details__text-1">If you’ve ever thought about making your own circuits or designing your own PCBs, you probably know the feeling: too many tools, too many tutorials, and too many decisions. It’s easy to get overwhelmed before you even begin.
                            <br />
                            But here’s the truth, you don’t need everything at once. What you really need is a starter pack that covers the essentials, keeps things simple, and lets you focus on learning by doing.

                            <br> <br>
                            That’s exactly why we built our PCB Toolkits
                        </p>

                        <h4 class="blog-details__title-2">Why Beginners Feel Stuck</h4>
                        <ol>
                            <p class="mb-3">When you’re starting out, you’ll run into three common problems:</p>
                            <li><strong>Not knowing what tools are actually necessary.</strong> <br> You’ll see long lists online, but not all of them are beginner-friendly.</li>
                            <li><strong>Buying tools one by one.</strong> <br>  This often leads to mismatched quality and wasted money.</li>
                            <li><strong>Jumping into complex projects too early.</strong> <br>  Without basics in place, you’ll end up frustrated instead of excited.</li>
                        </ol>

                        <h3 class="mt-4">What Should Be in a PCB Starter Pack?</h3>

                        <h4 class="blog-details__title-2">1. Core Tools for Hands-On Learning
                        </h4>
                        <ul>
                            <li>Soldering iron (reliable, beginner-friendly)</li>
                            <li>Wire cutters/strippers</li>
                            <li>Tweezers for small components</li>
                            <li>Multimeter for testing circuits</li>
                        </ul>
                        <p>These are the “must-haves.” They’re the backbone of any project.</p>

                        <h4 class="blog-details__title-2">2. Basic Components to Experiment With</h4>
                        <ul>
                            <li>LEDs and resistors</li>
                            <li>Switches and buzzers</li>
                            <li>Sensors like LDRs or thermistors</li>
                            <li>Breadboard and jumper wires</li>
                        </ul>
                        <p>This way, you don’t just have the tools, you also have parts to actually build something right away</p>

                        <h4 class="blog-details__title-2">3. Guidance Without the Overload</h4>
                        <p class="blog-details__text-2">Too many tutorials throw everything at you at once: multilayer boards, advanced CAD software, manufacturing specs. That’s great later, but not on day one. Beginners need small, confidence-building projects.
                        </p>

                        <h4 class="mt-4 mb-4">Our Approach: Two Kits, Two Paths</h4>
                        <ul>
                            <li><h5>Junior PCB Toolkit</h5>
                                <p>Designed for absolute beginners. It includes all the essentials plus starter components. With it, you can try projects like blinking LEDs, a light-sensing lamp, or a mini buzzer alarm. Perfect for students, hobbyists, and first-time makers.</p>
                            </li> <br>
                            <li><h5>Senior PCB Toolkit</h5>
                                <p>Built for learners who want to take the next step, more advanced tools and components, suited for prototyping and serious DIY projects. Great for people who already know the basics and are ready to experiment further.</p>
                            </li>
                        </ul>

                        <h4 class="blog-details__title-2">How This Keeps You From Feeling Overwhelmed</h4>
                        <ul>
                            <li>No hunting for missing tools.</li>
                            <li>No guessing what to buy.</li>
                            <li>No jumping into the deep end before you can swim.</li>
                        </ul>
                        <p>You start with simple projects, build confidence, and then expand into more complex designs when you’re ready.</p>

                        <div class="blog-details__points-box mt-5 mb-3">
                            <h4 class="blog-details__points-title">Final Thoughts</h4>
                            <p>Learning PCB design doesn’t have to feel like climbing a mountain. <strong>With the right starter pack</strong>, you can take it one step at a time and actually enjoy the process. <br><br>That’s why our <strong>Junior and Senior PCB Toolkits</strong> exist, to give you the freedom to focus on creating, not stressing about what you’re missing.
                            </p>

                            <p class="mt-3">
                                Ready to begin your PCB journey without the overwhelm? <br>
                                Check out our [Junior Toolkit] or [Senior Toolkit] today and start building your first project with confidence.
                            </p>
                        </div>
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
                        <p class="sidebar__search-text">Search blogs to discover a vast world of online content
                            on countless topics.</p>
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