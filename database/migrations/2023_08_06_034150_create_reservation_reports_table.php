<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reservation_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->text('report_content');
            $table->timestamps();
            $table->softDeletes();
            // Define foreign key constraint
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation_reports');
    }
}
