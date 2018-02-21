<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWagonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wagons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('train_id')->unsigned();
            $table->foreign('train_id')
                  ->references('id')->on('trains')
                  ->onDelete('cascade');
            $table->enum('class', ['Executive', 'Busines', 'Economy']);
            $table->integer('price');
            $table->integer('seat');
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
        Schema::dropIfExists('wagons');
    }
}
