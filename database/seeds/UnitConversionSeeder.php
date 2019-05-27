<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitConversionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countImperial = DB::table('units')->where(['fullName' => 'count', 'system' => 'Imperial'])->value('id');
        $pinch = DB::table('units')->where('fullName', 'pinch')->value('id');
        $teaspoons = DB::table('units')->where('fullName', 'teaspoon')->value('id');
        $tablespoons = DB::table('units')->where('fullName', 'teaspoon')->value('id');
        $fluidOunce = DB::table('units')->where('fullName', 'fluid ounce')->value('id');
        $cupMass = DB::table('units')->where('fullName', 'cup (mass)')->value('id');
        $cupVol = DB::table('units')->where('fullName', 'cup (volume)')->value('id');
        $pint = DB::table('units')->where('fullName', 'pint')->value('id');
        $quart = DB::table('units')->where('fullName', 'quart')->value('id');
        $gallon = DB::table('units')->where('fullName', 'gallon')->value('id');
        $pound = DB::table('units')->where('fullName', 'pound')->value('id');
        $ounce = DB::table('units')->where('fullName', 'ounce')->value('id');
        $countMetric = DB::table('units')->where(['fullName' => 'count', 'system' => 'Metric'])->value('id');
        $milligram = DB::table('units')->where('fullName', 'milligram')->value('id');
        $centigram = DB::table('units')->where('fullName', 'centigram')->value('id');
        $decigram = DB::table('units')->where('fullName', 'decigram')->value('id');
        $gram = DB::table('units')->where('fullName', 'gram')->value('id');
        $decagram = DB::table('units')->where('fullName', 'decagram')->value('id');
        $hectogram = DB::table('units')->where('fullName', 'hectogram')->value('id');
        $kilogram = DB::table('units')->where('fullName', 'kilogram')->value('id');
        $milliliter = DB::table('units')->where('fullName', 'milliliter')->value('id');
        $centiliter = DB::table('units')->where('fullName', 'centiliter')->value('id');
        $deciliter = DB::table('units')->where('fullName', 'deciliter')->value('id');
        $liter = DB::table('units')->where('fullName', 'liter')->value('id');
        $decaliter = DB::table('units')->where('fullName', 'decaliter')->value('id');
        $hectoliter = DB::table('units')->where('fullName', 'hectoliter')->value('id');
        $kiloliter = DB::table('units')->where('fullName', 'kiloliter')->value('id');

        // The First ID  multiplied by Factor = Second ID || the Second ID diveded by the Factor = First ID
        // Imperial
        \App\Models\UnitConversion::insert([
            'firstId' => $pinch, //Tablespoons
            'secondId' => $teaspoons, // Teaspoons
            'factor' => 16 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $tablespoons, //Tablespoons
            'secondId' => $teaspoons, // Teaspoons
            'factor' => 3 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $cupMass, // Cups
            'secondId' => $tablespoons, // Tablespoons
            'factor' => 16 // x Cups * 16 = x Tablespoons
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $pint, // Pints
            'secondId' => $cupVol, // Cups
            'factor' => 2 // x pint * 2 = x cups
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $quart, // Quarts
            'secondId' => $pint, // Pints
            'factor' => 2 //  
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $gallon, // Gallons
            'secondId' => $quart, // Quarts
            'factor' => 4 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $cupVol, // cups
            'secondId' => $fluidOunce, // Fluid Ounces
            'factor' => 8 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $fluidOunce, // Fluid Ounces
            'secondId' => $tablespoons, // Tablespoons
            'factor' => 2 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $pound, // Pounds
            'secondId' => $ounce, // Ounces
            'factor' => 16 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $fluidOunce, // Fluid Ounce
            'secondId' => $ounce, // Ounce
            'factor' => 1 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $pint, // Pints
            'secondId' => $pound, // Pounds
            'factor' => 1 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $pound, // Pounds
            'secondId' => $cupMass, // Cups
            'factor' => 2 // 
        ]);
        // Metric
        \App\Models\UnitConversion::insert([
            'firstId' => $milliliter, // Milliliters
            'secondId' => $gram, // Grams
            'factor' => 1 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $liter, // Liters
            'secondId' => $kilogram, // Kilograms
            'factor' => 1 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $milligram, // milligrams
            'secondId' => $gram, // grams
            'factor' => 0.001 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $centigram, // centigrams
            'secondId' => $gram, // grams
            'factor' => 0.01 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $decigram, // decigrams
            'secondId' => $gram, // grams
            'factor' => 0.1 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $decagram, // decagrams
            'secondId' => $gram, // grams
            'factor' => 10 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $hectogram, // hectograms
            'secondId' => $gram, // grams
            'factor' => 100 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $kilogram, // kilograms
            'secondId' => $gram, // grams
            'factor' => 1000 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $milliliter, // milliliters
            'secondId' => $liter, // Liters
            'factor' => 0.001 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $centiliter, // centiliters
            'secondId' => $liter, // Liters
            'factor' => 0.01 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $deciliter, // deciliters
            'secondId' => $liter, // Liters
            'factor' => 0.1 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $decaliter, // decaliters
            'secondId' => $liter, // Liters
            'factor' => 10 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $hectoliter, // hectoliters
            'secondId' => $liter, // Liters
            'factor' => 100 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $kiloliter, // kiloliters
            'secondId' => $liter, // Liters
            'factor' => 1000 // 
        ]);
        // Imperial to Metric and back
        \App\Models\UnitConversion::insert([
            'firstId' => $tablespoons, // kiloliters
            'secondId' => $milliliter, // Liters
            'factor' => 15 // 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => $teaspoons, // kiloliters
            'secondId' => $milliliter, // Liters
            'factor' => 5 // 
        ]);
    }
}
