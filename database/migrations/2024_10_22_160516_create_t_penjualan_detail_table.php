<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->bigIncrements('detail_id'); // Primary key
            $table->unsignedBigInteger('penjualan_id'); // Foreign key to t_penjualan
            $table->unsignedBigInteger('barang_id'); // Foreign key to m_barang
            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan')->onDelete('cascade');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
