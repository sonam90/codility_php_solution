<?php

class maxCounters
{
    public function solution($N, $A)
    {
        $data = array_fill(0, $N, 0);
        foreach ($A as $key => $value) {
            if ($value > $N) {
                $data = array_fill(0, $N, max($data));
            } else {
                $data[$value - 1] += 1;
            }
        }
        return $data;
    }
}