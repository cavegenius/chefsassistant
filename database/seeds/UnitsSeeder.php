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
            'Abbreviation' => 'tsp',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'tablespoon',
            'Abbreviation' => 'tbsp',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'fluid ounce',
            'Abbreviation' => 'fl oz',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'gill',
            'Abbreviation' => 'gill',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'cup',
            'Abbreviation' => 'c',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'pint',
            'Abbreviation' => 'pt',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'quart',
            'Abbreviation' => 'qt',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'gallon',
            'Abbreviation' => 'gal',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'milliliter',
            'Abbreviation' => 'ml',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'liter',
            'Abbreviation' => 'L',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'deciliter',
            'Abbreviation' => 'dl',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'pound',
            'Abbreviation' => 'lb',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'ounce',
            'Abbreviation' => 'oz',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'inch',
            'Abbreviation' => 'in',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'milligram',
            'Abbreviation' => 'mg',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'gram',
            'Abbreviation' => 'g',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'kilogram',
            'Abbreviation' => 'kg',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'millimeter',
            'Abbreviation' => 'mm',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'centimeter',
            'Abbreviation' => 'cm',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'meter',
            'Abbreviation' => 'm',
            'system' => 'Metric'
        ]);
    }
}
