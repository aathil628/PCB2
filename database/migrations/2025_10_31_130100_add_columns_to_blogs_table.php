<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->after('title')->unique()->nullable();
            $table->text('excerpt')->nullable()->after('content');
            $table->string('status')->default('draft')->after('excerpt');
            $table->integer('views')->default(0)->after('status');
            $table->string('meta_title')->nullable()->after('views');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->text('meta_keywords')->nullable()->after('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'excerpt',
                'status',
                'views',
                'meta_title',
                'meta_description',
                'meta_keywords'
            ]);
        });
    }
};
