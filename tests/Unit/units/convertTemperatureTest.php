<?php

namespace Tests\Unit\units;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\units;

class convertTemperatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFtoCTest()
    {
        $units = new units;
        
        $result = $units->convertTemperature(94, 'Farenheit');
        $this->assertEquals($result, 34.44);
        
        $result = $units->convertTemperature(32, 'Farenheit');
        $this->assertEquals($result, 0);

        $result = $units->convertTemperature(12, 'Farenheit');
        $this->assertEquals($result, -11.11);
    }

    public function testCtoFTest() {
        $units = new units;

        $result = $units->convertTemperature(0, 'Celsius');
        $this->assertEquals($result, 32);

        $result = $units->convertTemperature(-18, 'Celsius');
        $this->assertEquals($result, -0.4);

        $result = $units->convertTemperature(26, 'Celsius');
        $this->assertEquals($result, 78.8);
    }

    public function testInvalidUnitTest() {
        $units = new units;

        $result = $units->convertTemperature(32, 'pounds');
        $this->assertEquals($result, 'Invalid unit of measurement for temperature.');
    }

    public function testNaNTest() {
        $units = new units;

        $result = $units->convertTemperature('a', 'Farenheit');
        $this->assertEquals($result, '');
    }
}
