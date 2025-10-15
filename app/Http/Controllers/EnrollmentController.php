<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\EnrollmentInquiry;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Log;


class EnrollmentController extends Controller
{
    public function initiateEnrollment(Request $request){
            $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);
        

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors,
            ], 422);
        }

        // $alreadyEnrolled = EnrollmentInquiry::where('course_id', $request->course_id)
        //     ->where('user_id', $request->user_id)
        //     ->exists();
            
        // if ($alreadyEnrolled) {
        //     return response()->json([
        //         'status' => false,
        //         'message' => 'You already entrolled for this course.',
        //     ], 409);
        // }

        try {
            $course = Course::findOrFail($request->course_id);

            // Create the new enrollment inquiry
            $inquiry = EnrollmentInquiry::create([
                'user_id' => Auth::id(),
                'course_id' => $request->course_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => 'pending',
            ]);


            // Generate whatsapp URL
            $whatsappNumber = config('app.whatsapp_number', '918590870849');

            $message = "Hi! I'm interested in enrolling for the course:\n\n" . 
            "📚 *{$course->title}*\n".
            "👤 Name: {$request->name}\n" .
            "📧 Email: {$request->email}\n\n" .
            "Please provide me the enrollment details.\n\n" .
            "Thank you!";

            $encodedMessage = urlencode($message);
            $whatsappURL = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";

            return response()->json([
                'success' => true,
                'whatsapp_url' => $whatsappURL
            ]);
        } catch (\Exception $e) {
             \Log::error('Enrollment exception:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
