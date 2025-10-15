@extends('layouts.layout2')
@php
$title = 'Home';
$subtitle = 'Home Grid';
@endphp
@section('title', 'Home | MyFirstPCB')
@section('content')

<x-strickyHeader />

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-flex">
        <div class="hero-left">
            <h1>Robotics: <span class="highlight">Future Skill</span><br>Every Child Needs</h1>
            <p>
                Give your child the edge with PCB education — tailored to upskill electronics knowledge for both school
                and college curriculums.
            </p>
            <div class="hero-actions">
                <a href="/courses" class="btn-primary">Get Started</a>
                <span class="student-count">2000+ Success Student</span>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-img-grid">
                <img src="assets/images/hero-pcb1.jpg" alt="PCB Child Project" class="hero-img-1">
                <img src="assets/images/hero-pcb2.jpg" alt="PCB Assembly" class="hero-img-2">
                <img src="assets/images/hero-pcb3.jpg" alt="PCB Soldering" class="hero-img-3">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="container why-flex">
        <div class="why-left">
            <h2>Discover Why Our Students and Clients <span class="choose-us-highlight">Choose Us</span></h2>
            <ul>
                <li>
                    <span class="icon-graduation"></span>
                    <b>Hands-On Course Creation</b>
                    <ul>
                        <li>Easy Joining and accessible</li>
                        <li>Smooth learning experience</li>
                    </ul>
                </li>
                <li>
                    <span class="icon-collaborate"></span>
                    Collaborative Learning
                </li>
            </ul>
        </div>
        <div class="why-right">
            <div class="team-card">
                <img src="assets/images/team-member.jpg" alt="Indian Team" class="team-img" />
                <div class="team-info">
                    <h4>Indian Team</h4>
                    <p>Training Team</p>
                </div>
            </div>
            <div class="trusted-by">
                <span class="platform-badge">Udemy</span>
                <span>Sumi P / ★★★★★</span>
            </div>
            <img src="assets/images/pcb-detail.jpg" alt="PCB" class="pcb-img">
        </div>
    </div>
</section>

<!-- Courses Overview Section -->
<section class="courses-overview">
    <div class="container">
        <h2>Explore Our Comprehensive Course <span class="course-offerings-highlight">Offerings</span></h2>
        <div class="course-category-filters">
            <button>All Categories</button>
            <button>Design</button>
            <button>Programming</button>
            <button>Marketing</button>
        </div>
        <div class="course-cards-grid">
            <div class="course-card">
                <img src="assets/images/pcb-course-1.jpg" alt="PCB Design">
                <h3>Printed Circuit Board Design: From Concept to Production (3 day course)</h3>
            </div>
            <div class="course-card">
                <img src="assets/images/pcb-course-2.jpg" alt="Practical PCB">
                <h3>Practical PCB Design: A 1-Month Journey</h3>
            </div>
            <div class="course-card">
                <img src="assets/images/pcb-course-3.jpg" alt="Advanced PCB">
                <h3>Mastering Advanced PCB Design and Analysis</h3>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="newsletter-section">
    <div class="container newsletter-flex">
        <div class="newsletter-img">
            <img src="assets/images/newsletter.jpg" alt="Newsletter PCB">
        </div>
        <div class="newsletter-content">
            <h3>Subscribe our <span>Newsletter</span></h3>
            <p>Explore a diverse selection of courses all in one platform, designed to cater to various learning.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter Your Email..." required>
                <button type="submit">Subscribe <span class="icon-arrow-circle"></span></button>
            </form>
        </div>
    </div>
</section>

<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection