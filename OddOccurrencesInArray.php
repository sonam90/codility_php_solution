<?php

class OddOccurrencesInArray
{
    public function solution($A)
    {
        $A = array_count_values($A);
        foreach ($A as $key => $value) {
            if ($value % 2 !== 0) {
                return $key;
            }
        }
    }
}