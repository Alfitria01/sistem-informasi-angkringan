<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('title'); // Ensure 'title' is defined
=======
            $table->string('title');
>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->text('description')->nullable(); // Ensure this line exists
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
