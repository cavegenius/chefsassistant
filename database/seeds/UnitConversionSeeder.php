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
            'firstId' => 2,
            'secondId' => 1,
            'factor' => 3
        ]);
    }
}
