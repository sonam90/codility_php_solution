<?php

class PermCheck
{
    public function solution($A)
    {
        $min = 1;
        $noPrem = 1;

        sort($A);

        foreach ($A as $key => $value) {
            if ($min === $value) {
                $min++;
            } else {
                $noPrem = 0;
            }
        }

        return $noPrem;
    }
}