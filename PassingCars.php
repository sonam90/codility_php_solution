<?php

class PassingCars
{
    public function solution($A)
    {
        $length = count($A);
        $found = 0;
        foreach ($A as $key => $value) {
            if ($value === 0) {
                for ($i = $key; $i < $length; $i++) {
                    if ($A[$i] === 1) {
                        $found++;
                    }
                }
            }
        }
        return $found;
    }

}