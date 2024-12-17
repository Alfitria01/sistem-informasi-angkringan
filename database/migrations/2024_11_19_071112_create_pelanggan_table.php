<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama'); // Customer's name
            $table->decimal('jumlah_harga', 15, 2); // Amount of money spent
            $table->integer('jumlah_pesanan'); // Number of orders
            $table->integer('frekuensi_kunjungan'); // Frequency of visits
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
};
