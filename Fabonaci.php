<?php

class Fabonaci
{

    public function solution($num)
    {
        $a = 0;
        $b = 1;
        $c = 0;
        $series = $a . ' ';
        $series .= $b . ' ';
        while ($c <= $num) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
            $series .= $c . ' ';
        }

        return $series;
    }
}