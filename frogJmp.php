<?php

class frogJmp
{
    public function solution($X, $Y, $D)
    {
        $count = ($Y - $X) / $D;
        return (int) ceil($count);
    }

}