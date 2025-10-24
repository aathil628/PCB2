<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

     protected $table = 'courses';
    protected $fillable = [
        'title',
        'instructor_name',
        'instructor_exp',
        'instructor_desc',
        'course_poster',
        'duration',
        'skill_level',
        'languages',
        'certificate',
        'rating_value',
        'rating_count',
        'description',
        'image_url',
        'preview_video_url',
    ];

    public function purchasers()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }

    // Remap legacy course titles to new names for display without altering DB
    public function getTitleAttribute($value)
    {
        $normalized = trim(preg_replace('/\s+/', ' ', (string) $value));

        $map = [
            'Printed Circuit Board Design: From Concept to Production (3 day course)' => 'PCB Kickstart Course: 3-Day',
            'Printed Circuit Board Design: From Concept to Production(3 day course)' => 'PCB Kickstart Course: 3-Day',
            'Practical PCB Design: A 1-Month Journey' => 'PCB Maker Course: 1-Month',
            'Mastering Advanced PCB Design and Analysis' => 'Electronics Innovation Program: 1-Year',
        ];

        return $map[$normalized] ?? $value;
    }

}
