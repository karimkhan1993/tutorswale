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
        Schema::create('subjectmanagements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id'); // Fixing data type
            $table->string( 'subjects')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Adding foreign key constraint
            $table->foreign('class_id')->references('id')->on('classmanagements')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('subjectmanagements');
    }

};
