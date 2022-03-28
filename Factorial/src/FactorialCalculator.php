<?php

namespace Src;
class FactorialCalculator
{
    public function factorial($number): float|int|null
    {
        if ($number == 0)
            return 1;
        if ($number < 0 || !is_int($number))
            return null;

        return $number * $this->factorial($number - 1);
    }
}