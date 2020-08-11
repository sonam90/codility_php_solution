<?php

class MissingInteger
{
    public function solution($A)
    {
        $min = 1;
        sort($A);
        foreach ($A as $key => $value) {
            if ($min === $value) {
                $min++;
            }
        }
        return $min;
    }

}