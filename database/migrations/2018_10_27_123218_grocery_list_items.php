<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroceryListItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groceryListItems', function (Blueprint $table) {
            $table->integer('listId')->unsigned();
            $table->foreign('listId')->references('id')->on('groceryLists');
            $table->integer('itemId')->unsigned();
            $table->foreign('itemId')->references('id')->on('items');
            $table->integer('quantity');
            $table->string('unit', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groceryListItems');
    }
}
