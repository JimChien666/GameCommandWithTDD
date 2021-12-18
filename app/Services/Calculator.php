<?php

namespace App\Services;

class Calculator
{
    public function add($x, $y)
    {
        if (!is_string($x) && !is_string($y)) {
            return $x + $y;
        } else {
            return $x . $y;
        }
    }
}
