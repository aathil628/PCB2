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

}
