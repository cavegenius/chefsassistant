<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipeIngredients', function (Blueprint $table) {
            $table->integer('recipeId')->unsigned();
            $table->foreign('recipeId')->references('id')->on('recipes');
            $table->integer('itemId')->unsigned();
            $table->foreign('itemId')->references('id')->on('items');
            $table->integer('amount');
            $table->integer('unitId')->unsigned();
            $table->foreign('unitId')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipeIngredients');
    }
}
