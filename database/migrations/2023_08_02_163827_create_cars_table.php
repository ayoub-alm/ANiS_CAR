<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

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
            $table->id();
            $table->string('name');
            $table->uuid('uuid')->default(\Illuminate\Support\Facades\DB::raw('UUID()'))->unique();
            $table->string('img');
            $table->string('matricule');
            $table->integer('state');
            $table->unsignedBigInteger('categorie_id');
            // $table->unsignedBigInteger('car_full_info_id');
            $table->float('price');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categorie_id')->references('id')->on('car_categories')->onDelete('cascade');
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
