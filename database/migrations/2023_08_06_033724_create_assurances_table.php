<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssurancesTable extends Migration
{
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->float('coverage_amount');
            $table->date('start_date'); // Add start_date column
            $table->date('end_date');   // Add end_date column
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assurances');
    }
}
