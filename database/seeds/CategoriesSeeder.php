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
            'name' => 'Fresh vegetables'
        ]);
        \App\Models\Category::insert([
            'name' => 'Canned foods'
        ]);
        \App\Models\Category::insert([
            'name' => 'Meat'
        ]);
        \App\Models\Category::insert([
            'name' => ''
        ]);
    }
}
