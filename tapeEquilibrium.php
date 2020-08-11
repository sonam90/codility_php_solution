<?php

class tapeEquilibrium
{

    public function solution($A)
    {
        $length = count($A);

        if ($length < 2) return -1;
        if ($length == 2) return abs($A[0] - $A[1]);

        $sum_left = 0;
        $sum_right = 0;
        $res = array();

        for ($i = 0; $i < $length - 1; $i++) {
            $sum_left += $A[$i];

            for ($j = $i + 1; $j < $length; $j++) {
                $sum_right += $A[$j];
            }

            $res[$i] = abs($sum_left - $sum_right);
            $sum_right = 0;
        }

        return min($res);
    }

}