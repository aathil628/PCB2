@extends('layouts.layout4')
@section('title', 'Signup | MyfirstPCB  ')
@section('meta_description', 'Create your free MyfirstPCB account today to access advanced PCB design tools, manage orders, and stay updated with the latest electronics manufacturing solutions.')
@section('meta_keywords', 'sign up, create account, MyfirstPCB registration, PCB design, electronics projects, order PCB, custom PCB platform')
@section('content')

<x-strickyHeader />

<style>
    .spinner {
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top: 2px solid white;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        animation: spin 0.8s linear infinite;
        display: inline-block;
        vertical-align: middle;
        margin-right: 8px;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }
</style>

<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<section class="lp-hero about-three">
    <div class="lp-container d-block d-md-flex">
        <!-- Left -->
        <div class="lp-left">
            <h1>Build Your First PCB in a Day</h1>
            <p>Choose your track: <strong>School (safe, fun)</strong> or <strong>College (hands-on, advanced)</strong>.
                Start with a Free Trial.</p>
            <div class="lp-badges d-flex flex-row flex-column flex-sm-row gap-2">
                <span class="text-center">✅ Beginner Friendly</span>
                <span class="text-center">✅ Free Trial</span>
                <span class="text-center">✅ Certificate</span>
            </div>
                        <div id="infoBar" class="lp-info hidden"></div>

            <form id="signupForm" class="hidden">
                @csrf
                <!-- Alert Container for Messages -->
                <div id="alertContainer"></div>

                <input type="text" name="cohort" id="cohort" class="form-control d-none">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required value="{{ request('email') }}">
                    <div class="invalid-feedback"></div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-1">
                        <input type="checkbox" name="agreement" id="agreement" class="form-check-input" value="1">

                    </div>
                    <div class="col ps-4 p-md-0 m-0">
                        <label>I agree to receive course info on Email/WhatsApp.</label>
                    </div>
                    <div class="invalid-feedback"></div>
                </div>

                <button type="submit" class="lp-btn" id="submitBtn">
                    <span id="submitText">✨ Start My PCB Journey</span>
                    <span id="loadingText" style="display: none;">
                        <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                        Creating Account...
                    </span>
                </button>

            </form>
        </div>

        <!-- Right -->
        <div class="lp-right mt-4 mt-md-0">
            <h2>🔒 Unlock Your First PCB Project</h2>
            <p class="lp-sub">Pick your track:</p>

            <div class="lp-track-cards">
                <div class="lp-card school" onclick="selectTrack('school')">
                    🎒 <h3>School Students</h3>
                    <p>Safer· No Soldering · Guided Projects</p>
                    <a href="#" type="button">Apply here</a>

                </div>
                <div class="lp-card college" onclick="selectTrack('college')">
                    🎓 <h3>College Students</h3>
                    <p>Soldering · Board Making · KiCad</p>
                    <br>
                    <a href="#" type="button">Apply here</a>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
        background: linear-gradient(180deg, #f7faff, #ffffff);
    }

    .lp-container {
        max-width: 1200px;
        margin: auto;
        padding: 60px 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .lp-left h1 {
        font-size: 52px;
        margin: 0;
        color: #1a237e;
    }

    .lp-left p {
        font-size: 20px;
        margin: 20px 0;
        color: #444;
    }

    .lp-badges span {
        background: #eef2ff;
        border: 1px solid #c5d0ff;
        padding: 8px 16px;
        border-radius: 30px;
        margin-right: 10px;
        font-size: 14px;
    }

    .lp-right h2 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .lp-sub {
        font-size: 16px;
        color: #555;
    }

    .lp-track-cards {
        display: flex;
        gap: 20px;
        margin: 20px 0;
    }

    .lp-card {
        flex: 1;
        border-radius: 16px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        background: #fff;
        border: 2px solid #ddd;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }

    .lp-card h3 {
        margin: 10px 0 5px;
    }

    .lp-card p {
        font-size: 14px;
        color: #666;
    }

    .lp-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .lp-card.active {
        border: 2px solid #4a70ff;
        background: #eef2ff;
    }

    .lp-info {
        background: #e3f2fd;
        border: 1px solid #90caf9;
        padding: 12px 20px;
        border-radius: 12px;
        margin: 15px 0;
        color: #0d47a1;
        font-weight: 500;
    }

    .hidden {
        display: none;
    }

    form {
        margin-top: 20px;
        background: #fff;
        padding: 20px;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    form label {
        display: block;
        margin: 15px 0 5px;
        font-weight: 500;
    }

    form input,
    form textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 16px;
    }

    .lp-btn {
        width: 100%;
        margin-top: 20px;
        padding: 16px;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 12px;
        background: linear-gradient(90deg, #4a70ff, #7b4aff);
        color: #fff;
        cursor: pointer;
    }

    .lp-btn:hover {
        opacity: 0.9;
    }
</style>

<script>
    function selectTrack(track) {
        document.getElementById('cohort').value = track;
        document.getElementById('signupForm').classList.remove('hidden');
        document.getElementById('infoBar').classList.remove('hidden');
        document.getElementById('schoolCard')?.classList.remove('active');
        document.getElementById('collegeCard')?.classList.remove('active');
        if (track === 'school') {
            document.getElementById('infoBar').innerText = "School selected: Safer • No Soldering • Guided Projects";
        } else {
            document.getElementById('infoBar').innerText = "College selected: Soldering • Board Making • KiCad";
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById("signupForm");
        const submitBtn = document.getElementById("submitBtn");
        const submitText = document.getElementById("submitText");
        const loadingText = document.getElementById("loadingText");
        const alertContainer = document.getElementById("alertContainer");

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            clearValidationErros();

            setLoadingState(true);

            alertContainer.innerHTML = ""

            const formData = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                agreement: document.getElementById("agreement").checked ? 1 : 0,
                cohort: document.getElementById("cohort").value,
            }

            console.log("Form data from form:-", formData)

            fetch('/signup', {
                method: 'POST',
                body: JSON.stringify(formData),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(data => Promise.reject(data));
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        toastr.success(data.message, 'Success!', {
                            timeOut: 2000,
                            closeButton: true,
                            progressBar: true
                        });
                        form.reset();
                        setTimeout(() => {
                            window.location.href = data.redirect_url;
                        }, 2000);
                    } else {
                        toastr.error(data.message || 'Login failed. Please try again.', 'Error!');
                    }
                })
                .catch(error => {
                    console.error("Signup error:-", error);

                    if (error.errors) {
                        displayValidationErrors(error.errors);
                        showAlert('danger', 'Please correct the errors below.');
                    } else {
                        showAlert('danger', error.message || 'An error occurred. Please try again.');
                    }
                }).finally(() => {
                    setLoadingState(false);
                });
        });

        function displayValidationErrors(errors) {
            for (const [field, messages] of Object.entries(errors)) {
                const input = document.getElementById(field);
                if (input) {
                    input.classList.add('is-invalid');
                    const feedback = input.nextElementSibling;
                    if (feedback && feedback.classList.contains('invalid-feedback')) {
                        feedback.textContent = messages[0];
                    }
                }
            }
        }

        function showAlert(type, message) {
            const alertHtml = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>`;
            alertContainer.innerHTML = alertHtml;
        }

        function setLoadingState(isLoading) {
            submitBtn.disabled = isLoading;

            if (isLoading) {
                submitText.style.display = 'none';
                loadingText.style.display = 'inline-block';
            } else {
                submitText.style.display = 'inline-block';
                loadingText.style.display = 'none';
            }

        }

        function clearValidationErros() {
            const inputs = form.querySelectorAll(".form-control, .form-check-input");
            inputs.forEach(input => {
                input.classList.remove('is-invalid');
                const feedback = input.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = "";
                }
            });
        }


        form.addEventListener('input', function (e) {
            if (e.target.classList.contains('is-invalid')) {
                e.target.classList.remove('is-invalid');
                const feedback = e.target.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = "";
                }
            }
        });

        // Special handling for checkbox
        form.addEventListener('change', function (e) {
            if (e.target.type === 'checkbox' && e.target.classList.contains('is-invalid')) {
                e.target.classList.remove('is-invalid');
                const feedback = e.target.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = '';
                }
            }
        });
    });


</script>





<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection