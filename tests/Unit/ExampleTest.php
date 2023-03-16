<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }


    /**
     * A basic test example.
     */
    public function test_sum_of_the_two_numbers(): void
    {
        $num1 = 5;
        $num2 = 2;
        $this->assertTrue($num1 + $num2 === 7);
    }

    /**
     * A basic test example.
     */
    public function test_sum_of_the_two_numbers1(): void
    {
        $num1 = 8;
        $num2 = 2;
        $this->assertTrue($num1 + $num2 === 7);
    }
}
