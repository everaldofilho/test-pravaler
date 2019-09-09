<?php

namespace App\Exercicio2;

class Calculadora
{

    /**
     * Regra de três:
     * 10 (A) ---- 100% (B)
     *  ? (X) ---- 80% (C)
     * @return float valor do (X)
     */
    public static function regraDeTres(float $a, float $b, float $c)
    {
        return self::divide(($a * $c), $b);
    }

    /**
     * Divide X por Y
     * @return float
     */
    public static function divide(float $x, float $y)
    {
        if ($y == 0) {
            return 0.0;
        }
        return $x / $y;
    }
}
