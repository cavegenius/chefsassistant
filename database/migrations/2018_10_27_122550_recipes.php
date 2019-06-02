<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('prepTime', 45);
            $table->string('cookTime', 45);
            $table->string('yield', 45);
            $table->string('description', 500);
            $table->string('nutrition', 500);
            $table->string('source', 500);
            $table->integer('createByUser');
            $table->tinyInteger('private');
            $table->boolean('approved');
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
        Schema::dropIfExists('recipes');
    }
}
