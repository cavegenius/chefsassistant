<?php

namespace Tests\Unit\units;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\units;

class convertSystemTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testImperialToMetricTest() {
        $units = new units;
        
        $result = $units->convertSystem(4, 'Tablespoons');
        $this->assertEquals($result, 0);

    }

    public function testMetricToImperialTest() {
        $units = new units;

        $result = $units->convertSystem(2, 'Milliliters');
        $this->assertEquals($result, 0);

    }
}
