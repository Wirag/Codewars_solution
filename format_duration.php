<?php
function format_duration($seconds)
{

    $time_arr = ['second' => 60, 'minute' => 60, 'hour' => 24, 'day' => 365, 'year' => 10];

    if ($seconds) {

        $string_format = '';

        foreach ($time_arr as $el => $val) {

            $remainder = ($seconds % $val);

            $sub_str = $remainder . ' ' . $el;

            if ($remainder == 1) {
                $string_format = $sub_str . ', ' . $string_format;
            }
            if ($remainder > 1) {
                $string_format = $sub_str . 's, ' . $string_format;
            }

            $seconds = intdiv($seconds, $val);

        }

        $string_format = (substr($string_format, 0, -2));

        $last_comma = (strrpos($string_format, ','));
        if ($last_comma) {

            $string_format = (substr($string_format, 0, $last_comma) .
                ' and' .
                substr($string_format, $last_comma + 1));

        }
        return ($string_format);
    }

    return ('now');

}

$t = 60 * 60 * 24 * 365 * 2 + 44;
var_dump($t);
format_duration($t);