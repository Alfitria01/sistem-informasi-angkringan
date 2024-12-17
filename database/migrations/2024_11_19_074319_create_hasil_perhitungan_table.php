<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hasil_perhitungan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('pelanggan_id')->constrained('pelanggan'); // Foreign key to pelanggan table
            $table->decimal('skor_akhir', 15, 4); // Final score
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_perhitungan');
    }
};
