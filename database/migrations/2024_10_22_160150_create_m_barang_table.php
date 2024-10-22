<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->bigIncrements('barang_id'); // Primary key
            $table->bigInteger('kategori_id')->unsigned(); // Foreign key (not nullable)
            $table->string('barang_kode', 10); // kode barang
            $table->string('barang_nama', 100); // nama barang
            $table->integer('harga_beli'); // harga beli
            $table->integer('harga_jual'); // harga jual
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('m_barang');
    }
};
