<?php

class Distinct
{
    public function solution($A)
    {
        if (!$A) return 0;
        $data = [];
        foreach ($A as $item) {
            if (!isset($data[$item])) {
                $data[$item] = $item;
            }
        }
        return count($data);
    }
}