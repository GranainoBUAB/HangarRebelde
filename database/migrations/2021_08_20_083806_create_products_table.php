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
            $table->string('title',100);
            $table->decimal('price', 8, 2);
            $table->string('author1',50);
            $table->string('author2',50)->nullable();
            $table->string('author3',50)->nullable();
            $table->string('author4',50)->nullable();
            $table->string('author5',50)->nullable();
            $table->string('author6',50)->nullable();
            $table->string('editorial',50)->nullable();
            $table->boolean('isAvailable');
            $table->boolean('canReserve');
            $table->string('isbn',13)->nullable();
            $table->string('categoryMain',50);
            $table->string('categorySecondary',50)->nullable();
            $table->text('description');
            $table->float('rating', 2, 1)->nullable();
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('dateSale')->nullable();
            $table->string('format',50);
            $table->integer('pages');
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
