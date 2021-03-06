<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagRelationships', function (Blueprint $table) {
            $table->integer('tagId')->unsigned();
            $table->foreign('tagId')->references('id')->on('tags');
            $table->integer('recipeId')->unsigned();
            $table->foreign('recipeId')->references('id')->on('recipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagRelationships');
    }
}
