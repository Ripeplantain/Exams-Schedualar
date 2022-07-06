<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDescTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_desc', function (Blueprint $table) {
            $table->unsignedInteger('courseid')->default(0)->index('courseid');
            $table->text('description')->nullable();

            $table->foreign('courseid')->references('courseid')->on('course_db')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_desc');
    }
}
