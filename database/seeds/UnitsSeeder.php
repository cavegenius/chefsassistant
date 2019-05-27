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
            'fullName' => 'count',
            'Abbreviation' => 'ct',
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'pinch',
            'Abbreviation' => 'pinch',
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'teaspoon',
            'Abbreviation' => 'tsp',
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'tablespoon',
            'Abbreviation' => 'tbsp',
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'fluid ounce',
            'Abbreviation' => 'fl oz',
            'type' => 'Volume',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'gill',
            'Abbreviation' => 'gill',
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'cup (mass)',
            'Abbreviation' => 'c',
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'cup (volume)',
            'Abbreviation' => 'c',
            'type' => 'Volume',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'pint',
            'Abbreviation' => 'pt',
            'type' => 'Volume',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'quart',
            'Abbreviation' => 'qt',
            'type' => 'Volume',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'gallon',
            'Abbreviation' => 'gal',
            'type' => 'Volume',
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
            'type' => 'Mass',
            'system' => 'Imperial'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'count',
            'Abbreviation' => 'ct',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'milligram',
            'Abbreviation' => 'mg',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'centigram',
            'Abbreviation' => 'cg',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'decigram',
            'Abbreviation' => 'dg',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'gram',
            'Abbreviation' => 'g',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'decagram',
            'Abbreviation' => 'dag',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'hectogram',
            'Abbreviation' => 'hg',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'kilogram',
            'Abbreviation' => 'kg',
            'type' => 'Mass',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'milliliter',
            'Abbreviation' => 'ml',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'centiliter',
            'Abbreviation' => 'cl',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'deciliter',
            'Abbreviation' => 'dl',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'liter',
            'Abbreviation' => 'L',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'decaliter',
            'Abbreviation' => 'dal',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'hectoliter',
            'Abbreviation' => 'hl',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
        \App\Models\Unit::insert([
            'fullName' => 'kiloliter',
            'Abbreviation' => 'kl',
            'type' => 'Volume',
            'system' => 'Metric'
        ]);
    }
}
