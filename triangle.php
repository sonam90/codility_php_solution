<?php

class triangle
{
    public function solution($A)
    {
        rsort($A);
        $length = count($A);
        $check = 0;
        if ($length < 3) return $check;

        for ($i = 0; $i < $length; $i++) {
            if (($i + 2) <= ($length - 1)) {
                $check = $A[$i + 1] + $A[$i + 2] <=> $A[$i];
                if ($check === 1) {
                    break;
                }
            }
        }

        return ($check < 1) ? 0 : 1;
    }
}