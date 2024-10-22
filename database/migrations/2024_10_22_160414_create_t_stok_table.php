<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->bigIncrements('stok_id'); // Primary key
            $table->unsignedBigInteger('barang_id'); // Foreign key to m_barang
            $table->unsignedBigInteger('user_id'); // Foreign key to users
            $table->dateTime('stok_tanggal'); // Date and time of stock change
            $table->integer('stok_jumlah'); // Quantity of stock
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Assuming it references the users table
        });
    }

    public function down() {
        Schema::dropIfExists('t_stok');
    }
};
