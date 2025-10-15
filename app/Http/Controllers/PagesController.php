<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages/about');
    }
    public function instructor()
    {
        return view('pages/instructor');
    }
    public function instructor_carousel()
    {
        return view('pages/instructor-carousel');
    }
    public function instructor_details()
    {
        return view('pages/instructor-details');
    }
    public function events()
    {
        return view('pages/events');
    }
    public function events_carousel()
    {
        return view('pages/events-carousel');
    }
    public function event_details()
    {
        return view('pages/event-details');
    }
    public function become_a_teacher()
    {
        return view('pages/become-a-teacher');
    }
    public function testimonials()
    {
        return view('pages/testimonials');
    }
    public function testimonials_carousel()
    {
        return view('pages/testimonials-carousel');
    }
    public function pricing()
    {
        return view('pages/pricing');
    }
    public function gallery()
    {
        return view('pages/gallery');
    }
    public function faq()
    {
        return view('pages/faq');
    }
    public function course(Request $request)
    {
        $q = $request->get('q');
        $courses = Course::query()
            ->when($q, function ($query) use ($q) {
                $query->where('title', 'like', "%$q%")
                      ->orWhere('description', 'like', "%$q%");
            })
            ->latest()
            ->get();

        return view('pages/course', compact('courses', 'q'));
    }
    public function course_carousel()
    {
        return view('pages/course-carousel');
    }
    public function course_list()
    {
        return view('pages/course-list');
    }

    public function course_details($id)
    {
        $course = Course::findOrFail($id);
        $reviews = Review::where('course_id', $id)
            ->where('is_approved', true)
            ->latest()
            ->get();
        Log::info("Course found: ", ['course' => $course]);
        return view('pages/course-details', compact('course', 'reviews'));
    }

    public function products()
    {
        return view('pages/products');
    }
    public function product_details()
    {
        return view('pages/product-details');
    }
    public function cart()
    {
        return view('pages/cart');
    }
    public function checkout()
    {
        return view('pages/checkout');
    }
    public function wishlist()
    {
        return view('pages/wishlist');
    }
    public function sign_up()
    {
        return view('pages/sign-up');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function blog()
    {
        return view('pages/blog');
    }
    public function blog_carousel()
    {
        return view('pages/blog-carousel');
    }
    public function blog_list()
    {
        return view('pages/blog-list');
    }
    public function blog_details_1()
    {
        return view('pages/blog-details-1');
    }
    public function blog_details_2()
    {
        return view('pages/blog-details-2');
    }
    public function blog_details_3()
    {
        return view('pages/blog-details-3');
    }
    public function blog_details_4()
    {
        return view('pages/blog-details-4');
    }
    public function contact()
    {
        return view('pages/contact');
    }


    public function not_found()
    {
        return view('pages/404');
        return redirect()->route('404');
    }
}
