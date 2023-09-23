<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id');
            $table->integer('state');
            $table->dateTime('rental_start_date');
            $table->dateTime('rental_end_date');
            $table->time('rental_start_heure');
            $table->time('rental_end_heure');
            $table->float('total_cost');
            $table->string('payment_status')->nullable();
            $table->string('pyment_method')->nullable();
            $table->bigInteger('kilometrage_start')->nullable();
            $table->bigInteger('kilometrage_end')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
