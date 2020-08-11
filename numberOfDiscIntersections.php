<?php

class numberOfDiscIntersections
{
    public function solution($A)
    {
        $lenght = count($A);
        $data = 0;

        foreach ($A as $key => $value) {
            $sub[] = $key - $value;
            $sum[] = $key + $value;
        }
        rsort($sub);
        sort($sum);
        for ($i = 0; $i < $lenght; $i++) {
            for ($j = 0; $j < $lenght; $j++) {
                if ($i !== 0) {
                    if ($sum[$i] === $sum[$i - 1]) {
                        break;
                    }
                }

                $intersect = 0;
                if ($sum[$i] >= $sub[$j]) {
                    $intersect += ($lenght - $j);
                    break;
                }
            }

            $data += ($intersect - 1) - $i;
        }

        return $data;
    }
}