<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('index');
// Add your normal frontend routes here...
// Example:
// Route::get('/about', [PagesController::class, 'about'])->name('about');

// ----------------------
// Admin Routes
// ----------------------
require __DIR__ . '/admin.php';


// User Authentication Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('pages.profile');
    })->name('profile');

    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::get('/profile-details', [ProfileController::class, 'profileDetails'])->name('profile.details');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 
});


    Route::post('/forgot-password', [AuthController::class, 'forgetPassword'])->name('forgot-password');
    Route::get('/reset-password', function (Request $request) {
        return view('pages\reset-password', [
            'token' => $request->token,
            'email' => $request->email
        ]);
    })->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');




Route::get('sign-up', [PagesController::class, 'sign_up'])->name('sign-up');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');
Route::get('login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// OTP auth endpoints
Route::post('/auth/send-otp', [AuthController::class, 'sendOtp'])->name('auth.sendOtp');
Route::post('/auth/verify-otp', [AuthController::class, 'verifyOtp'])->name('auth.verifyOtp');

  Route::get('course-details/{id}', [PagesController::class, 'course_details'])->name('course-details');
    // Route::get('course-details', [PagesController::class, 'course_details'])->name('course-details');

    Route::post('/enrollment/initiate', [EnrollmentController::class, 'initiateEnrollment'])->name('enrollment.initiate');

    Route::post('/reviews', [ReviewController::class, 'storeReview'])->name('reviews.store');

    Route::get('products', [PagesController::class, 'products'])->name('products');
    Route::get('product-details', [PagesController::class, 'product_details'])->name('product-details');
    Route::get('cart', [PagesController::class, 'cart'])->name('cart');
    Route::get('checkout', [PagesController::class, 'checkout'])->name('checkout');
    Route::get('wishlist', [PagesController::class, 'wishlist'])->name('wishlist');


    Route::get('blog', [PagesController::class, 'blog'])->name('blog');
    Route::get('blog-carousel', [PagesController::class, 'blog_carousel'])->name('blog-carousel');
    Route::get('blog-list', [PagesController::class, 'blog_list'])->name('blog-list');
    Route::get('blog-details/1', [PagesController::class, 'blog_details_1'])->name('blog-details-1');
    Route::get('blog-details/2', [PagesController::class, 'blog_details_2'])->name('blog-details-2');
    Route::get('blog-details/3', [PagesController::class, 'blog_details_3'])->name('blog-details-3');
    Route::get('blog-details/4', [PagesController::class, 'blog_details_4'])->name('blog-details-4');

    Route::get('contact', [PagesController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    // Contact confirmation page
    Route::get('/contact/confirmation', function () {
        return view('pages.contact-confirmation');
    })->name('contact.confirmation');

    Route::get('/privacy-policy', function () {
        return view('pages.privacypolicy');
    })->name('privacy');
    Route::get('/refund-policy', function () {
        return view('pages.refundpolicy');
    })->name('refund');
    Route::get('/terms-condition', function () {
        return view('pages.termsconditions');
    })->name('terms');


        Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/index2', [HomeController::class, 'index2'])->name('index2');
    Route::get('/index3', [HomeController::class, 'index3'])->name('index3');
    Route::get('/index-one-page', [HomeController::class, 'index_one_page'])->name('index-one-page');
    Route::get('/index2-one-page', [HomeController::class, 'index2_one_page'])->name('index2-one-page');
    Route::get('/index3-one-page', [HomeController::class, 'index3_one_page'])->name('index3-one-page');
    Route::get('/index-dark', [HomeController::class, 'index_dark'])->name('index-dark');

    // Pages
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('about', [PagesController::class, 'about'])->name('about');
    Route::get('instructor', [PagesController::class, 'instructor'])->name('instructor');
    Route::get('instructor-carousel', [PagesController::class, 'instructor_carousel'])->name('instructor-carousel');
    Route::get('instructor-details', [PagesController::class, 'instructor_details'])->name('instructor-details');
    Route::get('events', [PagesController::class, 'events'])->name('events');
    Route::get('events-carousel', [PagesController::class, 'events_carousel'])->name('events-carousel');
    Route::get('event-details', [PagesController::class, 'event_details'])->name('event-details');
    Route::get('become-a-teacher', [PagesController::class, 'become_a_teacher'])->name('become-a-teacher');
    Route::get('testimonials', [PagesController::class, 'testimonials'])->name('testimonials');
    Route::get('testimonials-carousel', [PagesController::class, 'testimonials_carousel'])->name('testimonials-carousel');
    Route::get('pricing', [PagesController::class, 'pricing'])->name('pricing');
    Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
    Route::get('faq', [PagesController::class, 'faq'])->name('faq');
    Route::get('course', [PagesController::class, 'course'])->name('course');
    Route::get('course-carousel', [PagesController::class, 'course_carousel'])->name('course-carousel');
    Route::get('course-list', [PagesController::class, 'course_list'])->name('course-list');





Route::get('/landing', function () {
    return view('landing');
});





Route::fallback([PagesController::class, 'not_found']);

