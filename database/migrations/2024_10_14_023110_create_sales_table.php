<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');  // Kolom amount
            $table->timestamps();  // Kolom created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
