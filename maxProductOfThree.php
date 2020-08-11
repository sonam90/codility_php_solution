<?php

class maxProductOfThree
{
    public function solution($A)
    {
        $result = [0];
        $length = count($A);

        if (!$A) return 0;
        if ($length < 3) return 0;
        if ($length === 3) {
            return $A[0] * $A[1] * $A[2];
        }

        sort($A);
        $length = count($A);
        if ($length > 3) {
            $result = [$A[0] * $A[1] * $A[$length - 1], $A[$length - 3] * $A[$length - 2] * $A[$length - 1]];
        }

        return max($result);
    }
}