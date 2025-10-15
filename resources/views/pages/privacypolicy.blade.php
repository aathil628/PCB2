@extends('layouts.layout2')
@php
$title = 'Privacy Policy';
$subtitle = 'Privacy Policy';
@endphp
@section('title', ' Privacy Policy || MyFirstPcb || MyFirstPcb Laravel Template ')
@section('content')

<x-strickyHeader />


<style>
    @media (max-width: 768px) {
        .last-update h5 {
            font-size: 15px !important;
        }
    }
</style>

<!-- Mian content -->
<section>
    <div class="container-fluid">
        <div class="container my-5 py-5">
            <div class="heading my-5 text-center">
                <h2>Privacy Policy</h2>
            </div>

            <div class="last-update my-5">
                <h5>Effective Date: 13/08/2025</h5>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>1. Introduction</h4>
                    <p class="ps-4 py-2">Welcome to myfirstpcb.com. We are committed to protecting the privacy of our
                        users,
                        particularly
                        the
                        students and their parents who enroll in our courses. This policy explains how we collect, use,
                        and
                        protect your personal information. </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>2. Information We Collect </h4>
                    <p class="ps-4 py-2">We collect information to provide and improve our services. The types of
                        information
                        we collect
                        include:</p>
                    <ul>
                        <li class="my-2">
                            <h5>Personal Information:</h5> Provided by a parent or guardian during registration, such as
                            name, email address, and phone number.
                        </li>
                        <li class="my-2">
                            <h5>Payment Information:</h5>Details required to process transactions, such as credit card
                            number, billing address, and bank information. This information is processed securely by our
                            payment gateway partners.
                        </li>
                        <li class="my-2">
                            <h5>Student Information:</h5>Details about the student, such as their name and age, to
                            facilitate their participation in the course.
                        </li>
                        <li class="my-2">
                            <h5>Usage Data:</h5>Information about how our services are accessed and used. This may
                            include IP addresses, browser type, pages visited, and time spent on our website.
                        </li>
                        <li class="my-2">
                            <h5>Cookies:</h5>We use cookies to track activity on our website and hold certain
                            information.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>3. How We Use Your Information</h4>
                    <p class="ps-4 py-2">We use the collected information for the following purposes:</p>
                    <ul>
                        <li class="my-2">
                            To provide and maintain the myfirstpcb course
                        </li>
                        <li class="my-2">
                            To process payments and manage your account.
                        </li>
                        <li class="my-2">
                            To communicate with parents about the course, updates, and support.
                        </li>
                        <li class="my-2">
                            To monitor and analyze the use of our service to improve user experience.
                        </li>
                        <li class="my-2">
                            To detect, prevent, and address technical issues.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>4. Data Security</h4>
                    <p class="ps-4 py-2">The security of your data is important to us. We implement a variety of
                        security
                        measures to maintain the safety of your personal information. While we strive to use
                        commercially acceptable means to protect your data, we cannot guarantee its absolute security.
                    </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>5. Children's Privacy</h4>
                    <p class="ps-4 py-2">Our service is intended for students under the age of 18, with enrollment and
                        payment handled by a parent or guardian. We do not knowingly collect personal information from
                        children without parental consent. If we become aware that we have collected data from a child
                        without verification of parental consent, we will take steps to remove that information from our
                        servers. </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>6. Third-Party Services</h4>
                    <p class="ps-4 py-2">We may use third-party services to facilitate our services (e.g., payment
                        gateways).
                        These third parties have their own privacy policies governing their use of your information.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection