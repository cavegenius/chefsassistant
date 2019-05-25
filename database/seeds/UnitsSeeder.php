<?php

use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Unit::insert([
            'fullName' => 'teaspoon',
            'Abbreviation' => 'tsp'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'tablespoon',
            'Abbreviation' => 'tbsp'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'fluid ounce',
            'Abbreviation' => 'fl oz'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'gill',
            'Abbreviation' => 'gill'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'cup',
            'Abbreviation' => 'c'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'pint',
            'Abbreviation' => 'pt'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'quart',
            'Abbreviation' => 'qt'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'gallon',
            'Abbreviation' => 'gal'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'milliliter',
            'Abbreviation' => 'ml'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'liter',
            'Abbreviation' => 'L'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'deciliter',
            'Abbreviation' => 'dl'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'pound',
            'Abbreviation' => 'lb'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'ounce',
            'Abbreviation' => 'oz'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'milligram',
            'Abbreviation' => 'mg'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'gram',
            'Abbreviation' => 'g'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'kilogram',
            'Abbreviation' => 'kg'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'millimeter',
            'Abbreviation' => 'mm'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'centimeter',
            'Abbreviation' => 'cm'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'meter',
            'Abbreviation' => 'm'
        ]);

        \App\Models\Unit::insert([
            'fullName' => 'inch',
            'Abbreviation' => 'in'
        ]);
    }
}
