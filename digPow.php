<?php
function digPow($n, $p)
{
    $str = str_split((string)$n);
    $arr_length = count($str);
    $sum = 0;
    $k = $p;
    $i = 0;

    while ($i < $arr_length) {
        $sum += pow(intval(array_shift($str)), $k++);
        $i++;

    }

    return ((is_float($sum / $n)) ? -1 : $sum / $n);
}

digPow(46288, 3);