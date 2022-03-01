<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryProductColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('description',5000);
        });

        Schema::table('products', function (Blueprint $table) {
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('form', 'formula', 'description', 'faskes_1', 'faskes_2', 'faskes_3');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
