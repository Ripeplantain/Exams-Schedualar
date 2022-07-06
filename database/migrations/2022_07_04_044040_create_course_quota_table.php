<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseQuotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_quota', function (Blueprint $table) {
            $table->unsignedInteger('courseid')->default(0)->primary();
            $table->integer('quota')->nullable();
            $table->unsignedInteger('groups')->nullable();

            $table->foreign('courseid')->references('courseid')->on('course_db')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_quota');
    }
}
