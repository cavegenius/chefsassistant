<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitsController extends Controller {
    // How will I handle Count?
    public $mass = [
        'pound' => ['abbreviation' => 'lb', 'system' => 'Imperial', 'conversions' => ['to' => 'gram', 'factor'=>453.592]],
        'ounce' => ['abbreviation' => 'oz', 'system' => 'Imperial', 'conversions' => ['to' => 'gram', 'factor'=>28.35]],
        'milligram' => ['abbreviation' => 'mg', 'system' => 'Imperial', 'conversions' => ['to' => 'gram', 'factor'=>0.001]],
        'centigram' => ['abbreviation' => 'cg', 'system' => 'Metric', 'conversions' => ['to' => 'gram', 'factor'=>0.01]],
        'decigram' => ['abbreviation' => 'dg', 'system' => 'Metric', 'conversions' => ['to' => 'gram', 'factor'=>0.1]],
        'gram' => ['abbreviation' => 'g', 'system' => 'Metric', 'conversions' => ['to' => 'ounce', 'factor'=>0.035274]],
        'decagram' => ['abbreviation' => 'dag', 'system' => 'Metric', 'conversions' => ['to' => 'gram', 'factor'=>10]],
        'hectagram' => ['abbreviation' => 'hg', 'system' => 'Metric', 'conversions' => ['to' => 'gram', 'factor'=>100]],
        'kilogram' => ['abbreviation' => 'kg', 'system' => 'Metric', 'conversions' => ['to' => 'gram', 'factor'=>1000]]
    ];
    public $volume = [
        'pinch' => ['abbreviation' => 'pinch', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>.31]],
        'teaspoon' => ['abbreviation' => 'tsp', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>5]],
        'tablespoon' => ['abbreviation' => 'tbsp', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>15]],
        'fluid ounce' => ['abbreviation' => 'fl oz', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>30]],
        'cup' => ['abbreviation' => 'c', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>225]],
        'pint' => ['abbreviation' => 'pt', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>500]],
        'quart' => ['abbreviation' => 'qt', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>1000]],
        'gallon' => ['abbreviation' => 'gal', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliter', 'factor'=>4000]],
        'milliliter' => ['abbreviation' => 'ml', 'system' => 'Metric', 'conversions' => ['to' => 'liter', 'factor'=>0.001]],
        'centiliter' => ['abbreviation' => 'cl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliter', 'factor'=>10]],
        'deciliter' => ['abbreviation' => 'dl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliter', 'factor'=>100]],
        'liter' => ['abbreviation' => 'l', 'system' => 'Metric', 'conversions' => ['to' => 'milliliter', 'factor'=>1000]],
        'decaliter' => ['abbreviation' => 'dal', 'system' => 'Metric', 'conversions' => ['to' => 'milliliter', 'factor'=>10000]],
        'hectaliter' => ['abbreviation' => 'hl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliter', 'factor'=>100000]],
        'kiloliter' => ['abbreviation' => 'kl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliter', 'factor'=>1000000]]
    ];
    public $temperature = [
        'Fahrenheit' => ['abbreviation' => 'F', 'system' => 'Imperial'],
        'Celsius' => ['abbreviation' => 'C', 'system' => 'Metric']
    ];

    /**
     * Converts a temprature to and from imperial/metric
     * 
     * @param $value 
     * @param $unit (the current unit to be converted from)
     * @return float
     */
    public function convertTemperature( $value, $unit ) {
        switch ($unit) {
            case 'Farenheit':
                return ($value - 32)*5/9;
                break;
            case 'Celsius':
                return ($value*9/5)+32;
                break;
            default:
               return "Invalid unit of measurement for temperature.";
        }
    }
}