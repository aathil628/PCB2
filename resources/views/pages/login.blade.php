@extends('layouts.layout4')
@php
$title = 'Login';
$subtitle = 'Login';
@endphp
@section('title', ' Login || MyfirstPCB || MyfirstPCB Laravel Template ')
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
                <h2 id="authFormTitle">Login Here</h2>
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

                    <!-- Reset Password Button: initially hidden, shows only in reset mode -->
                    <div class="col-xl-12" id="resetPasswordGroup" style="display: none;">
                        <div class="form-group">
                            <button class="thm-btn" type="button" id="resetPasswordBtn" style="width: 100%; margin-top: 15px;">
                                <span id="resetPasswordText">Reset Password</span>
                                <span class="resetLoadingText" style="display: none;">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    Sending...
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-12" id="passwordGroup">
                        <div class="form-group">
                            <div class="input-box">
                                <input type="password" name="form_password" id="formPassword" class="form-control"
                                    placeholder="Password..." required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" id="loginSubmitGroup">
                        <div class="form-group">
                            <button class="thm-btn" type="submit" id="submitBtn">
                                <span id="submitText">Login Here</span>
                                <span class="loadingText" style="display: none;">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    Logging in...
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="remember-forget d-flex align-items-center justify-content-end">
                        <div class="forget" id="forgetDiv">
                            <a href="#" id="forgetPasswordBtn">Forget password?</a>
                        </div>
                    </div>

                    <div class="create-account text-center" id="createAccountDiv">
                        <p>Not registered yet? <a href="{{ url('sign-up') }}">Create an Account</a></p>
                    </div>
                    <div class="text-center" id="backToLoginDiv" style="display: none;">
                        <a href="#" id="backToLoginBtn">Back to Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--End Login One-->

<style>
    .login-one__form form input[type="password"] {
    position: relative;
    display: block;
    border-radius: 10px;
    border: 1px solid rgba(var(--fistudy-bdr-color-rgb), .50);
    background-color: rgba(var(--fistudy-bdr-color-rgb), .50);
    width: 100%;
    height: 60px;
    color: var(--fistudy-gray);
    font-size: 16px;
    font-family: var(--fistudy-font);
    font-weight: 400;
    font-style: normal;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
    transition: all 500ms ease;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('login-one__form');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const loadingText = document.querySelector('.loadingText');

        // Clear validation errors on input
        form.addEventListener('input', function (e) {
            if (e.target.classList.contains('is-invalid')) {
                e.target.classList.remove('is-invalid');
                const feedback = e.target.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = "";
                }
            }
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear previous errors
            const invalidInputs = form.querySelectorAll('.is-invalid');
            invalidInputs.forEach(input => {
                input.classList.remove('is-invalid');
                const feedback = input.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = '';
                }
            });

            // Show loading state
            submitBtn.disabled = true;
            submitText.style.display = 'none';
            loadingText.style.display = 'inline-block';

            // Prepare form data
            const formData = {
                email: document.getElementById("formEmail").value,
                password: document.getElementById("formPassword").value,
            }

            fetch('{{ route("login.submit") }}', {
                method: 'POST',
                body: JSON.stringify(formData),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        toastr.success(data.message, 'Success!', {
                            timeOut: 2000,
                            closeButton: true,
                            progressBar: true
                        });

                        setTimeout(() => {
                            window.location.href = data.redirect_url;
                        }, 2000);
                    } else {
                        toastr.error(data.message || 'Login failed. Please try again.', 'Error!');
                        hideLoadingState();
                    }
                })
                .catch(error => {
                    console.log('Login error:', error);
                    hideLoadingState();

                    if (error.response) {
                        error.response.json().then(errorData => {
                            if (errorData.errors) {
                                // Handle validation errors
                                Object.keys(errorData.errors).forEach(key => {
                                    const input = form.querySelector(`[name="${key}"]`);
                                    if (input) {
                                        input.classList.add('is-invalid');
                                        const feedback = input.nextElementSibling;
                                        if (feedback && feedback.classList.contains('invalid-feedback')) {
                                            feedback.textContent = errorData.errors[key][0];
                                        }
                                    }
                                });
                                toastr.error('Please check the form for errors.', 'Validation Error!');
                            } else {
                                toastr.error(errorData.message || 'Login failed. Please try again.', 'Error!');
                            }
                        });
                    } else {
                        toastr.error('Login failed. Please try again.', 'Error!');
                    }
                });
        });

        function hideLoadingState() {
            submitBtn.disabled = false;
            submitText.style.display = 'inline-block';
            loadingText.style.display = 'none';
        }
    });
</script>

<!-- Reset password -->
<script>
    $(function () {
        // Cache DOM elements
        const $title = $("#authFormTitle");
        const $passwordGroup = $("#passwordGroup");
        const $loginSubmitGroup = $("#loginSubmitGroup");
        const $forgetDiv = $("#forgetDiv");
        const $createAccountDiv = $("#createAccountDiv");
        const $backToLoginDiv = $("#backToLoginDiv");
        const $resetPasswordGroup = $("#resetPasswordGroup");
        const $formEmail = $("#formEmail");
        const $alertContainer = $("#alertContainer");

        // Track current form mode
        let formMode = 'login'; // 'login' or 'reset'

        // ======================
        // SWITCH TO RESET MODE
        // ======================
        $("#forgetPasswordBtn").click(function(e) {
            e.preventDefault();
            formMode = 'reset';
            
            $title.text("Reset Password");
            $passwordGroup.hide();
            $loginSubmitGroup.hide();
            $resetPasswordGroup.show();
            $forgetDiv.hide();
            $createAccountDiv.hide();
            $backToLoginDiv.show();
            $alertContainer.empty();
        });

        // ======================
        // SWITCH TO LOGIN MODE
        // ======================
        $("#backToLoginBtn").click(function(e) {
            e.preventDefault();
            formMode = 'login';
            
            $title.text("Login Here");
            $passwordGroup.show();
            $loginSubmitGroup.show();
            $resetPasswordGroup.hide();
            $forgetDiv.show();
            $createAccountDiv.show();
            $backToLoginDiv.hide();
            $alertContainer.empty();
        });

        // ======================
        // RESET PASSWORD HANDLER
        // ======================
        $("#resetPasswordBtn").click(function(e) {
            e.preventDefault();

            // Validate email
            const email = $formEmail.val().trim();
            if (!email) {
                toastr.error('Please enter your email address.', 'Error!');
                return;
            }

            // Email format validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                toastr.error('Please enter a valid email address.', 'Error!');
                return;
            }

            // Show loading state
            $("#resetPasswordText").hide();
            $(".resetLoadingText").show();
            $(this).prop('disabled', true);

            // Send reset request
            console.log("Email for reset:", email); // Debug log
            fetch("{{ route('forgot-password') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ email: email })
            })
            .then(res => res.json())
            .then(data => {
                console.log("Reset response:", data); // Debug log
                if (data.success) {
                    toastr.success(data.message, 'Success!', {
                        timeOut: 5000,
                        closeButton: true,
                        progressBar: true
                    });
                    $formEmail.val(''); // Clear email field
                } else {
                    toastr.error(data.message || 'Could not send reset link. Please try again.', 'Error!');
                }
            })
            .catch(error => {
                console.error("Error:", error);
                toastr.error('An error occurred. Please try again later.', 'Error!');
            })
            .finally(() => {
                // Restore button state
                $("#resetPasswordText").show();
                $(".resetLoadingText").hide();
                $("#resetPasswordBtn").prop('disabled', false);
            });
        });
    });
</script>

<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection