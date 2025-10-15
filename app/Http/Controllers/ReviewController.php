<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function storeReview(Request $request){
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'rating' => 'required|integer|between:1,5',
            'message' => 'required|string|max:1000',
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        try{
                $existingReview = Review::where('user_id', Auth::id())
                    ->where('course_id', $request->course_id)
                    ->first();

                if ($existingReview) {
                    $existingReview->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'rating' => $request->rating,
                        'message' => $request->message,
                        'is_approved' => true,
                    ]);

                    return response()->json([
                        'success' => true,
                        'message' => 'Your previous review was updated successfully!',
                        'review' => $existingReview,
                    ]);
                }

                $review = Review::create([
                    'user_id' => Auth::id(),
                    'course_id' => $request->course_id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'rating' => $request->rating,
                    'message' => $request->message,
                    'is_approved' => true,
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Review submitted successfully!.',
                    'review' => $review
            ]);
        } catch (\Exception $e){
            Log::error('Review submission failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Something went worng. Try again later'
            ], 500);
        }
    } 

}
