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
        Schema::table('reviews', function (Blueprint $table) {
            try {
                $table->dropForeign(['user_id']);
            } catch (\Exception $e) {
            }
            
            try {
                $table->dropForeign(['course_id']);
            } catch (\Exception $e) {
            }
            
            try {
                $table->dropUnique(['user_id', 'course_id']);
            } catch (\Exception $e) {
            }
        });
    }

    /**
     * Reverse the migrations.
     */
       public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            
            $table->unique(['user_id', 'course_id']);
        });
    }
};
