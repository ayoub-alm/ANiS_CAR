<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reservation_id');
            $table->bigInteger('car_id');
            $table->float('total_cost');
            $table->integer('status'); // or use an enum if supported by your database
            $table->timestamps();
            $table->softDeletes();
            // Define foreign key constraints
            // $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
            // $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
