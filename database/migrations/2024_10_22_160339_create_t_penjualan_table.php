<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->bigIncrements('penjualan_id'); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key (not nullable)
            $table->string('pembeli', 50); // Nama pembeli
            $table->string('penjualan_kode', 20); // Kode penjualan
            $table->dateTime('penjualan_tanggal'); // Tanggal penjualan
            $table->timestamps(); // created_at and updated_at

            // Define foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Assuming it refers to the users table
        });
    }

    public function down() {
        Schema::dropIfExists('t_penjualan');
    }
};
