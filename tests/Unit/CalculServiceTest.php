<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CalculService; // ما تنساش تعيط على السرفيس

class CalculServiceTest extends TestCase
{
    /**
     * تست بسيط باش نتأكدو أن الجمع خدام
     */
    public function test_it_can_sum_two_numbers()
    {
        // 1. نعيطو على السرفيس (Instantiate)
        $service = new CalculService();

        // 2. نجربو الدالة (Action)
        $result = $service->sum(10, 20);

        // 3. نتأكدو من النتيجة (Assert)
        // كنقولو ليه: كنتسناو النتيجة تكون 30
        $this->assertEquals(30, $result);
    }
}