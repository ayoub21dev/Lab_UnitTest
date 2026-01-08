<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CalculService; 

class CalculServiceTest extends TestCase
{
    /**
     * A simple test to verify that the sum function works correctly
     */
    public function test_it_can_sum_two_numbers()
    {
        // 1. Instantiate the service
        $service = new CalculService();

        // 2. Call the function (Action)
        $result = $service->sum(10, 20);

        // 3. Verify the result (Assert)
        // We expect the result to be 30
        $this->assertEquals(30, $result);
    }
}