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
    /* Custom styles for course details page */
    .course-details__main-tab-box,
    .course-details__main-tab-box .tab-buttons,
    .course-details__main-tab-box .tabs-content,
    .course-details__main-tab-box .tab,
    .course-details__main-tab-box .tab.active-tab {
        border: none !important;
        box-shadow: none !important;
        background: transparent !important;
    }
    
    .course-details__main-tab-box .tab-buttons {
        border-bottom: none !important;
        padding: 0 !important;
        margin: 0 0 20px 0 !important;
    }
    
    .course-details__main-tab-box .tab-buttons li {
        border: none !important;
        margin: 0 15px 0 0 !important;
        padding: 0 !important;
    }
    
    .course-details__main-tab-box .tab-buttons li::after {
        display: none !important;
    }
    .course-details__main-tab-box .tabs-content {
        padding: 0 !important;
        margin: 0 !important;
    }
    
    .course-details__tab-inner {
        padding: 20px 0 0 0 !important;
    }
    
    .course-details__overview {
        padding: 0 !important;
        margin: 0 !important;
    }
    
    .course-details__overview-points li {
        margin-bottom: 15px !important;
    }
    
    .course-details__points-box {
        margin-top: 20px !important;
    }
    
    .tab-buttons {
        margin-bottom: 20px !important;
    }
    
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
.tabs-box .tab-buttons li:not([data-tab="#overview"]),
.tabs-box .tabs-content .tab:not(#overview) { display: none !important; }

#bookingModal { position: fixed; inset: 0; background: rgba(0,0,0,0.5); display: none; align-items: center; justify-content: center; z-index: 9999; }
#bookingModal.open { display: flex; }
#bookingModal .modal-card { background: #fff; width: 100%; max-width: 640px; border-radius: 16px; padding: 24px; }
#bookingModal .modal-header { display:flex; justify-content: space-between; align-items:center; margin-bottom: 12px; }
#bookingModal .close-btn { background: transparent; border: none; font-size: 22px; line-height: 1; cursor: pointer; }
#bookingModal .form-grid { display: grid; grid-template-columns: 1fr; gap: 12px; }
#bookingModal input, #bookingModal textarea { width: 100%; border: 1px solid #e5e7eb; border-radius: 8px; padding: 10px 12px; }
#bookingModal textarea { min-height: 100px; }
    /* Modal submit button cleanup */
    #bookingModal .thm-btn-two {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }
    #bookingModal .thm-btn-two:focus,
    #bookingModal .thm-btn-two:focus-visible,
    #bookingModal .thm-btn-two:active { outline: none !important; box-shadow: none !important; }
    /* Placeholder color */
    #bookingModal input::placeholder, #bookingModal textarea::placeholder { color: #9ca3af !important; opacity: 1; }
</style>

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
                            @php $displayTitle = $course->title; @endphp
                            @if ($displayTitle === 'PCB Kickstart Course: 3-Day')
                                <p class="course-details__subtitle">Design, Build & Test Your First Circuit — Free Kit Included</p>
                                <p class="course-details__subtitle-2">Get started with hands-on PCB design and circuit building. In just 3 days, you’ll bring your first electronic creation to life!</p>
                            @elseif ($displayTitle === 'PCB Maker Course: 1-Month')
                                <p class="course-details__subtitle">Learn & Build from Home — Free Kit Delivered to You</p>
                                <p class="course-details__subtitle-2">Design and test two real circuit boards in four guided sessions. Create, learn, and explore electronics with ease.</p>
                            @elseif ($displayTitle === 'Electronics Innovation Program: 1-Year')
                                <p class="course-details__subtitle">Master Real Projects — Monthly Kits & Live Mentorship</p>
                                <p class="course-details__subtitle-2">Build 10 working circuits, learn coding and robotics, and grow your engineering skills through monthly guided classes.</p>
                            @endif
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
                                <!-- <div class="course-details__ratting-box-1">
                                    @php $stars = (int) round($course->rating_value ?? 0); @endphp
                                    <ul class="course-details__ratting list-unstyled" style="display:flex; gap:4px;">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li>
                                                <span class="icon-star" style="color: {{ $i <= $stars ? '#ffc107' : '#ddd' }};"></span>
                                            </li>
                                        @endfor
                                    </ul>
                                </div> -->
                            </div>
                            <div class="course-details__main-tab-box tabs-box">
                                <!-- <ul class="tab-buttons list-unstyled mt-5">
                                    <li data-tab="#overview" class="tab-btn active-btn tab-btn-one">
                                        <p><span class="icon-pen-ruler"></span>Overview</p>
                                    </li>
                                </ul> -->
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="overview">
                                        <div class="course-details__tab-inner">
                                            <div class="course-details__overview">
                                                @php
                                                    $displayTitle = $course->title;
                                                @endphp
                                                
                                                @if($displayTitle === 'PCB Kickstart Course: 3-Day')
                                                    <h3 class="course-details__overview-title">Course Overview</h3>
                                                    <p class="course-details__overview-text-1">The 3-Day PCB Kickstart Course is a short, high-impact workshop designed for students aged 8–21 who want to build their first real electronic circuit. In three guided sessions, learners will understand basic circuit theory, design a simple schematic in KiCAD, and assemble the circuit on an OHB sheet using silver conductive ink.</p>
                                                    <p class="course-details__overview-text-2">The course focuses on confidence building — students actually make something that works. By the end of the workshop, they will have a working LED/touch/light-based circuit, understand component symbols, and know the steps from idea → schematic → layout → assembly.</p>
                                                    <h3 class="course-details__overview-title-2">What You Will Learn?</h3>
                                                    <ul class="course-details__overview-points list-unstyled">
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Circuit Foundations:</h5>
                                                                <p>Learn what voltage, current, and resistance are, and how to connect LEDs and resistors safely.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>KiCAD First Steps:</h5>
                                                                <p>Create a simple schematic and place components in KiCAD 9 to understand PCB workflows.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Hands-On Assembly:</h5>
                                                                <p>Print the layout on OHB using silver ink, place components, and test the circuit live.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Mini Project:</h5>
                                                                <p>Build one working circuit such as a light-activated LED, touch switch, or simple ON/OFF board.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <h3 class="course-details__overview-title-3">Requirements</h3>
                                                    <p class="course-details__overview-text-3">No PCB experience is required. This course is suitable for absolute beginners and school students.</p>
                                                    <div class="course-details__points-box">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <ul class="course-details__points-list-2 list-unstyled">
                                                                    <li>
                                                                        <div class="course-details__points-list-icon">
                                                                            <img src="{{ asset('assets/images/icon/course-details-points-list-icon-1.png') }}" alt="">
                                                                        </div>
                                                                        <h3 class="course-details__points-list-title">Computer with KiCAD Installed</h3>
                                                                        <p class="course-details__points-list-text">Windows / macOS / Linux with KiCAD 9 installed for schematic drawing.</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="course-details__points-list-icon">
                                                                            <img src="{{ asset('assets/images/icon/course-details-points-list-icon-2.png') }}" alt="">
                                                                        </div>
                                                                        <h3 class="course-details__points-list-title">Learning Time</h3>
                                                                        <p class="course-details__points-list-text">3 Days · 3 Sessions · 1 Hour Each (Total: 3 Hours)</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                             <div class="col-xl-6">
                                                            <ul class="course-details__points-list-2 list-unstyled">
                                                                <li>
                                                                    <div class="course-details__points-list-icon">
                                                                        <img src="{{ asset('assets/images/icon/course-details-points-list-icon-3.png') }}" alt="">
                                                                    </div>
                                                                    <h3 class="course-details__points-list-title">Starter Hardware Kit</h3>
                                                                    <p class="course-details__points-list-text">LEDs, resistors, a sensor/switch, and OHB sheet with silver ink — provided.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                         <h3 class="course-details__overview-title-2">Session Plan</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Day</th>
            <th>Topic</th>
            <th>Outcome</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Day 1</td>
            <td>Basics of Electronics + Symbols + Power</td>
            <td>Understands LED + resistor circuit</td>
            <td>1 Hour</td>
          </tr>
          <tr>
            <td>Day 2</td>
            <td>KiCAD Intro + Drawing the Circuit</td>
            <td>Has a simple schematic ready</td>
            <td>1 Hour</td>
          </tr>
          <tr>
            <td>Day 3</td>
            <td>Printing on OHB + Assembly + Testing</td>
            <td>Working light / touch circuit</td>
            <td>1 Hour</td>
          </tr>
        </tbody>
      </table>
                                                @elseif($displayTitle === 'PCB Maker Course: 1-Month')
                                                    <h3 class="course-details__overview-title">Course Overview</h3>
                                                    <p class="course-details__overview-text-1">The 1-Month PCB Maker Course is a weekend-based practical program where students build three smart circuits — typically an automatic light, a temperature-controlled fan, and a touch/motion-based circuit. It is ideal for learners who have finished the 3-Day workshop or students who want more hands-on sensor experience.</p>
                                                    <p class="course-details__overview-text-2">Each circuit is explained, drawn in KiCAD, and then assembled on an OHB/silver-ink board. Learners understand how LM358 comparators, transistors (BC548), LDRs, and LM35 temperature sensors work. By the end of the month, students will have three working PCBs that react to light, heat, or touch — just like real embedded systems.</p>
                                                    <h3 class="course-details__overview-title-2">What You Will Learn?</h3>
                                                    <ul class="course-details__overview-points list-unstyled">
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Sensor-Based Circuit Design:</h5>
                                                                <p>Design with LDR (light), LM35 (temperature), and touch/motion inputs.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Working with LM358 & Transistors:</h5>
                                                                <p>Use LM358 as a comparator and BC548 as a driver to control fans, LEDs, and small loads.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>KiCAD Project Workflow:</h5>
                                                                <p>Create 3 separate PCB layouts, one for each circuit — ready for Gerber if needed.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Troubleshooting & Testing:</h5>
                                                                <p>Measure signals, check component orientation, and fix common mistakes in student boards.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <h3 class="course-details__overview-title-3">Requirements</h3>
                                                    <p class="course-details__overview-text-3">Basic circuit awareness is helpful, but not mandatory. The course explains every circuit in steps.</p>
                                                    <div class="course-details__points-box">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <ul class="course-details__points-list-2 list-unstyled">
                                                                    <li>
                                                                        <div class="course-details__points-list-icon">
                                                                            <img src="{{ asset('assets/images/icon/course-details-points-list-icon-1.png') }}" alt="">
                                                                        </div>
                                                                        <h3 class="course-details__points-list-title">Computer with KiCAD Installed</h3>
                                                                        <p class="course-details__points-list-text">All 3 circuits will be drawn in KiCAD 9.</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="course-details__points-list-icon">
                                                                            <img src="{{ asset('assets/images/icon/course-details-points-list-icon-2.png') }}" alt="">
                                                                        </div>
                                                                        <h3 class="course-details__points-list-title">Learning Time</h3>
                                                                        <p class="course-details__points-list-text">1 Month · 6 Sessions · 1 Hour Each (4 Saturdays + 2 Sundays)</p>
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
                                                                    <p class="course-details__points-list-text">LM358, BC548, LDR, LM35, resistors, fan/LED load, OHB sheet, silver ink.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                         <h3 class="course-details__overview-title-2">Session & Project Plan</h3>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Week / Session</th>
                                                            <th>Project</th>
                                                            <th>Core Idea</th>
                                                            <th>Key Concepts</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Week 1 (Sat)</td>
                                                            <td>Automatic Light</td>
                                                            <td>LDR controls LED through LM358</td>
                                                            <td>Voltage divider, comparator output</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Week 2 (Sat)</td>
                                                            <td>Temperature-Controlled Fan</td>
                                                            <td>LM35 temperature sensor + BC548 transistor</td>
                                                            <td>Analog to action, transistor as a switch</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Week 3 (Sat)</td>
                                                            <td>Touch / Motion Light</td>
                                                            <td>Small sensor signal → drive LED/buzzer</td>
                                                            <td>Signal conditioning, noise, sensitivity</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Extra (Sun 1)</td>
                                                            <td>KiCAD Layout</td>
                                                            <td>Draw all 3 circuits as separate boards</td>
                                                            <td>Netlist, footprint, routing basics</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Extra (Sun 2)</td>
                                                            <td>Assembly + Demo Day</td>
                                                            <td>Mount, test, and present</td>
                                                            <td>Debugging, documenting the build</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @elseif($displayTitle === 'Electronics Innovation Program: 1-Year')
                                                    <h3 class="course-details__overview-title">Course Overview</h3>
                                                    <p class="course-details__overview-text-1">The 1-Year Electronics Innovation Program is a complete, mentor-guided pathway for students who want to keep learning all year and build a portfolio of real projects. Every month, learners receive a new circuit to build — starting from basic sensor automation and gradually moving to robotics, motor control, and simple IoT-style applications.</p>
                                                    <p class="course-details__overview-text-2">Students will design in KiCAD, assemble on OHB/PCB, and, in the later months, integrate microcontrollers (Arduino) to make smart systems. This is ideal for schools, makers, and young engineers who want continuous learning instead of a one-time workshop.</p>
                                                    <h3 class="course-details__overview-title-2">What You Will Learn?</h3>
                                                    <ul class="course-details__overview-points list-unstyled">
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>End-to-End PCB Design:</h5>
                                                                <p>From schematic to layout, routing, Gerber generation, and assembling final hardware.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>10 Real Projects:</h5>
                                                                <p>Build light automation, temperature control, water level alarm, plant watering, robotics, and a mini smart home.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Coding & Integration:</h5>
                                                                <p>Use Arduino to read sensors and control relays/motors in the later modules.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="course-details__overview-points-icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <div class="course-details__overview-points-content">
                                                                <h5>Problem-Solving Mindset:</h5>
                                                                <p>Learn how to select components, read datasheets, and make circuits useful in home, lab, or STEM competitions.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <h3 class="course-details__overview-title-3">Requirements</h3>
                                                    <p class="course-details__overview-text-3">No prior knowledge is mandatory. Students who finished the 3-Day or 1-Month course will find it even easier.</p>
                                                    <div class="course-details__points-box">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <ul class="course-details__points-list-2 list-unstyled">
                                                                    <li>
                                                                        <div class="course-details__points-list-icon">
                                                                            <img src="{{ asset('assets/images/icon/course-details-points-list-icon-1.png') }}" alt="">
                                                                        </div>
                                                                        <h3 class="course-details__points-list-title">Computer with KiCAD + Arduino IDE</h3>
                                                                        <p class="course-details__points-list-text">Used for schematic design in the early months and coding in later months.</p>
                                                                    </li>
                                                                    <li>
                                                                        <div class="course-details__points-list-icon">
                                                                            <img src="{{ asset('assets/images/icon/course-details-points-list-icon-2.png') }}" alt="">
                                                                        </div>
                                                                        <h3 class="course-details__points-list-title">Learning Time</h3>
                                                                        <p class="course-details__points-list-text">12 Months · 2 Sessions / Month · 1 Hour Each (Total: 24 Guided Sessions)</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                             <div class="col-xl-6">
                                                            <ul class="course-details__points-list-2 list-unstyled">
                                                                <li>
                                                                    <div class="course-details__points-list-icon">
                                                                        <img src="{{ asset('assets/images/icon/course-details-points-list-icon-3.png') }}" alt="">
                                                                    </div>
                                                                    <h3 class="course-details__points-list-title">Monthly Hardware Kit</h3>
                                                                    <p class="course-details__points-list-text">Sensors, ICs, motors, relays, and microcontroller boards are provided as per project.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="course-details__overview-title-2">Month-wise Project Roadmap</h3>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Month</th>
                                                            <th>Project</th>
                                                            <th>Core Idea</th>
                                                            <th>Key Concepts</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Smart Light</td>
                                                            <td>LDR + transistor switching</td>
                                                            <td>Light sensing, auto ON/OFF</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Temperature-Controlled Fan</td>
                                                            <td>LM35 + LM358</td>
                                                            <td>Analog sensing, comparator output</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Water Level Alarm</td>
                                                            <td>Water probes + 555 timer</td>
                                                            <td>Threshold detection, buzzer drive</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Sound-Activated Light</td>
                                                            <td>Electret mic + amplifier</td>
                                                            <td>Signal amplification, noise filtering</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Soil Moisture Controller</td>
                                                            <td>Soil sensor + relay</td>
                                                            <td>Home / garden automation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>IR Obstacle Detector</td>
                                                            <td>IR TX/RX + comparator</td>
                                                            <td>IR sensing for robots</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Fire / Heat Alarm</td>
                                                            <td>Thermistor + buzzer</td>
                                                            <td>Safety circuits, sensor biasing</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Light-Following Robot</td>
                                                            <td>2 LDRs + motor driver</td>
                                                            <td>Robotics logic, differential drive</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Line Follower Robot</td>
                                                            <td>IR array + motor control</td>
                                                            <td>Embedded decision making</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Smart Home Mini System</td>
                                                            <td>Arduino + relay + sensors</td>
                                                            <td>Integration, IoT-style control</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <h3 class="course-details__overview-title-2">Learning Goals</h3>
      <ul class="course-details__overview-points list-unstyled">
        <li>
          <div class="course-details__overview-points-icon"><span class="fas fa-check"></span></div>
          <div class="course-details__overview-points-content">
            <h5>Build a Portfolio:</h5>
            <p>Students complete 10 projects they can show to schools, fairs, and competitions.</p>
          </div>
        </li>
        <li>
          <div class="course-details__overview-points-icon"><span class="fas fa-check"></span></div>
          <div class="course-details__overview-points-content">
            <h5>Move from Passive to Maker:</h5>
            <p>Learn to design solutions, not just watch videos.</p>
          </div>
        </li>
        <li>
          <div class="course-details__overview-points-icon"><span class="fas fa-check"></span></div>
          <div class="course-details__overview-points-content">
            <h5>Foundation for Robotics / AI:</h5>
            <p>Final months prepare learners for your Robotics &amp; AI courses.</p>
          </div>
        </li>
      </ul>
                                                @endif
                                                    </div>
                                                </div>
                                                
                                                
                                                <!-- <h3 class="course-details__overview-title-2">Learning Goals</h3>
                                                <ul class="course-details__overview-points list-unstyled">
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>Build a Portfolio:</h5>
                                                            <p>Students complete 10 projects they can show to schools, fairs, and competitions.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>Move from Passive to Maker:</h5>
                                                            <p>Learn to design solutions, not just watch videos.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="course-details__overview-points-icon">
                                                            <span class="fas fa-check"></span>
                                                        </div>
                                                        <div class="course-details__overview-points-content">
                                                            <h5>Foundation for Robotics / AI:</h5>
                                                            <p>Final months prepare learners for your Robotics & AI courses.</p>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="course-details__right">
                        <div class="course-details__info-box">
                            @if($course->preview_video_url)
                                <div class="course-details__video-link" style="position:relative; overflow:hidden; border-radius:20px;">
                                    <video id="coursePreviewVideo" width="100%" height="auto" preload="metadata" poster="{{ asset('assets/images/resources/MyfirstPCB.png') }}" style="display:block;" controls playsinline controlsList="nodownload">
                                        <source src="{{ asset('storage/videos/courses/' . $course->preview_video_url) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <button type="button" id="coursePreviewPlayBtn" aria-label="Play preview" style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);border:none;background:transparent;cursor:pointer;">
                                        <div class="course-details__video-icon">
                                            <span class="icon-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </button>
                                </div>
                            @else
                                <div class="alert alert-info">
                                    Preview video coming soon!
                                </div>
                            @endif
                            <div class="course-details__doller-and-btn-box d-flex justify-content-between">
                                <div class="course-details__doller-btn-box">
                                    <a class="thm-btn-two btn" onclick="showBookingModal()">
                                        <span>Book Live Session</span>
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
                                        <p><i class="icon-clock"></i>Live Classes</p>
                                    </li>
                                    <li>
                                        <p><i class="icon-chart-simple"></i>Skill Level</p>
                                        <span>{{ $course->skill_level }}</span>
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

    <div id="bookingModal" aria-hidden="true">
        <div class="modal-card">
            <div class="modal-header">
                <h4 id="modalCourseTitle">{{ $course->title }} - ₹1000</h4>
                <button type="button" class="close-btn" onclick="closeBookingModal()" aria-label="Close">×</button>
            </div>
            <form id="bookingForm">
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <div class="form-grid">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{ Auth::user()->name ?? '' }}" placeholder="Your Name" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email ?? '' }}" placeholder="Your Email" required>
                    </div>
                    <div>
                        <label>Contact Number</label>
                        <input type="tel" name="phone" placeholder="WhatsApp or Phone" required>
                        <small>Our team will contact you via WhatsApp or call to complete the payment and schedule your session slot.</small>
                    </div>
                    <div>
                        <label>Shipping Address</label>
                        <textarea name="shipping_address" placeholder="Complete address to receive your PCB kit" required></textarea>
                        <small>A complete PCB kit will be delivered to your address.</small>
                    </div>
                </div>
                <div style="margin-top:16px; display:flex; justify-content:flex-end; gap:8px;">
                    <!-- <button type="button" class="thm-btn-two" style="background:#eee;color:#333;" onclick="closeBookingModal()">Cancel</button> -->
                    <button type="submit" class="thm-btn-two">
                        <span>Enroll Now</span>
                        <i class="icon-angles-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showBookingModal(){
            document.getElementById('bookingModal').classList.add('open');
        }
        function closeBookingModal(){
            document.getElementById('bookingModal').classList.remove('open');
        }
        (function(){
            const form = document.getElementById('bookingForm');
            if(!form) return;
            form.addEventListener('submit', async function(e){
                e.preventDefault();
                const fd = new FormData(form);
                const payload = Object.fromEntries(fd.entries());
                try{
                    const response = await fetch('{{ route('enrollment.initiate') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(payload)
                    });
                    const data = await response.json().catch(() => null);
                    if (response.ok && data && data.success) {
                        closeBookingModal();
                        if (typeof toastr !== 'undefined') {
                            toastr.success('Thank you! Your enrollment inquiry has been recorded. We will contact you shortly.', 'Success!', {
                                timeOut: 5000,
                                closeButton: true,
                                progressBar: true,
                                positionClass: 'toast-top-right'
                            });
                        }
                        form.reset();
                    } else {
                        if (typeof toastr !== 'undefined') {
                            toastr.error((data && data.message) || 'Unable to submit. Please try again.', 'Error!');
                        } else {
                            alert('Unable to submit. Please try again.');
                        }
                    }
                } catch (err) {
                    if (typeof toastr !== 'undefined') {
                        toastr.error('Network error. Please try again later.', 'Error!');
                    } else {
                        alert('Network error. Please try again later.');
                    }
                }
            });
        })();
    </script>

<script>
// Function to open booking modal with course details
function openBookingModal() {
    document.getElementById('bookingModal').classList.add('open');
    document.body.style.overflow = 'hidden';
}

// Function to close booking modal
function closeBookingModal() {
    document.getElementById('bookingModal').classList.remove('open');
    document.body.style.overflow = '';
}

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