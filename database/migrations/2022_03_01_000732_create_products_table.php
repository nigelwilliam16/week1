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
            $table->string("product_name",100);
            $table->bigInteger("product_price");
            $table->string('form');
            $table->string('formula')->nullable();
            $table->string('description')->nullable();
            $table->boolean('faskes_1')->default(false);
            $table->boolean('faskes_2')->default(false);
            $table->boolean('faskes_3')->default(false);
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
