<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('model');
            $table->string('brand');
            $table->string('img');
            $table->string('carName');
            $table->boolean('isbooking')->default(false);
            $table->dateTime('booking_start_at');
            $table->dateTime('booking_end_at');
            $table->string('user')->default(null);
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('cars');
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
        Schema::dropIfExists('cars');
    }
}
