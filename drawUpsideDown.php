<?php

class drawUpsideDown
{
    public function solution($number): string
    {
        $limit = 2 * $number - 1;
        $string = '';
        for ($i = 0; $i < $number; $i++) {
            for ($j = 0; $j < $limit; $j++) {
                $string .= ' * ';

            }
            $limit = $limit - 2;
            $string .= "<br/>";
        }
        return $string;
    }

}