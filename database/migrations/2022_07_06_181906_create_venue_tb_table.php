<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenueTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_tb', function (Blueprint $table) {
            $table->increments('venue_id');
            $table->string('venue_name', 50)->nullable();
            $table->integer('exam_capacity')->nullable();
            $table->integer('location_capacity')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('description', 50)->nullable()->default('NULL');
            $table->integer('lab')->default(0);
            $table->integer('centre_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venue_tb');
    }
}
