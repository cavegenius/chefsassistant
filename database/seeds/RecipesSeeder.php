<?php

use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert into chefsassistant.recipes values(1, 'Tater Tot Casserole', 'The best meal on the planet what is there not to love about this perfect casserole', now(), now());
        \App\Models\Recipe::insert([
            'name' => 'Tater Tot Casserole',
            'prepTime'=>15,
            'cookTime'=>30,
            'yield'=>4,
            'description'=>'The best meal on the planet what is there not to love about this perfect casserole',
            'createdByUser'=>1,
            'private'=>1,
            'approved'=>1,
            'created_at' => '2019-04-06 11:55:04',
            'updated_at' => '2019-04-06 11:55:04'
        ]);
    }
}
