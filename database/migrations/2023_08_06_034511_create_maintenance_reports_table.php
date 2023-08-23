<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceReportsTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->dateTime('maintenance_date');
            $table->text('maintenance_description');
            $table->timestamps();
            $table->softDeletes();
            // Define foreign key constraint
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance_reports');
    }
}
