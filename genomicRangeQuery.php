<?php

class genomicRangeQuery
{

    public function solution($S, $P, $Q)
    {
        $imact = 'ACGT';
        $result = [];
        for ($i = 0; $i < strlen($imact); $i++) {
            $S = str_replace($imact[$i], $i + 1, $S);
        }

        if (1 === strlen($S)) return [(int)$S];

        for ($i = 0; $i < count($P); $i++) {
            if (($Q[$i] - $P[$i]) === 0) {
                $eval[] = $S[$Q[$i]];
            } else {
                for ($j = $P[$i]; $j <= $Q[$i]; $j++) {
                    $eval[] = $S[$j];
                }
            }
            $result[] = (int)min($eval);
            $eval = [];
        }
        return $result;
    }
}