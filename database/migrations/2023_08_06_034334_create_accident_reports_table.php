<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentReportsTable extends Migration
{
    public function up()
    {
        Schema::create('accident_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('reservation_id');
            $table->dateTime('accident_date');
            $table->text('accident_description');
            $table->timestamps();
            $table->softDeletes();
            // Define foreign key constraint
            // $table->foreign('reservation_id')->references('id')->on('reservations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('accident_reports');
    }
}
