<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nama_customer');
            $table->date('tanggal_pesan');
            $table->string('nama_kereta');
            $table->string('stasiun_keberangkatan');
            $table->string('stasiun_kedatangan');
            $table->dateTime('waktu_keberangkatan');
            $table->dateTime('waktu_pulang')->nullable();
            $table->string('jumlah_tiket');
            $table->string('tarif_pertiket');
            $table->string('total_bayar')->nullable();
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
        Schema::table('bookings', function (Blueprint $table) {
            Schema::dropIfExists('bookings');
        });
    }
}
