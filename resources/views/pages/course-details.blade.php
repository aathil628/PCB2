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
                                    <li data-tab="#overview" class="tab-btn active-btn tab-btn-one">
                                        <p><span class="icon-pen-ruler"></span>Overview</p>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="overview">
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

    <div id="bookingModal" aria-hidden="true">
        <div class="modal-card">
            <div class="modal-header">
                <h4>Printed Circuit Board Design: From Concept to Production (3-Day Course) - ₹1000</h4>
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
                        <input type="tel" name="contact_number" placeholder="WhatsApp or Phone" required>
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
                const userId = "{{ Auth::user()->id ?? '' }}";
                if(!userId){ window.location.href = '{{ route('login') }}'; return; }
                const fd = new FormData(form);
                const data = Object.fromEntries(fd.entries());
                data.user_id = userId;
                try{
                    const res = await fetch('{{ route('enrollment.initiate') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type':'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    });
                    if(res.ok){
                        closeBookingModal();
                        alert('Thanks! We will contact you shortly to complete payment and schedule your session.');
                    }else{
                        alert('Unable to submit. Please try again.');
                    }
                }catch(err){
                    alert('Network error. Please try again.');
                }
            });
        })();
    </script>

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