<?php

class BinaryGap
{

    public function solution($N)
    {
        $binary = (string)decbin($N);
        $first = 0;

        for ($i = 0; $i < strlen($binary); $i++) {
            if ($binary[$i] == 1) {
                if (($i - $first) < strlen($binary)) {
                    $length[] = $i - $first;
                    $first = $i;
                }
            }
        }

        return (max($length) !== 0) ? max($length) - 1 : max($length);
    }
}