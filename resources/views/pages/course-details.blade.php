@extends('layouts.layout4')
@php
    $title = 'Course Details';
    $subtitle = 'Course Details';
@endphp
@section('title', 'Course Details | MyFirstPCB')
@section('meta_description', 'Explore detailed course information at MyfirstPCB. Learn PCB design, manufacturing techniques, and electronics project development with expert-led tutorials and hands-on guidance.')
@section('meta_keywords', 'PCB course, electronics course, PCB design tutorial, electronics project, PCB manufacturing, MyfirstPCB courses, learn PCB design')
@section('content')

<x-strickyHeader/>

<style>
    .comment-form__ratting .icon-star {
    cursor: pointer;
    color: #ddd;
    transition: color 0.3s;
}

.comment-form__ratting .icon-star.active,
.comment-form__ratting .icon-star.hover {
    color: #ffc107;
}

.reviews-list .review-rating .icon-star.active {
    color: #ffc107;
}

.reviews-list .review-rating .icon-star {
    color: #ddd;
}

@media (max-width: 768px) {
    .comment-one__single {
        flex-direction: row !important;
        gap: 10px !important;
        align-items: start !important;
    }
    .comment-one__image-box {
        width: 40px !important;
        height: 40px !important;
    }
    .initials-image{
        width: 30px;
        height: 30px;
    }
}
</style>


<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <!--Course Details Start-->
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="course-details__left">
                        <div class="course-details__img">
                            <img src="{{ Storage::url($course->image_url) }}" alt="">
                        </div>
                        <div class="course-details__content">
                            <h3 class="course-details__title">{{ $course->title }}</h3>
                            <div class="course-details__client-and-ratting-box d-flex justify-content-between">
                                <div class="course-details__client-box">
                                    <div class="course-details__client-img">
                                        <img src="{{ asset('assets/images/resources/tutor-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="course-details__client-content">
                                        <p><span class="odometer" data-count="20">{{ $course->instructor_exp }}</span>+
                                            Years Experiance</p>
                                        <h4>{{ $course->instructor_name }}</h4>
                                    </div>
                                </div>
                                <div class="course-details__ratting-box-1">
                                    @php $stars = (int) round($course->rating_value ?? 0); @endphp
                                    <ul class="course-details__ratting list-unstyled" style="display:flex; gap:4px;">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li>
                                                <span class="icon-star" style="color: {{ $i <= $stars ? '#ffc107' : '#ddd' }};"></span>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <div class="course-details__main-tab-box tabs-box">
                                <ul class="tab-buttons list-unstyled">
                                    <li data-tab="#overview" class="tab-btn tab-btn-one">
                                        <p><span class="icon-pen-ruler"></span>Overview</p>
                                    </li>
                                    <li data-tab="#curriculum" class="tab-btn tab-btn-two">
                                        <p><span class="icon-book"></span>Curriculum</p>
                                    </li>
                                    <li data-tab="#instructor" class="tab-btn tab-btn-three">
                                        <p><span class="icon-graduation-cap"></span>Instructor</p>
                                    </li>
                                    <li data-tab="#review" class="tab-btn active-btn  tab-btn-four">
                                        <p><span class="icon-comments"></span>Review</p>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div class="tab" id="overview">
                                        <div class="course-details__tab-inner">
                                            <div class="course-details__overview">
                                                <h3 class="course-details__overview-title">Course Overview</h3>
                                                <p class="course-details__overview-text-1">PCB Design and Fabrications is a hands-on course designed to equip students with the core skills required to design, develop and fabricate Printed Circuit Boards (PCBs) using modern tools like KiCAD 9 and Saturn PCB Toolkit.</p>
                                                <p class="course-details__overview-text-2">From understanding schematics to generating Gerber files and assembling real hardware, this course provides practical, step-by-step experience and prepares you for professional excellence in electronics and embedded system design.</p>
                                                <h3 class="course-details__overview-title-2">What You Will Learn?</h3>
                                                <ul class="course-details__overview-points list-unstyled">
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>PCB Design Foundations:</h5>
                                                            <p>Grasp the fundamentals, history, and process of PCB design using modern tools.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>KiCAD Mastery:</h5>
                                                            <p>Learn to set up, navigate, and create complete schematics and layouts in KiCAD 9.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>Design to Fabrication:</h5>
                                                            <p>Understand netlists, routing, Gerber generation, and the full PCB manufacturing workflow.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>Practical Projects:</h5>
                                                            <p>Build and test real circuits, gaining hands-on experience from design to assembly.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h3 class="course-details__overview-title-3">Requirement?</h3>
                                                <p class="course-details__overview-text-3">No prior PCB design experience is needed. This course starts with the basics and guides you through fabrication and assembly.</p>
                                                <div class="course-details__points-box">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <ul class="course-details__points-list-2 list-unstyled">
                                                                <li>
                                                                    <div class="course-details__points-list-icon">
                                                                        <img src="{{ asset('assets/images/icon/course-details-points-list-icon-1.png') }}" alt="">
                                                                    </div>
                                                                    <h3 class="course-details__points-list-title">Computer with KiCAD Installed</h3>
                                                                    <p class="course-details__points-list-text">You’ll need a computer (Windows, macOS, or Linux) with KiCAD 9 installed.</p>
                                                                </li>
                                                                <li>
                                                                    <div class="course-details__points-list-icon">
                                                                        <img src="{{ asset('assets/images/icon/course-details-points-list-icon-2.png') }}" alt="">
                                                                    </div>
                                                                    <h3 class="course-details__points-list-title">Basic Electronics Knowledge (Recommended)</h3>
                                                                    <p class="course-details__points-list-text">Familiarity with electronic components and circuits is helpful but not mandatory.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <ul class="course-details__points-list-2 list-unstyled">
                                                                <li>
                                                                    <div class="course-details__points-list-icon">
                                                                        <img src="{{ asset('assets/images/icon/course-details-points-list-icon-3.png') }}" alt="">
                                                                    </div>
                                                                    <h3 class="course-details__points-list-title">Hardware Kit Provided</h3>
                                                                    <p class="course-details__points-list-text">Includes IC 555, resistors, capacitors, LEDs, connectors, and a copper-clad sheet — free of cost.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="tab" id="curriculum">
                                        <div class="course-details__tab-inner">
                                            <div class="course-details__curriculam">
                                                <h3 class="course-details__curriculam-title">Course Curriculum</h3>
                                                <p class="course-details__curriculam-text">A structured, session-wise journey from PCB design fundamentals to fabrication and assembly. Includes lessons, guided hands-on tasks, and deliverables.</p>
                                                <div class="course-details__curriculam-faq">
                                                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                                        <div class="accrodion">
                                                            <div class="accrodion-title">
                                                                <div class="accrodion-title-box">
                                                                    <div class="accrodion-title__count"></div>
                                                                    <div class="accrodion-title-text">
                                                                        <h4>Introduction to PCB Design</h4>
                                                                    </div>
                                                                </div>
                                                                <ul class="accrodion-meta list-unstyled">
                                                                    <li>
                                                                        <p><span class="icon-book"></span>7 Lesson
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p><span class="icon-clock"></span>1h 10min</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="accrodion-content">
                                                                <div class="inner">
                                                                    <h3 class="accrodion-content__title">Overview</h3>
                                                                    <p class="accrodion-content__text">History of PCB design, the design process, components, packages, and an introduction to KiCAD 9.</p>
                                                                    <ul
                                                                        class="accrodion-content__points list-unstyled">
                                                                        <li>
                                                                            <p
                                                                                class="accrodion-content__points-text">
                                                                                <span class="fal fa-video"></span>History of PCB Design</p>
                                                                            <div
                                                                                class="accrodion-content__points-btn">
                                                                                <a href="#">Preview</a>
                                                                            </div>
                                                                            <div class="accrodion-content__icon">
                                                                                <span
                                                                                    class="far fa-lock-alt"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <p
                                                                                class="accrodion-content__points-text">
                                                                                <span class="fal fa-video"></span>Overview of PCB design process</p>
                                                                            <div
                                                                                class="accrodion-content__points-btn">
                                                                                <a href="#">Preview</a>
                                                                            </div>
                                                                            <div class="accrodion-content__icon">
                                                                                <span
                                                                                    class="far fa-lock-alt"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <p
                                                                                class="accrodion-content__points-text">
                                                                                <span
                                                                                    class="far fa-microphone"></span>Understanding
                                                                                Variables and Data Types</p>
                                                                            <div class="accrodion-content__icon">
                                                                                <span
                                                                                    class="far fa-lock-alt"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <p
                                                                                class="accrodion-content__points-text">
                                                                                <span
                                                                                    class="far fa-microphone"></span>Tuples:
                                                                                Understanding Immutability and Use
                                                                                Cases</p>
                                                                            <div class="accrodion-content__icon">
                                                                                <span
                                                                                    class="far fa-lock-alt"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <p
                                                                                class="accrodion-content__points-text">
                                                                                <span
                                                                                    class="fal fa-file-alt"></span>
                                                                                Nested Loops and Loop Control
                                                                                Statements (break, continue, pass)
                                                                            </p>
                                                                            <div class="accrodion-content__icon">
                                                                                <span
                                                                                    class="far fa-lock-alt"></span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.inner -->
                                                            </div>
                                                        </div>
                                                        <div class="accrodion active">
                                                            <div class="accrodion-title">
                                                                <div class="accrodion-title-box">
                                                                    <div class="accrodion-title__count"></div>
                                                                    <div class="accrodion-title-text">
                                                                        <h4>Schematic Design</h4>
                                                                    </div>
                                                                </div>
                                                                <ul class="accrodion-meta list-unstyled">
                                                                    <li>
                                                                        <p><span class="icon-book"></span>11 Lesson</p>
                                                                    </li>
                                                                    <li>
                                                                        <p><span class="icon-clock"></span>5h 30min</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="accrodion-content">
                                                                <div class="inner">
                                                                    <h3 class="accrodion-content__title">Overview</h3>
                                                                    <p class="accrodion-content__text">Create schematics, understand symbols, use power labels, and complete a sample astable multivibrator circuit.</p>
                                                                    <ul class="accrodion-content__points list-unstyled">
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Creating a new project</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Understanding Schematic Symbols</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Placing & Connecting components</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Using power symbols & global labels</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-file"></span>Hierarchical schematics (sub sheets)</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Components Selection & Shortcuts</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>ERC (Electrical Rule Check)</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Annotating components</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-file"></span>Sample Circuit Design – Astable Multivibrator</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-headphones"></span>Hands-on: Completing a schematic</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-file"></span>ERC Check</p></li>
                                                                    </ul>
                                                                </div><!-- /.inner -->
                                                            </div>
                                                        </div>
                                                        <div class="accrodion">
                                                            <div class="accrodion-title">
                                                                <div class="accrodion-title-box">
                                                                    <div class="accrodion-title__count"></div>
                                                                    <div class="accrodion-title-text">
                                                                        <h4>PCB layout</h4>
                                                                    </div>
                                                                </div>
                                                                <ul class="accrodion-meta list-unstyled">
                                                                    <li><p><span class="icon-book"></span>8 Lesson</p></li>
                                                                    <li><p><span class="icon-clock"></span>2h 50min</p></li>
                                                                </ul>
                                                            </div>
                                                            <div class="accrodion-content">
                                                                <div class="inner">
                                                                    <h3 class="accrodion-content__title">Overview</h3>
                                                                    <p class="accrodion-content__text">Move to PCB editor, place components, route, apply rules, pours and DRC. Create custom footprints.</p>
                                                                    <ul class="accrodion-content__points list-unstyled">
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Importing net list into PCB editor</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Understanding layers</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Board outline set-up & constraints</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Placing components</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-file"></span>Routing & Design Rules</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Using Vias & Copper pours</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-file"></span>Design Rule Check</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-file"></span>PCB Library Design</p></li>
                                                                    </ul>
                                                                </div><!-- /.inner -->
                                                            </div>
                                                        </div>
                                                        <div class="accrodion">
                                                            <div class="accrodion-title">
                                                                <div class="accrodion-title-box">
                                                                    <div class="accrodion-title__count"></div>
                                                                    <div class="accrodion-title-text">
                                                                        <h4>Gerber files Generation</h4>
                                                                    </div>
                                                                </div>
                                                                <ul class="accrodion-meta list-unstyled">
                                                                    <li><p><span class="icon-book"></span>4 Lesson</p></li>
                                                                    <li><p><span class="icon-clock"></span>2h 50min</p></li>
                                                                </ul>
                                                            </div>
                                                            <div class="accrodion-content">
                                                                <div class="inner">
                                                                    <h3 class="accrodion-content__title">Overview</h3>
                                                                    <p class="accrodion-content__text">Generate Gerber and drill files, export 3D models, and prepare a complete fabrication package.</p>
                                                                    <ul class="accrodion-content__points list-unstyled">
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-headphones"></span>Gerber files & Drill files Generation</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-headphones"></span>3D model export & visualization</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-headphones"></span>Preparing files for fabrication</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="far fa-headphones"></span>Fabrication Process</p></li>
                                                                    </ul>
                                                                </div><!-- /.inner -->
                                                                            </div>
                                                                            </div>
                                                        <div class="accrodion">
                                                            <div class="accrodion-title">
                                                                <div class="accrodion-title-box">
                                                                    <div class="accrodion-title__count"></div>
                                                                    <div class="accrodion-title-text">
                                                                        <h4>PCB Fabrication & Assembly</h4>
                                                                            </div>
                                                                            </div>
                                                                <ul class="accrodion-meta list-unstyled">
                                                                    <li><p><span class="icon-book"></span>3 Lesson</p></li>
                                                                    <li><p><span class="icon-clock"></span>3h 00min</p></li>
                                                                </ul>
                                                                            </div>
                                                            <div class="accrodion-content">
                                                                <div class="inner">
                                                                    <h3 class="accrodion-content__title">Overview</h3>
                                                                    <p class="accrodion-content__text">Experience the complete PCB manufacturing process, practice soldering and test/debug assembled boards.</p>
                                                                    <ul class="accrodion-content__points list-unstyled">
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Hands-on: PCB manufacturing process</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Testing & debugging PCBs - Review</p></li>
                                                                        <li><p class="accrodion-content__points-text"><span class="fal fa-video"></span>Soldering techniques (SMD & through-hole)</p></li>
                                                                    </ul>
                                                                </div><!-- /.inner -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="tab" id="instructor">
                                        <div class="course-details__tab-inner">
                                            <div class="course-details__Instructor">
                                                <div class="course-details__Instructor-img">
                                                    <img src="{{ asset('assets/images/resources/tutor-img-2.jpg') }}" alt="tutor-img">
                                                </div>
                                                <div class="course-details__Instructor-content">
                                                    <div
                                                        class="course-details__Instructor-client-name-box-and-view">
                                                        <div class="course-details__Instructor-client-name-box">
                                                            <h4>{{ $course-> instructor_name }}</h4>
                                                            <p>Sensor-based R&D | Edge device architecture | PCB design</p>
                                                        </div>
                                                        <!-- <div class="course-details__Instructor-view">
                                                            <a href="#">View Details<span
                                                                    class="icon-angles-right"></span></a>
                                                        </div> -->
                                                    </div>
                                                    <!-- <ul
                                                        class="course-details__Instructor-ratting-list list-unstyled">
                                                        <li>
                                                            <p><span class="fas fa-star"></span>(5.0 / 4.2 Rating)
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p><span class="fas fa-play-circle"></span>76 Courses
                                                            </p>
                                                        </li>
                                                    </ul> -->
                                                    <p class="course-details__Instructor-text">{{ $course->instructor_name }} With over 20+ years of experience, excelling in sensor-based R&D, edge device architecture, and PCB design. <br />
                                                         Strong background in IoT automation, technical management of embedded systems, and demonstrates expertise in multi-bit microcontrollers.</p>
                                                    <div class="course-details__Instructor-social">
                                                        <a href="https://www.linkedin.com/in/sreekumar-narayan/" target="_blank" rel="noopener">
                                                            <span class="fab fa-linkedin-in"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="tab active-tab" id="review">
                                        <div class="course-details__tab-inner">
                                            <div class="course-details__ratting-and-review-box">
                                                <ul class="course-details__ratting-box list-unstyled">
                                                    <li>
                                                        <div class="course-details__ratting-list">
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                        </div>
                                                        <div class="progress-levels">
                                                            <!--Skill Box-->
                                                            <div class="progress-box">
                                                                <div class="inner count-box">
                                                                    <div class="bar">
                                                                        <div class="bar-innner">
                                                                            <div class="skill-percent">
                                                                                <span class="count-text"
                                                                                    data-speed="3000"
                                                                                    data-stop="90">0</span>
                                                                                <span class="percent">%</span>
                                                                            </div>
                                                                            <div class="bar-fill" data-percent="90">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__ratting-list">
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                        </div>
                                                        <div class="progress-levels">
                                                            <!--Skill Box-->
                                                            <div class="progress-box">
                                                                <div class="inner count-box">
                                                                    <div class="bar">
                                                                        <div class="bar-innner">
                                                                            <div class="skill-percent">
                                                                                <span class="count-text"
                                                                                    data-speed="3000"
                                                                                    data-stop="70">0</span>
                                                                                <span class="percent">%</span>
                                                                            </div>
                                                                            <div class="bar-fill" data-percent="70">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__ratting-list">
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                        </div>
                                                        <div class="progress-levels">
                                                            <!--Skill Box-->
                                                            <div class="progress-box">
                                                                <div class="inner count-box">
                                                                    <div class="bar">
                                                                        <div class="bar-innner">
                                                                            <div class="skill-percent">
                                                                                <span class="count-text"
                                                                                    data-speed="3000"
                                                                                    data-stop="60">0</span>
                                                                                <span class="percent">%</span>
                                                                            </div>
                                                                            <div class="bar-fill" data-percent="60">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__ratting-list">
                                                            <span class="icon-star"></span>
                                                            <span class="icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                        </div>
                                                        <div class="progress-levels">
                                                            <!--Skill Box-->
                                                            <div class="progress-box">
                                                                <div class="inner count-box">
                                                                    <div class="bar">
                                                                        <div class="bar-innner">
                                                                            <div class="skill-percent">
                                                                                <span class="count-text"
                                                                                    data-speed="3000"
                                                                                    data-stop="40">0</span>
                                                                                <span class="percent">%</span>
                                                                            </div>
                                                                            <div class="bar-fill" data-percent="40">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__ratting-list">
                                                            <span class="icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                            <span class="fill-white icon-star"></span>
                                                        </div>
                                                        <div class="progress-levels">
                                                            <!--Skill Box-->
                                                            <div class="progress-box">
                                                                <div class="inner count-box">
                                                                    <div class="bar">
                                                                        <div class="bar-innner">
                                                                            <div class="skill-percent">
                                                                                <span class="count-text"
                                                                                    data-speed="3000"
                                                                                    data-stop="30">0</span>
                                                                                <span class="percent">%</span>
                                                                            </div>
                                                                            <div class="bar-fill" data-percent="30">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="course-details__review-box">
                                                    <div class="course-details__review-count">
                                                        <span class="odometer" data-count="{{ $course->rating_value }}">00</span>
                                                    </div>
                                                    <div class="course-details__review-content">
                                                        <ul class="course-details__review-ratting list-unstyled">
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-star"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="course-details__review-text">
                                                            <p><span class="icon-star"></span>Excellent</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-one">
                                                <h3 class="comment-one__title">Course Reviews</h3>
                                                <ul class="comment-one__single-list list-unstyled">
                                                    @forelse($reviews as $review)
                                                    <li>
                                                        <div class="comment-one__single">
                                                            <div class="comment-one__image-box">
                                                                 <div class="initials-image comment-one__image" style="width: 50px; height: 50px; border-radius: 50%; background-color: #ccc; display: flex; align-items: center; justify-content: center; font-size: 24px; color: white;">
                                                                    {{ strtoupper(substr($review->name, 0, 1)) }}
                                                                    </div>
                                                                <!-- <div class="">
                                                                    <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                                                </div> -->
                                                            </div>
                                                            <div class="comment-one__content">
                                                                <div class="comment-one__name-box">
                                                                    <h4>{{ $review->name }}</span>
                                                                    </h4>
                                                                </div>
                                                                <p class="ps-3">{{ $review->message }}</p>
                                                                <div class="comment-one__btn-box d-flex justify-content-end">
                                                                    <span>{{ \Carbon\Carbon::parse($review->updated_at)->format('d F, Y') }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @empty
                                                        <p>No reviews yet. Be the first to review this course!</p>
                                                    @endforelse
                                                    <!-- <li>
                                                        <div class="comment-one__single">
                                                            <div class="comment-one__image-box">
                                                                <div class="comment-one__image">
                                                                    <img src="{{ asset('assets/images/blog/comment-1-2.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="comment-one__content">
                                                                <div class="comment-one__name-box">
                                                                    <h4>Jordan Walk <span>By Author</span></h4>
                                                                </div>
                                                                <p>Absolutely! It’s amazing how online learning
                                                                    adapts to our lives,
                                                                    isn’t it? Being able to balance work, family,
                                                                    and education is
                                                                    such a huge advantage. Glad it’s working so well
                                                                    for you!</p>
                                                                <div class="comment-one__btn-box">
                                                                    <a href={{ url('blog-details') }}
                                                                        class="comment-one__btn">Reply</a>
                                                                    <span>18 July, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                                <!-- <ul
                                                    class="comment-one__single-list comment-one__single-list-2 list-unstyled">
                                                    <li>
                                                        <div class="comment-one__single">
                                                            <div class="comment-one__image-box">
                                                                <div class="comment-one__image">
                                                                    <img src="{{ asset('assets/images/blog/comment-1-3.jpg') }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="comment-one__content">
                                                                <div class="comment-one__name-box">
                                                                    <h4>Lisa Oliva <span>Fashion Designer</span>
                                                                    </h4>
                                                                </div>
                                                                <p>This article really resonates with me! As a
                                                                    working parent,
                                                                    online learning has been a game-changer. I’m
                                                                    able to continue my
                                                                    education without sacrificing family time. I
                                                                    genuinely believe
                                                                    that this is the future of education.</p>
                                                                <div class="comment-one__btn-box">
                                                                    <a href={{ url('blog-details') }}
                                                                        class="comment-one__btn">Reply</a>
                                                                    <span>18 July, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                            </div>
                                            <div class="comment-form">
                                                <h3 class="comment-form__title">Submit Your Reviews</h3>
                                                <div class="comment-form__text-and-ratting">
                                                    <p class="comment-form__text">Your Ratings </p>
                                                    <ul class="comment-form__ratting list-unstyled" id="star-rating">
                                                        <li><span class="icon-star active" data-rating="1"></span></li>
                                                        <li><span class="icon-star" data-rating="2"></span></li>
                                                        <li><span class="icon-star" data-rating="3"></span></li>
                                                        <li><span class="icon-star" data-rating="4"></span></li>
                                                        <li><span class="icon-star" data-rating="5"></span></li>
                                                    </ul>
                                                </div>
                                                <form id="review-form" action="{{ route('reviews.store', $course->id ?? 1) }}" method="POST"
                                                    class="comment-form__form contact-form-validated"
                                                    novalidate="novalidate">
                                                    @csrf
                                                    <input type="hidden" name="course_id" value="{{ $course->id ?? 1  }}">
                                                    <input type="hidden" name="rating" id="selected-rating" value="5">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="comment-form__input-box">
                                                                <input type="text" value="{{ Auth::user()->name ?? ''}}"
                                                                    name="name" placeholder="Your Name" required>
                                                            </div>
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <div class="comment-form__input-box">
                                                                <input type="email" value="{{ Auth::user()->email ?? ''}}"
                                                                    name="email" placeholder="Your Email" required>
                                                            </div>
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="comment-form__input-box text-message-box">
                                                                <textarea name="message"
                                                                    placeholder="Write Review" required></textarea>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="comment-form__btn-box">
                                                                <button type="submit"
                                                                    class="comment-form__btn" id="review-submit-btn">
                                                                    <span class="icon-arrow-circle"></span>
                                                                    <span id="submit-text">Submit Review</span>
                                                                    <span id="loading-text" style="display:none;">Submitting..</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="result" id="review-result"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="course-details__right">
                        <div class="course-details__info-box">
                            <div class="course-details__video-link" style="position:relative; overflow:hidden; border-radius:20px;">
                                <video id="coursePreviewVideo" width="100%" height="auto" preload="metadata" poster="{{ asset('assets/images/resources/MyfirstPCB.png') }}" style="display:block;" controls playsinline controlsList="nodownload">
                                    <source src="{{ asset('assets/videos/myfirstpcb-preview_2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <button type="button" id="coursePreviewPlayBtn" aria-label="Play preview" style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);border:none;background:transparent;cursor:pointer;">
                                    <div class="course-details__video-icon">
                                        <span class="icon-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </button>
                            </div>

                            <div class="course-details__doller-and-btn-box d-flex justify-content-between">
                                <div class="course-details__doller-btn-box">
                                    <a class="thm-btn-two" onclick="enrollInCourse(this)">
                                        <span>Enroll Now</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="course-details__social-box">
                                <h5 class="course-details__social-title">Share Course</h5>
                                <div class="course-details__social-list">
                                    @php
                                        $shareUrl = urlencode(request()->fullUrl());
                                        $shareTitle = urlencode($course->title);
                                        $shareImage = urlencode(Storage::url($course->image_url));
                                    @endphp
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener"><span class="fab fa-linkedin-in"></span></a>
                                    <a href="https://pinterest.com/pin/create/button/?url={{ $shareUrl }}&media={{ $shareImage }}&description={{ $shareTitle }}" target="_blank" rel="noopener"><span class="fab fa-pinterest-p"></span></a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener"><span class="fab fa-facebook-f"></span></a>
                                    <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener"><span class="fab fa-whatsapp"></span></a>
                                </div>
                            </div>

                            <div class="course-details__info-list">
                                <h3 class="course-details__info-list-title">This Course Includes</h3>
                                <ul class="course-details__info-list-1 list-unstyled">
                                    <li>
                                        <p><i class="icon-clock"></i>Duration</p>
                                        <span>10h 30min</span>
                                    </li>
                                    <li>
                                        <p><i class="icon-chart-simple"></i>Skill Level</p>
                                        <span>Entry Level</span>
                                    </li>
                                    <li>
                                        <p><i class="icon-globe"></i>Language</p>
                                        <span>English</span>
                                    </li>
                                    <!-- <li>
                                        <p><i class="icon-stamp"></i>Certificate</p>
                                        <span>After Completed</span>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- <div class="course-details__cuppon-box">
                                <h5 class="course-details__cuppon-title">Apply Coupon</h5>
                                <form action="#" class="course-details__search-form">
                                    <input type="text" placeholder="Enter Coupon Code">
                                    <button type="submit">Apply</button>
                                </form>
                                <p class="course-details__cuppon-text">30 days Money back grantee</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Course Details End-->

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Tab switching: supports data-tab or data-bs-tab attributes
    const tabButtons = document.querySelectorAll('.tab-buttons .tab-btn');
    const tabs = document.querySelectorAll('.tabs-content .tab');
    if (!tabButtons.length || !tabs.length) return;

    // Normalize attributes (data-bs-tab -> data-tab)
    tabButtons.forEach(btn => {
        if (!btn.hasAttribute('data-tab') && btn.hasAttribute('data-bs-tab')) {
            btn.setAttribute('data-tab', btn.getAttribute('data-bs-tab'));
        }
    });

    function activateButton(btn) {
        tabButtons.forEach(b => b.classList.remove('active-btn'));
        btn.classList.add('active-btn');
    }

    function activateTab(selector) {
        tabs.forEach(t => t.classList.remove('active-tab'));
        const target = document.querySelector(selector);
        if (target) target.classList.add('active-tab');
    }

    // Ensure an initial active button/tab
    const initialBtn = document.querySelector('.tab-buttons .tab-btn.active-btn') || tabButtons[0];
    if (initialBtn) {
        activateButton(initialBtn);
        const sel = initialBtn.getAttribute('data-tab') || '#overview';
        activateTab(sel);
    }

    // Click handlers
    tabButtons.forEach(btn => {
        btn.style.cursor = 'pointer';
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const selector = btn.getAttribute('data-tab') || btn.getAttribute('href');
            if (!selector) return;
            activateButton(btn);
            activateTab(selector);
        });
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var video = document.getElementById('coursePreviewVideo');
        var playBtn = document.getElementById('coursePreviewPlayBtn');
        if (!video || !playBtn) return;

        function hideButton() { playBtn.style.display = 'none'; }
        function showButton() { playBtn.style.display = ''; }

        playBtn.addEventListener('click', function () {
            // If already playing, pause; otherwise play
            if (video.paused) {
                video.play();
                hideButton();
            } else {
                video.pause();
                showButton();
            }
        });

        video.addEventListener('play', hideButton);
        video.addEventListener('pause', showButton);
        video.addEventListener('ended', showButton);
    });
 </script>

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
                                <a href="#">+91 85908 70849</a>
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


    <script>
 

        function enrollInCourse(button){

            const isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};

            if (!isAuthenticated) {
                toastr.error("Login first");
                return;
            }

            const courseName = "{{ $course->title }}"
            const course_id = "{{ $course->id }}";
            const user_id = "{{ Auth::id() ?? '' }}";
            const whatsappNumber = '8590870849';
            const name = "{{ Auth::user()->name ?? '' }}";
            const email = "{{ Auth::user()->email ?? '' }}";


            const formData = {
                course_id: course_id,
                user_id: user_id,
                name: name,
                email:email,
            }


            fetch('{{ route("enrollment.initiate") }}', {
                method: 'POST',
                body: JSON.stringify(formData),
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success){

                    toastr.success("Your enrollment inquiry has been recorded! Opening WhatsApp...", {
                        timeOut: 3000,
                    });

                    setTimeout(function() {
                        window.open(data.whatsapp_url, '_blank');
                    }, 3000);
                    
                } else {
                    toastr.error(data.message || 'Failed to initiate enrollment. Please try again.', 'Error!');
                }
            })
            .catch(error => {
                console.error('Error initiating enrollment:', error);
            });
        }

        // Review form handling
        document.addEventListener('DOMContentLoaded', function () {
            
            const form = document.getElementById('review-form');
            const starts = document.querySelectorAll('#star-rating .icon-star');
            const ratingInput = document.getElementById('selected-rating');
            const submitBtn = document.getElementById('review-submit-btn');
            const submitText = document.getElementById('submit-text');
            const loadingText = document.getElementById('loading-text');
            const courseId = document.querySelector('input[name="course_id"]').value;

            // start rating function
            starts.forEach(start => {
                start.addEventListener('click', function () {
                    const rating = this.getAttribute('data-rating');
                    ratingInput.value = rating;

                    //update vistual state
                    starts.forEach((s, index) => {
                        if (index < rating) {
                            s.classList.add('active');
                        } else {
                            s.classList.remove('active');
                        }
                    });
                });
            });

            // Form submission
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};

                if (!isAuthenticated) {
                    toastr.error("Login first");
                    return;
                }

                clearErrors();

                // loadin states
                submitBtn.disabled = true;
                submitText.style.display = 'none';
                loadingText.style.display = 'inline-block';

                const formData = {
                    name: form.name.value,
                    email: form.email.value,
                    message: form.message.value,
                    rating: ratingInput.value,
                    course_id: courseId,
                };

                console.log("Form Data:", formData);

                fetch(form.action, {
                    method: 'POST',
                    body: JSON.stringify(formData),
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Review response:", data);

                    if(data.success){
                        toastr.success(data.message, 'Success!');

                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    } else {
                        if (data.errors){
                            showValidationErrors(data.errors);
                        }
                        toastr.error(data.message || 'An error occurred. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error submitting review:', error);
                    toastr.error('Something went wrong. Please try again.');
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitText.style.display = 'inline-block';
                    loadingText.style.display = 'none';
                });
            });

            function showValidationErrors(errors){
                Object.keys(errors).forEach(key => {
                    const input = form.querySelector(`[name="${key}"]`);
                    if (input) {
                        input.classList.add('is-invalid');
                        const feedback = input.parentElement.querySelector('.invalid-feedback');
                        if (feedback) {
                            feedback.textContent = errors[key][0];
                        }
                    }
                });
            }


            function clearErrors() {
                const errorElements = document.querySelectorAll('.invalid-feedback');
                errorElements.forEach(el => el.textContent = "");

                const invalidInputs = document.querySelectorAll('.is-invalid');
                invalidInputs.forEach(input => input.classList.remove('is-invalid'));
            }
        });

    </script>

<x-footer2/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection