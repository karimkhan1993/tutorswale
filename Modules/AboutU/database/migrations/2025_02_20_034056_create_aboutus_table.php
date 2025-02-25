<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();

            // Statistics fields
            $table->integer('successfully_trained')->default(0);
            $table->integer('classes_completed')->default(0);
            $table->integer('satisfaction_rate')->default(0);
            $table->integer('student_community')->default(0);

            // Course details
            $table->string('popular_course_title1')->nullable();
            $table->text('popular_course_description1')->nullable();
            $table->string('popular_course_cta_text1')->nullable();
            $table->string('popular_course_cta_link1')->nullable();

            $table->string('popular_course_title2')->nullable();
            $table->text('popular_course_description2')->nullable();
            $table->string('popular_course_cta_text2')->nullable();
            $table->string('popular_course_cta_link2')->nullable();


            // Image fields
            $table->string('banner_image')->nullable();
            $table->string('student_image_1')->nullable();
            $table->string('student_image_2')->nullable();

            $table->timestamps();
        });
        // Creating the 'aboutfeature' table
        Schema::create('aboutfeature', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title field
            $table->string('icon')->nullable(); // Icon field
            $table->text('description')->nullable(); // Description field
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutus');
    }
};
