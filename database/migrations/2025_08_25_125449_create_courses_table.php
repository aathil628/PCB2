<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('instructor_name')->nullable();
        $table->integer('instructor_exp')->nullable();
        $table->text('instructor_desc')->nullable();
        $table->string('duration')->nullable();
        $table->string('skill_level')->nullable();
        $table->string('languages')->nullable();
        $table->boolean('certificate')->default(false);
        $table->decimal('rating_value', 3, 1)->default(0);
        $table->integer('rating_count')->default(0);
        $table->text('description')->nullable();
        $table->string('image_url')->nullable();
        $table->string('preview_video_url')->nullable();
        $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
