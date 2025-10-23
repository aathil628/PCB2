@extends('layouts.layout4')
@php
$title = 'Refund Policy';
$subtitle = 'Refund Policy';
@endphp
@section('title', ' Refund Policy | MyFirstPcb  ')
@section('content')

<x-strickyHeader />

<!-- Mian content -->
<section>
    <div class="container-fluid">
        <div class="container my-5 py-5">
            <div class="heading my-5 text-center">
                <h2>Refund Policy</h2>
            </div>

            <div class="heading-content my-5">
                <h5 class="text-center">This Refund Policy applies to all purchases made through myfirstpcb.com.</h5>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>1. General Conditions</h4>
                    <p class="ps-4 py-2">All purchases for the myfirstpcb course and kit are considered final upon payment. However, we offer refunds under the specific conditions outlined below. All refunds are processed back to the original payment method used by the parent or guardian. </p>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>2. Refund Eligibility </h4>
                    <p class="ps-4 py-2">A full refund may be issued under the following conditions:</p>
                    <ul>
                        <li class="my-2">
                            <h5>Before Kit Shipment:</h5> If a refund request is made within [e.g., 7 days] of the purchase date and before the myfirstpcb kit has been shipped.
                        </li>
                        <li class="my-2">
                            <h5>Technical Issues:</h5>If a student is unable to access the course content due to a persistent technical issue on our end that we are unable to resolve.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>3. Non-Refundable Situations</h4>
                    <p class="ps-4 py-2">We are unable to offer a refund in the following circumstances:</p>
                    <ul>
                        <li class="my-2">
                            After the myfirstpcb kit has been shipped.
                        </li>
                        <li class="my-2">
                            After the course has been accessed and [e.g., 25%] or more of the content has been consumed.
                        </li>
                        <li class="my-2">
                            If the refund request is made after [e.g., 14 days] from the date of purchase.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="intro row my-5">
                <div class="intro-head col">
                    <h4>4. How to Request a Refund</h4>
                    <p class="ps-4 py-2">To request a refund, the parent or guardian who made the purchase must contact our support team at [Your Support Email Address] with the following information:
                    </p>
                    <ul>
                        <li class="my-2">
                            Order number
                        </li>
                        <li class="my-2">
                            Parent's full name.
                        </li>
                        <li class="my-2">
                            A brief explanation for the refund request.
                        </li>
                    </ul>
                    <p class="ps-4 py-2">Refunds, if approved, will be processed within [e.g., 10-14] business days
                    </p>
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