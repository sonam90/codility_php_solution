<?php

class FrogRiverOne
{
    public function solution($X, $A)
    {
        if (0 === count($A))
            return -1;
        $data = [];
        foreach ($A as $key => $value) {
            if (!array_key_exists($value, $data)) $data[$value] = $value;
            if (count($data) === $X) return $key;
        }
        return -1;
    }

}