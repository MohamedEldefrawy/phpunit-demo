<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\FactorialCalculator;

class FactorialTest extends TestCase
{
    private static FactorialCalculator $factorialCalculator;

    public static function setUpBeforeClass(): void
    {
        Self::$factorialCalculator = new FactorialCalculator();
        parent::setUpBeforeClass(); // TODO: Change the autogenerated stub
    }

    public function testFactorialOfZero()
    {
        $this->assertTrue(self::$factorialCalculator->factorial(0) === 1);
    }

    public function testFactorialOfOne()
    {

        $this->assertTrue(self::$factorialCalculator->factorial(1) === 1);
    }

    public function testFactorialOfDecimal()
    {

        $this->assertTrue(self::$factorialCalculator->factorial(1.5) === null);
    }

    public function testFactorialOfString()
    {
        $this->assertTrue(self::$factorialCalculator->factorial("abc") === null);
    }

    public function testFactorialOfFive()
    {
        $this->assertTrue(self::$factorialCalculator->factorial(5) === 120);
    }

    public function testRandomNumberBiggerThanThree()
    {
        $randomNumber = rand(4, 10);
        $this->assertTrue(self::$factorialCalculator->factorial($randomNumber) === self::$factorialCalculator->factorial($randomNumber - 1) * $randomNumber);
    }
}