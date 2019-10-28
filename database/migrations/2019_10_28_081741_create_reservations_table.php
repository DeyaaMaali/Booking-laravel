<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_booking')->default(false);
            $table->dateTime('booking_start_at');
            $table->dateTime('booking_end_at');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('renter_id')->default(null);
//            $table->unsignedBigInteger('owner_id');
//            $table->foreign('owner_id')->references('owner_id')->on('companies');
            $table->foreign('renter_id')->references('renter_id')->on('renters');
            $table->foreign('car_id')->references('id')->on('cars');
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
        Schema::dropIfExists('reservations');
    }
}
