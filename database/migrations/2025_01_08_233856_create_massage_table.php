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
        Schema::create('massage', function (Blueprint $table) {
            $table->id();
            $table->string('email'); // Kolom untuk menyimpan email
            $table->string('nama');  // Kolom untuk menyimpan nama
            $table->text('massage'); // Kolom untuk menyimpan pesan (massage)
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
        Schema::dropIfExists('massage');
    }
};
