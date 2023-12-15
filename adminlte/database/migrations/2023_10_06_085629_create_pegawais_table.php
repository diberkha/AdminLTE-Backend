<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nik');
            $table->string('jenis_pegawai');
            $table->string('status_pegawai');
            $table->string('unit');
            $table->string('sub_unit');
            $table->string('pendidikan');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->foreign('jenis_pegawai')->references('id')->on('jenis_pegawai');
            $table->foreign('status_pegawai')->references('id')->on('status_pegawai');
            $table->foreign('pendidikan')->references('id')->on('pendidikan');
            $table->foreign('jenis_kelamin')->references('id')->on('jenis_kelamin');
            $table->foreign('agama')->references('id')->on('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
