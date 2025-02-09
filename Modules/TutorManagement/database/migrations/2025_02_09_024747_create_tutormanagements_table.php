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
        Schema::create('tutormanagements', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->enum('gender', ['Female', 'Male', 'Other']);
            $table->string('street_address');
            $table->string('area');
            $table->string('city');
            $table->string('pincode');
            $table->string('subject');
            $table->string('qualification'); // ✅ Added qualification column
            $table->text('description')->nullable(); // ✅ Added description column
            $table->integer('experience')->default(0); // ✅ Added experience column (number)
            $table->enum('is_verified', ['Yes', 'No'])->default('No');
            $table->enum('availability', ['Online', 'Offline'])->default('Online'); // ✅ Added availability column
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutormanagements');
    }
};
