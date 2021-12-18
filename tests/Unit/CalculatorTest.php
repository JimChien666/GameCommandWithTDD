<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @testdox 測試兩個正整值相加的結果
     */
    public function testAdd()
    {
        // arrange
        $first = 1;
        $second = 2;
        $target = new Calculator();
        $expect = 3;
        // act
        $actural = $target->add($first, $second);
        // assert
        $this->assertSame($expect, $actural);
    }

    /**
     * @testdox 測試兩個負整值相加的結果
     */
    public function testAddWithMinus()
    {
        // arrange
        $first = -1;
        $second = -2;
        $target = new Calculator();
        $expect = -3;
        // act
        $actural = $target->add($first, $second);
        // assert
        $this->assertSame($expect, $actural);
    }

    /**
     * @testdox 測試兩個字串相加的結果，字串相連
     */
    public function testAddWithString()
    {
        // arrange
        $first = "1";
        $second = "2";
        $target = new Calculator();
        $expect = "12";
        // act
        $actural = $target->add($first, $second);
        // assert
        $this->assertSame($expect, $actural);
    }

    /**
     * @testdox 測試兩個浮點數相加的結果
     */
    public function testAddWithFloat()
    {
        // arrange
        $first = 1.1;
        $second = 1.2;
        $target = new Calculator();
        $expect = 2.3;
        // act
        $actural = $target->add($first, $second);
        // assert
        $this->assertSame($expect, $actural);
    }
}
