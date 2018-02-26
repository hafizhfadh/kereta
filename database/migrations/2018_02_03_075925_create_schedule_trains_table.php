<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_trains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kereta');
            $table->string('stasiun_keberangkatan');
            $table->string('waktu_keberangkatan');
            $table->string('stasiun_kedatangan');
            $table->string('waktu_kedatangan');
            $table->string('waktu_yang_ditempuh');
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
        Schema::dropIfExists('schedule_trains');
    }
}
