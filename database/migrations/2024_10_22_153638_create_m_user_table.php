<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->unsignedBigInteger('level_id');
            $table->string('username', 20);
            $table->string('nama', 100);
            $table->string('password', 255); // Pastikan typo 'password' sudah diperbaiki
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('m_user');
    }
};
