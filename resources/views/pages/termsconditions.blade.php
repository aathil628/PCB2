@extends('layouts.layout4')
@php
$title = 'Terms & Conditions';
$subtitle = 'Terms & Conditions';
@endphp
@section('title', ' Terms & Conditions | MyFirstPcb ')
@section('content')

<x-strickyHeader />

<!-- Mian content -->
<section>
    <div class="container-fluid">
        <div class="container my-5 py-5">
            <div class="heading my-5 text-center">
                <h2>Terms and Conditions</h2>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>1. Agreement to Terms</h4>
                    <p class="ps-4 py-2">By accessing or using the myfirstpcb website and purchasing our course, you agree to be bound by these Terms and Conditions. This is a binding agreement between you, the parent or guardian, and Nytt Robotics Private Limited, the operator of myfirstpcb. </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>2. The Course & Kit </h4>
                    <p class="ps-4 py-2">The myfirstpcb course provides access to digital content and a physical hardware kit.</p>
                    <ul>
                        <li class="my-2">
                            <h5>Course Access:</h5> Access to the course is granted for a period of [e.g., 12 months] from the date of purchase
                        </li>
                        <li class="my-2">
                            <h5>The Kit:</h5>The kit is an integral part of the course. It is for the student's personal use and is not to be resold or distributed.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>3. User Obligations</h4>
                    <p class="ps-4 py-2">As a user, you agree to:</p>
                    <ul>
                        <li class="my-2">
                            Provide accurate and complete registration and payment information.
                        </li>
                        <li class="my-2">
                            Ensure the kit is used responsibly and with proper supervision, especially for minors.
                        </li>
                        <li class="my-2">
                            Not to share course login credentials or course content with third parties.
                        </li>
                        <li class="my-2">
                            Not to use the service for any illegal or unauthorized purpose.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>4. Intellectual Property</h4>
                    <p class="ps-4 py-2">All content on the myfirstpcb website, including the course materials, videos, designs, and logos, are the property of Nytt Robotics Private Limited and are protected by copyright laws. You may not reproduce, distribute, or modify any content without our explicit written permission.
                    </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>5. Limitation of Liability</h4>
                    <p class="ps-4 py-2">Nytt Robotics Private Limited and its affiliates will not be liable for any damages or injuries that result from the use of the myfirstpcb kit or course. The course and kit are provided "as is," and we make no warranties of any kind. It is the parent’s responsibility to ensure a safe learning environment. </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>6. Governing Law</h4>
                    <p class="ps-4 py-2">These Terms shall be governed and construed in accordance with the laws of [Your Jurisdiction, e.g., India], without regard to its conflict of law provisions.</p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>7. Changes to Terms</h4>
                    <p class="ps-4 py-2">We reserve the right to modify or replace these Terms at any time. Your continued use of the service after any such changes constitutes your acceptance of the new Terms.</p>
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