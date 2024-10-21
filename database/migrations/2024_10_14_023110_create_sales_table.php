<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
<<<<<<< HEAD
    /**
     * Run the migrations.
     *
     * @return void
     */
=======
>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->unsignedBigInteger('product_id'); // Add this column
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Foreign key
            $table->integer('quantity');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
=======
            $table->integer('amount');  // Kolom amount
            $table->timestamps();  // Kolom created_at & updated_at
        });
    }

>>>>>>> bde3e209e51b67f4be84ac8811de3145ce88bef6
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
