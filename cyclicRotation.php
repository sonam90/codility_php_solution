<?php

class cyclicRotation
{

    public function solution($A, $K)
    {
        $extra = [];
        $length = count($A);

        if ($length === 1) return $A;

        for ($i = 0; $i < $K; $i++) {
            for ($j = 0; $j < $length - 1; $j++) {
                $tmp = $A[$length - 1];
                $extra[$j + 1] = $A[$j];
                $extra[0] = $tmp;
            }
            $A = $extra;
        }
        return $A;
    }
}