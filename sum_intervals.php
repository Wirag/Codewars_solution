<?php

function sum_intervals(array $intervals): int
{
    $sum = 0;

    if (!$intervals) {
        return $sum;
    }

    sort($intervals);

    $part_intervals = [$intervals[0]];

    foreach ($intervals as $el) {

        $last_part_el = end($part_intervals);


        if (($last_part_el[0] <= $el[0]) && ($last_part_el[0] <= $el[1]) && $last_part_el[1] >= $el [0] && ($last_part_el[1] <= $el[1])) {
            $last_part_el[1] = $el[1];
            array_pop($part_intervals);
            $part_intervals[] = $last_part_el;

        } elseif ($last_part_el[1] < $el [0]) {
            array_push($part_intervals, $el);
        }

    }

    foreach ($part_intervals as $el) {
        $sum += $el[1] - $el[0];
    }

    return $sum;
}

//sum_intervals([
//    [1, 5],
//    [10, 20],
//    [1, 6],
//    [16, 19],
//    [5, 11]
//]);

//sum_intervals([
//    [1, 4],
//    [7, 10],
//    [3, 5]
//]);

//  sum_intervals(
//      array(
//          0 =>
//              array(
//                  0 => -478,
//                  1 => 428,
//              ),
//          1 =>
//              array(
//                  0 => -414,
//                  1 => -245,
//              ),
//          2 =>
//              array(
//                  0 => -210,
//                  1 => 18,
//              ),
//          3 =>
//              array(
//                  0 => -31,
//                  1 => 194,
//              ),
//          4 =>
//              array(
//                  0 => -31,
//                  1 => 336,
//              ),
//          5 =>
//              array(
//                  0 => 2,
//                  1 => 341,
//              ),
//      )
//  );

sum_intervals(array(
    0 =>
        array(
            0 => -400,
            1 => 291,
        ),
    1 =>
        array(
            0 => -352,
            1 => 241,
        ),
    2 =>
        array(
            0 => -320,
            1 => 414,
        ),
    3 =>
        array(
            0 => -204,
            1 => 235,
        ),
    4 =>
        array(
            0 => -110,
            1 => -17,
        ),
    5 =>
        array(
            0 => -87,
            1 => 55,
        ),
    6 =>
        array(
            0 => -83,
            1 => 329,
        ),
    7 =>
        array(
            0 => -71,
            1 => 277,
        ),
    8 =>
        array(
            0 => -52,
            1 => 177,
        ),
    9 =>
        array(
            0 => -34,
            1 => 222,
        ),
    10 =>
        array(
            0 => -15,
            1 => -2,
        ),
    11 =>
        array(
            0 => 194,
            1 => 298,
        ),
    12 =>
        array(
            0 => 206,
            1 => 368,
        ),
    13 =>
        array(
            0 => 276,
            1 => 351,
        ),
    14 =>
        array(
            0 => 302,
            1 => 453,
        ),
    15 =>
        array(
            0 => 356,
            1 => 369,
        ),
    16 =>
        array(
            0 => 460,
            1 => 488,
        ),
    17 =>
        array(
            0 => 487,
            1 => 493,
        )));

