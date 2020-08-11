<?php

class drawTringle
{
    public function solution($number)
    {
        $limit = 2 * $number - 1;
        $string = '';
        for ($i = 0; $i < $number; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $string .= " &nbsp; ";
            }
            $string .= str_repeat(' * ', $limit);
            $string .= "<br/>";
            $limit = $limit - 2;
        }

        return $string;
    }

}