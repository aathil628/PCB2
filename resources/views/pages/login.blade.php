@extends('layouts.layout4')
@php
$title = 'Login';
$subtitle = 'Login';
@endphp
@section('title', ' Login | MyfirstPCB')
@section('meta_description', 'Login to your MyfirstPCB account securely to access PCB order history, design tools, and exclusive services. Fast and safe login for all electronic enthusiasts.')
@section('meta_keywords', 'login, MyfirstPCB login, user account, PCB order login, secure login, electronics projects, PCB platform')
@section('content')


<x-strickyHeader />

<!-- Toastr CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!--Start Login One-->
<section class="login-one mt-3">
    <div class="container">
        <div class="login-one__form">
            <div class="inner-title text-center">
                <h2 id="authFormTitle">Login with OTP</h2>
            </div>
            <form id="login-one__form" name="Login-one_form" method="post" action="#">
                @csrf

                <!-- Alert Container for Messages -->
                <div id="alertContainer"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <div class="input-box">
                                <input type="email" name="form_email" id="formEmail" class="form-control"
                                    placeholder="Email..." required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" id="otpSendGroup">
                        <div class="form-group">
                            <button class="thm-btn" type="button" id="sendOtpBtn">
                                <span id="sendOtpText">Send OTP</span>
                                <span class="loadingSendOtp" style="display:none;">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>Sending...
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-12" id="otpVerifyGroup" style="display:none;">
                        <div class="form-group">
                            <div class="input-box">
                                <input type="text" name="otp" id="otpInput" class="form-control" placeholder="Enter OTP" maxlength="6">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="thm-btn" type="button" id="verifyOtpBtn">
                                <span id="verifyOtpText">Verify & Continue</span>
                                <span class="loadingVerifyOtp" style="display:none;">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>Verifying...
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="create-account text-center" id="createAccountDiv"></div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--End Login One-->

<style></style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('login-one__form');
        const sendOtpBtn = document.getElementById('sendOtpBtn');
        const sendOtpText = document.getElementById('sendOtpText');
        const loadingSendOtp = document.querySelector('.loadingSendOtp');
        const verifyOtpBtn = document.getElementById('verifyOtpBtn');
        const verifyOtpText = document.getElementById('verifyOtpText');
        const loadingVerifyOtp = document.querySelector('.loadingVerifyOtp');

        // Clear input error state
        form.addEventListener('input', function (e) {
            if (e.target.classList.contains('is-invalid')) {
                e.target.classList.remove('is-invalid');
                const feedback = e.target.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) feedback.textContent = '';
            }
        });

        sendOtpBtn.addEventListener('click', function(){
            const email = document.getElementById('formEmail').value.trim();
            if(!email){ toastr.error('Please enter your email.'); return; }
            sendOtpBtn.disabled = true; sendOtpText.style.display = 'none'; loadingSendOtp.style.display = 'inline-block';
            fetch('{{ route('auth.sendOtp') }}', {
                method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':'{{ csrf_token() }}'},
                body: JSON.stringify({ email })
            }).then(r=>r.json()).then(data=>{
                if(data.success){
                    toastr.success('OTP sent to your email.');
                    document.getElementById('otpVerifyGroup').style.display='block';
                } else {
                    toastr.error(data.message || 'Could not send OTP');
                }
            }).catch(()=> toastr.error('Network error')).finally(()=>{
                sendOtpBtn.disabled = false; sendOtpText.style.display = 'inline-block'; loadingSendOtp.style.display = 'none';
            });
        });

        verifyOtpBtn.addEventListener('click', function(){
            const email = document.getElementById('formEmail').value.trim();
            const otp = document.getElementById('otpInput').value.trim();
            if(!otp){ toastr.error('Enter the OTP.'); return; }
            verifyOtpBtn.disabled = true; verifyOtpText.style.display = 'none'; loadingVerifyOtp.style.display = 'inline-block';
            fetch('{{ route('auth.verifyOtp') }}', {
                method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':'{{ csrf_token() }}'},
                body: JSON.stringify({ email, otp })
            }).then(r=>r.json()).then(data=>{
                if(data.success){
                    window.location.href = data.redirect_url;
                } else {
                    toastr.error(data.message || 'Invalid OTP');
                }
            }).catch(()=> toastr.error('Network error')).finally(()=>{
                verifyOtpBtn.disabled = false; verifyOtpText.style.display = 'inline-block'; loadingVerifyOtp.style.display = 'none';
            });
        });
    });
</script>

<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection