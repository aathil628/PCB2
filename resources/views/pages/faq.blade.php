@extends('layouts.layout4')
@php
$title = 'Faq';
$subtitle = 'Faq';
@endphp
@section('title', ' Faq | MyFirstPCB ')
@section('content')

<x-strickyHeader />

<!--Faq Page Start-->
<section class="faq-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__left">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        <h3 class="my-3 text-center">About the Course</h3>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What exactly will I build in this course?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You'll design and fabricate a working PCB project — such as an LED flasher,
                                        buzzer circuit, or sensor-based system (based on your course level). By the end,
                                        you'll have a physical, functional board that you designed and built yourself.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion  active">
                            <div class="accrodion-title">
                                <h4>Is this a theory-based or practical course?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>It’s 90% hands-on. You’ll learn through doing — from placing components to
                                        soldering and testing your own PCB.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>How is the Junior course different from the Senior one?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Junior Level (School Students):** Focuses on basic electronics, pre-designed
                                        PCBs, and simple assembly. <br>
                                        Senior Level (College Students):** Covers PCB design software, Gerber file
                                        creation, BOM generation, soldering, testing, and debugging more complex
                                        circuits.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Will I learn to use PCB design software?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! Senior students will use tools like **EasyEDA** or **KiCad**, and even
                                        junior students will be introduced to basic digital design concepts.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <h3 class="text-center mt-5 mb-3">For Institutions & Parents</h3>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Can this be conducted at our school/college as a workshop?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! We organize full-fledged workshops with kits, trainers, and sessions.
                                        Schools/colleges can contact us directly for institutional programs.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Is the kit safe for kids to handle?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes. The Junior kits use low-voltage, student-friendly components. Soldering
                                        tools are used under supervision and safety instructions are provided.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>How many students can participate in a batch?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We recommend batches of 25–40 students for offline workshops. Online sessions can
                                        support more, with dedicated breakout support if needed.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Can parents join the session to help younger students?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Absolutely. In fact, we encourage parents to observe or assist younger kids
                                        (especially in online sessions). It creates a great bonding and learning
                                        opportunity!</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        <h3 class="mt-5 mb-3 text-center">About the Kit</h3>
                        <!-- <div class="accrodion">
                                <div class="accrodion-title">
                                    
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We provide a range of services designed to help your business grow and
                                            succeed. Our services include market research and analysis, strategic
                                            planning, sales and marketing strategy development</p>
                                    </div><!-- /.inner 
                                </div>
                            </div> -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What’s inside the myfirstPCB kit?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Your kit includes: <br>
                                        * A blank or pre-designed PCB board <br>
                                        * Resistors, capacitors, LEDs, ICs, switches, etc. <br>
                                        * Soldering wire, jumper wires, and connectors <br>
                                        * A power module or battery clip <br>
                                        * Instruction manual & access to tutorials</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Do I need to buy anything extra?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>No. Everything you need is provided in the kit. You’re ready to start as soon as
                                        you open the box!</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What if something in my kit is damaged or missing?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We’ve got you covered. Just contact our support within 48 hours of receiving the
                                        kit, and we’ll send a replacement.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <h3 class="mt-5 mb-3 text-center">Learning & Delivery</h3>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>How long is the course?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Junior Level: 6–8 hours across 2–3 sessions <br>
                                        Senior Level: 12–15 hours across 3–5 sessions <br>
                                        (Formats may vary slightly depending on whether it’s a workshop, online, or
                                        integrated into school/college curriculum)</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Is this an online or offline course?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We offer both. Schools and colleges can request **offline workshops**, while
                                        individuals can join our **online batches** with live instructor support.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Will I get help if I’m stuck?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! All students receive mentor support during the sessions. If you’re doing it
                                        at home or online, you can contact us via WhatsApp, email, or support chat.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <h3 class="text-center mt-5 mb-3">Certification & Progression</h3>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Will I get a certificate?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes, all students receive an official **Certificate of Completion** from Nytt
                                        Robotics.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What can I do after completing this course?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You can move on to advanced courses in robotics, IoT, or embedded systems. You’ll
                                        also be better prepared for school science fairs, college projects, internships,
                                        and hackathons.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Faq Page End-->


<x-contact-grid />
<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection