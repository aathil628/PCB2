<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnrollmentInquiry extends Model
{

    protected $fillable = [
        'user_id',
        'course_id',
        'name',
        'email',
        'phone',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function course(): BelongsTo{
        return $this->belongsTo(Course::class);
    }

    // Scope for filtering by status
    public function scopeByStatus($query, $status){
        return $query->where('status', $status);
    }

    // Scope for filtering by recent inquiries
    public function scopeRecent($query, $days = 7){
        return $query->where('created_at', '>=', now()->subDays($days));
    }
    
}
