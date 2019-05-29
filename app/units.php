<?php

namespace App;

class units {
    // How will I handle Count?
    public $mass = [
        'pounds' => ['abbreviation' => 'lb', 'system' => 'Imperial', 'conversions' => ['to' => 'grams', 'factor'=>453.592]],
        'ounces' => ['abbreviation' => 'oz', 'system' => 'Imperial', 'conversions' => ['to' => 'grams', 'factor'=>28.35]],
        'milligrams' => ['abbreviation' => 'mg', 'system' => 'Imperial', 'conversions' => ['to' => 'grams', 'factor'=>0.001]],
        'centigrams' => ['abbreviation' => 'cg', 'system' => 'Metric', 'conversions' => ['to' => 'grams', 'factor'=>0.01]],
        'decigrams' => ['abbreviation' => 'dg', 'system' => 'Metric', 'conversions' => ['to' => 'grams', 'factor'=>0.1]],
        'grams' => ['abbreviation' => 'g', 'system' => 'Metric', 'conversions' => ['to' => 'ounces', 'factor'=>0.035274]],
        'decagrams' => ['abbreviation' => 'dag', 'system' => 'Metric', 'conversions' => ['to' => 'grams', 'factor'=>10]],
        'hectagrams' => ['abbreviation' => 'hg', 'system' => 'Metric', 'conversions' => ['to' => 'grams', 'factor'=>100]],
        'kilograms' => ['abbreviation' => 'kg', 'system' => 'Metric', 'conversions' => ['to' => 'grams', 'factor'=>1000]]
    ];
    public $volume = [
        'pinchs' => ['abbreviation' => 'pinch', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>.31]],
        'teaspoons' => ['abbreviation' => 'tsp', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>5]],
        'tablespoons' => ['abbreviation' => 'tbsp', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>15]],
        'fluid ounces' => ['abbreviation' => 'fl oz', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>30]],
        'cups' => ['abbreviation' => 'c', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>225]],
        'pints' => ['abbreviation' => 'pt', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>500]],
        'quarts' => ['abbreviation' => 'qt', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>1000]],
        'gallons' => ['abbreviation' => 'gal', 'system' => 'Imperial', 'conversions' => ['to' => 'milliliters', 'factor'=>4000]],
        'milliliters' => ['abbreviation' => 'ml', 'system' => 'Metric', 'conversions' => ['to' => 'liters', 'factor'=>0.001]],
        'centiliters' => ['abbreviation' => 'cl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliters', 'factor'=>10]],
        'deciliters' => ['abbreviation' => 'dl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliters', 'factor'=>100]],
        'liters' => ['abbreviation' => 'l', 'system' => 'Metric', 'conversions' => ['to' => 'milliliters', 'factor'=>1000]],
        'decaliters' => ['abbreviation' => 'dal', 'system' => 'Metric', 'conversions' => ['to' => 'milliliters', 'factor'=>10000]],
        'hectaliters' => ['abbreviation' => 'hl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliters', 'factor'=>100000]],
        'kiloliters' => ['abbreviation' => 'kl', 'system' => 'Metric', 'conversions' => ['to' => 'milliliters', 'factor'=>1000000]]
    ];
    public $temperature = [
        'Fahrenheit' => ['abbreviation' => 'F', 'system' => 'Imperial'],
        'Celsius' => ['abbreviation' => 'C', 'system' => 'Metric']
    ];

    public function getType($unit) {
        if( array_key_exists( $unit, $mass) ) {
            return 'mass';
        } else if(array_key_exists( $unit, $volume) ) {
            return 'volume';
        }
    }

    public function getSystem($unit) {
        $type = getType($unit);
        
        return $$type[$unit]['system'];
    }
    
    /**
     * Converts a unit of measurement to the opposite system
     * 
     * @param $qty
     * @param $unit
     * @return float
     */
    public function convertSystem($qty, $unit){
        $type = getType($unit);
        $system = getSystem($unit);



    }
    
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
                $result = ($value - 32)*5/9;
                return round($result, 2);
                break;
            case 'Celsius':
                $result = ($value*9/5)+32;
                return round($result, 2);
                break;
            default:
               return "Invalid unit of measurement for temperature.";
        }
    }
}