<?php

use Illuminate\Database\Seeder;

class UnitConversionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UnitConversion::insert([
            'firstId' => 2, //Tablespoons
            'secondId' => 1, // Teaspoons
            'factor' => 3 // 3 teaspoons = 1 tablespoon
        ]);

        \App\Models\UnitConversion::insert([
            'firstId' => 5, // Cups
            'secondId' => 2, // Tablespoons
            'factor' => 16 // 16 tablespoons = 1 cup
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 6, // Pints
            'secondId' => 5, // Cups
            'factor' => 2 // 2 cups = 1 pint
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 7, // Quarts
            'secondId' => 6, // Pints
            'factor' => 2 // 2 pints = 1 quart 
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 8, // Gallons
            'secondId' => 7, // Quarts
            'factor' => 4 // 4 quarts = 1 gallon
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 5, // cups
            'secondId' => 3, // Fluid Ounces
            'factor' => 8 // 8 Fluid Ounces = 1 cup
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 3, // Fluid Ounces
            'secondId' => 2, // Tablespoons
            'factor' => 2 // 2 tablespoons = 1 fl oz
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 12, // Pounds
            'secondId' => 13, // Ounces
            'factor' => 16 // 16 ounces = 1 pound
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 3, // Fluid Ounce
            'secondId' => 13, // Ounce
            'factor' => 1 // 1 Fluid Ounce = 1 Ounce
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 6, // Pints
            'secondId' => 12, // Pounds
            'factor' => 1 // 1 pound = 1 pint
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 12, // Pounds
            'secondId' => 5, // Cups
            'factor' => 2 // 2 cups = 1 pound
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 9, // Milliliters
            'secondId' => 15, // Grams
            'factor' => 1 // 1 milliliter = 1 gram
        ]);
        \App\Models\UnitConversion::insert([
            'firstId' => 10, // Liters
            'secondId' => 16, // Kilograms
            'factor' => 1 // 1 kilogram = 1 liter
        ]);
    }
}
