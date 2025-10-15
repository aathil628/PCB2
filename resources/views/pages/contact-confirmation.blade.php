@extends('layouts.layout4')
@php
    $title = 'Message Sent';
    $subtitle = 'Contact Confirmation';
@endphp
@section('title', 'Contact Confirmation | MyFirstPCB')
@section('content')

<x-strickyHeader />
<div style="height: 60px;"></div>

<section class="contact-two">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-9">
        <div class="text-center p-5" style="background:#F7FBF9;border:1px solid #E6F4EE;border-radius:12px;">
          <div class="mb-3" style="font-size:48px;color:#12B886;line-height:1;">✓</div>
          <h2 class="mb-2">Thank you for contacting us!</h2>
          <p class="mb-4">We've received your message and will get back to you soon.</p>
          <a href="{{ route('index') }}" class="thm-btn-two"><span>Back to Home</span><i class="icon-angles-right"></i></a>
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
