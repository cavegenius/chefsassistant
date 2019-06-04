<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Item::insert([
            'name' => 'Tater Tots',
            'ingredient' => 1,
            'approved' => 1
        ]);
        \App\Models\Item::insert([
            'name' => 'Ground Beef',
            'ingredient' => 1,
            'approved' => 1
        ]);
        \App\Models\Item::insert([
            'name' => 'Cream of Chicken Soup',
            'ingredient' => 1,
            'approved' => 1
        ]);
        \App\Models\Item::insert([
            'name' => 'Cream of Mushroom Soup',
            'ingredient' => 1,
            'approved' => 1
        ]);
        \App\Models\Item::insert([
            'name' => 'Cheddar Cheese Soup',
            'ingredient' => 1,
            'approved' => 1
        ]);
        \App\Models\Item::insert([
            'name' => '',
            'ingredient' => 1,
            'approved' => 1
        ]);
        \App\Models\Item::insert([
            'name' => '',
            'ingredient' => 1,
            'approved' => 1
        ]);
    }
}
