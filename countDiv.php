<?php

class countDiv
{
    public function solution($A, $B, $K)
    {
        if ($B - $A === 0 && $B == 0) return 1;
        if ($B - $A === 0 && $B > $K && $B % $K === 0) return 1;
        if ($B - $A === 0 && $B > $K && $B % $K > 0) return 0;
        if ($B < $K) return 0;

        return (int)((floor($B / $K) - floor(($A - 1) / $K)));

        /* Less performance
         * if ($B - $A === 0 && $B == 0) return 1;
          if ($B - $A === 0 && $B > $K && $B % $K === 0 ) return 1;
          if ($B - $A === 0 && $B > $K && $B % $K > 0 ) return 0;
          if ($B < $K) return 0;

          for ($i = $A; $i <= $B; $i++) {
              if ($i % $K === 0) {
                  $result++;
              }
          }

          return $result;*/
    }
}