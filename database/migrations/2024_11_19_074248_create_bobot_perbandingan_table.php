<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bobot_perbandingan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->decimal('c1_c1', 3, 2); // C1 to C1 comparison
            $table->decimal('c1_c2', 3, 2); // C1 to C2 comparison
            $table->decimal('c1_c3', 3, 2); // C1 to C3 comparison
            $table->decimal('c2_c1', 3, 2);
            $table->decimal('c2_c2', 3, 2); // C2 to C2 comparison
            $table->decimal('c2_c3', 3, 2); // C2 to C3 comparison
            $table->decimal('c3_c1', 3, 2); // C3 to C3 comparison
            $table->decimal('c3_c2', 3, 2); // C3 to C3 comparison
            $table->decimal('c3_c3', 3, 2); // C3 to C3 comparison
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bobot_perbandingan');
    }
};
