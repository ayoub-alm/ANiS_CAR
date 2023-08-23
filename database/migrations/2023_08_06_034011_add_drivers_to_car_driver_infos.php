<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDriversToCarDriverInfos extends Migration
{
    public function up()
    {
        Schema::create('car_driver_infos', function (Blueprint $table) {
            // Driver 1 info
            $table->string('driver1_name');
            $table->string('driver1_cin');
            $table->string('driver1_license');
            $table->softDeletes();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('car_id');
            // Driver 2 info
            $table->string('driver2_name')->nullable();
            $table->string('driver2_cin')->nullable();
            $table->string('driver2_license')->nullable();
            // Define foreign key constraints
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('car_driver_infos', function (Blueprint $table) {
            $table->dropColumn([
                'driver1_name', 'driver1_cin', 'driver1_license',
                'driver2_name', 'driver2_cin', 'driver2_license',
            ]);
        });
    }
}
