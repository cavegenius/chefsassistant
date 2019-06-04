<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Category::insert([
            'name' => 'Fresh vegetables',
            'descriptions' => ''
        ]);
        \App\Models\Category::insert([
            'name' => 'Canned foods',
            'descriptions' => ''
        ]);
        \App\Models\Category::insert([
            'name' => 'Meat',
            'descriptions' => ''
        ]);
        \App\Models\Category::insert([
            'name' => '',
            'descriptions' => ''
        ]);
    }
}
