<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train__classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exec_seat');
            $table->integer('bus_seat');
            $table->integer('eco_seat');
            $table->integer('price');
            $table->integer('train_id')->unsigned()->index()->nullable();
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');
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
        Schema::dropIfExists('train__classes');
    }
}
