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
        Schema::create('timetable_tables', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('date');
            $table->string('session1')->nullable();
            $table->string('session2')->nullable();
            $table->string('session3')->nullable();
            $table->unsignedInteger('venue_id')->nullable();
            $table->timestamps();

            $table->foreign('venue_id')->references('venue_id')->on('venue_tb')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetable_tables');
    }
};
