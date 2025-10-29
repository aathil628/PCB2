@extends('layouts.layout4')
@php
    $title = 'Course Grid';
    $subtitle = 'Course Grid';
@endphp
@section('title', 'Courses | MyFirstPCB')
@section('content')

<x-strickyHeader/>

    <!--Course Grid Start-->
    <section class="course-grid">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="course-grid__left">
                        <div class="course-grid__sidebar">
                            <div class="course-grid__search course-grid__single">
                                <div class="course-grid__title-box mt-5">
                                    <h3 class="course-grid__title">Search Now</h3>
                                    <div class="course-grid__title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/course-grid-title-shape-1.png') }}" alt="">
                                    </div>
                                     <form class="mt-3" method="GET" action="{{ route('course') }}">
                                    <input type="search" name="q" value="{{ request('q') }}" placeholder="Search courses">
                                    <button type="submit"><i class="icon-search"></i>Search</button>
                                </form>
                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="course-grid__right">
                        
                        <div class="course-grid__right-content-box">
                            <div class="row">
                                @php $list = ($courses instanceof \Illuminate\Support\Collection) ? $courses->take(3) : $courses; @endphp
                                @forelse($list as $course)
                                <div class="col-xl-6">
                                    <div class="courses-two__single">
                                        <div class="courses-two__img-box">
                                            <div class="courses-two__img">
                                                <img src="{{ Storage::url($course->course_poster) }}" alt="">
                                            </div>
                                            
                                        </div>
                                        <div class="courses-two__content">
                                            
                                            <h3 class="courses-two__title"><a href="{{ route('course-details', $course->id) }}">{{ $course->title }}</a></h3>
                                            <div class="courses-two__btn-and-client-box">
                                                <div class="courses-two__btn-box">
                                                    <a href="{{ route('course-details', $course->id) }}" class="thm-btn-two">
                                                        <span>View Course</span>
                                                        <i class="icon-angles-right"></i>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <ul class="courses-two__meta list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-chart-simple"></span>
                                                    </div>
                                                    <p>{{ $course->skill_level }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12"><p>No courses found.</p></div>
                                @endforelse
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Course Grid End-->

    

<x-contact-grid/>
<x-footer2/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection