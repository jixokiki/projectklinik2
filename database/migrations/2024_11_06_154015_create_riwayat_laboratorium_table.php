<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_laboratorium', function (Blueprint $table) {
            // $table->unsignedBigInteger('id_riwayat')->index();
            // $table->unsignedBigInteger('id_laboratorium')->index();
            // $table->unsignedBigInteger('id_riwayat')->nullable()->index();
            // $table->unsignedBigInteger('id_laboratorium')->nullable()->index();
            $table->id('id_riwayat'); // Automatically sets this as an auto-incrementing primary key
            $table->string('volume')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('waktu')->nullable();
            $table->string('prioritas')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('permintaan')->nullable();
            $table->string('metode')->nullable();
            $table->string('sumber')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('cara')->nullable();
            $table->string('kondisi')->nullable();
            $table->date('tanggal_pengambilan')->nullable();
            $table->date('tanggal_fiksasi')->nullable();
            $table->string('cairan')->nullable();
            $table->string('interpretasi')->nullable();
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
        Schema::dropIfExists('riwayat_laboratorium');
    }
};