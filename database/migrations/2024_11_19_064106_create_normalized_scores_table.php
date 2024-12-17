<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalizedScoresTable extends Migration
{
    public function up()
    {
        Schema::create('normalized_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternative_id')->constrained('alternatives')->onDelete('cascade');
            $table->foreignId('criteria_id')->constrained('criteria')->onDelete('cascade');
            $table->decimal('value', 10, 4); // Normalized score value
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('normalized_scores');
    }
}
