<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarFullInfosTable extends Migration
{
    public function up()
    {
        Schema::create('car_full_infos', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('brand');
            $table->string('year');
            $table->float('price')->nullable();
            $table->string('Fuel')->default('diesel');
            $table->string('color')->nullable();
            $table->boolean('Power_steering')->default(false);
            $table->boolean('audio_input')->default(false);
            $table->boolean('Sleeping_bags')->default(false);
            $table->boolean('Electric_windows')->default(false);
            $table->boolean('Central_locking')->default(false);
            $table->boolean('hands_free_kit')->default(false);
            $table->string('Transmission_type')->default('manuelle');
            $table->boolean('clim')->default(false); 
            $table->integer('vitess_number')->default(4);
            $table->integer('dors_numbers')->default(4); 
            $table->text('description')->nullable();
            $table->unsignedBigInteger('car_id');
            $table->timestamps();
            $table->softDeletes();
            // Define foreign key constraint
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_full_infos');
    }
}
