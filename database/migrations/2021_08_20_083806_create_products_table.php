<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->float('price', 5, 2);
            $table->string('author');
            $table->string('editorial');
            $table->boolean('isAvailable');
            $table->boolean('canReserve');
            $table->string('isbn')->nullable();
            $table->string('categoryMain');
            $table->string('categorySecondary')->nullable();
            $table->string('description');
            $table->float('rating', 1, 1)->nullable();
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('dateSale')->nullable();
            $table->string('format');
            $table->string('pages');
            $table->string('tag')->nullable();
            
            

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
        Schema::dropIfExists('products');
    }
}
