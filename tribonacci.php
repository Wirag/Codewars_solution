<?php
function tribonacci($signature, $n)
{
    $i = 3;

    while ($i < $n) {
        array_push($signature, array_sum(array_slice($signature, -3)));
        $i++;
    }
    return( array_slice($signature, 0, $n));
}

tribonacci([1,1,1],1);