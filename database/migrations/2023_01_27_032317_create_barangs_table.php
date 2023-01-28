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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->bigInteger('id_merk')->unsigned();
            $table->bigInteger('id_kategori')->unsigned();
            $table->string('spesifikasi');
            $table->integer('stok_tersedia');
            $table->integer('harga');

            $table->foreign('id_merk')->references('id')->on('merk_barangs');
            $table->foreign('id_kategori')->references('id')->on('kategori_barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
