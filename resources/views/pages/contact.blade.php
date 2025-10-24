@extends('layouts.layout4')
@php
$title = 'Contact Us';
$subtitle = 'Contact Us';
@endphp
@section('title', ' Contact | MyfirstPCB')
@section('meta_description', 'Get in touch with MyfirstPCB for support, inquiries, and assistance with PCB orders, design tools, and electronics project solutions.')
@section('meta_keywords', 'contact MyfirstPCB, PCB support, customer service, PCB order help, electronics inquiries, PCB platform contact')
@section('content')


<x-strickyHeader />
<div style="height: 60px;"></div> <!-- This adds spacing below the sticky header -->


<!--Contact Two Start-->
<section class="contact-two">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="contact-two__single">
                    <div class="contact-two__icon">
                        <img src="{{ asset('assets/images/icon/contact-two-icon-1.png') }}" alt="">
                    </div>
                    <h3 class="contact-two__title">Our Address</h3>
                    <p>Malmskillnadsgatan 42, 111 57, <br /> Stockholm, Sweden</p>
                </div>
            </li>
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                <div class="contact-two__single">
                    <div class="contact-two__icon">
                        <img src="{{ asset('assets/images/icon/contact-two-icon-2.png') }}" alt="">
                    </div>
                    <h3 class="contact-two__title">Contact Number</h3>
                    <p><a href="tel:+91 85908 70849">+91 85908 70849</a></p>
                </div>
            </li>
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="contact-two__single">
                    <div class="contact-two__icon">
                        <img src="{{ asset('assets/images/icon/contact-two-icon-3.png') }}" alt="">
                    </div>
                    <h3 class="contact-two__title">Email Addresss</h3>
                    <p><a href="mailto:contact@myfirstpcb.com">contact@myfirstpcb.com</a></p>
                </div>
            </li>
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="contact-two__single">
                    <div class="contact-two__icon">
                        <img src="{{ asset('assets/images/icon/contact-two-icon-4.png') }}" alt="">
                    </div>
                    <h3 class="contact-two__title">Class Schedule</h3>
                    <p>10:00 AM - 6:00 PM<br> Monday - Friday</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--Contact Two End-->

<!--Contact Three Start-->
<section class="contact-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-three__left">
                    <div class="contact-three__img">
                        <img src="{{ asset('assets/images/resources/contact-three-img-1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-three__right">
                    <div class="section-title-two text-left sec-title-animation animation-style1">
                        <div class="section-title-two__tagline-box">
                            <div class="section-title-two__tagline-shape">
                                <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                            </div>
                            <span class="section-title-two__tagline">Get in Touch</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">We’re Here to Help and Ready to Hear from
                            You</h2>
                    </div>
                    <form id="contactForm" class="contact-three__form" action="{{ route('contact.store') }}"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <h4 class="contact-three__input-title">Full Name</h4>
                                <div class="contact-three__input-box">
                                    <input type="text" name="name" placeholder="John Doe" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <h4 class="contact-three__input-title">Email Address *</h4>
                                <div class="contact-three__input-box">
                                    <input type="email" name="email" placeholder="john@domain.com" required="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-three__input-title">Subject *</h4>
                                <div class="contact-three__input-box">
                                    <input type="text" name="subject" placeholder="Write about your enquiry"
                                        required="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-three__input-title">Message *</h4>
                                <div class="contact-three__input-box text-message-box">
                                    <textarea name="message" placeholder="Write Your Message"></textarea>
                                </div>
                                <div class="contact-three__btn-box">
                                    <button type="submit" class="thm-btn-two contact-three__btn">
                                        <span>Submit</span><i class="icon-angles-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Three End-->


<!--Newsletter Two Start -->

<!--Newsletter Two End -->


<x-contact-grid />
<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />

<!-- Toastr for success toast like login page -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contactForm = document.getElementById('contactForm');
        if (!contactForm) return;

        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(contactForm);
            fetch(contactForm.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(async res => {
                const data = await res.json().catch(() => null);
                return { ok: res.ok, data };
            })
            .then(({ ok, data }) => {
                if (ok && data && data.success) {
                    toastr.success('Thank you for contacting us! We will get back to you soon.', 'Success!', {
                        timeOut: 5000,
                        closeButton: true,
                        progressBar: true,
                        positionClass: 'toast-top-right'
                    });
                    contactForm.reset();
                } else {
                    toastr.error((data && data.message) || 'Failed to send message. Please try again.', 'Error!');
                }
            })
            .catch(() => {
                toastr.error('An error occurred. Please try again later.', 'Error!');
            });
        });
    });
</script>
@endsection