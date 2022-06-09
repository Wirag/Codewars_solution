<?php

function solution($str, $ending) {

    echo preg_match("/".preg_quote($ending)."\z/",$str);

}

solution("abc\n", 'abc')

?>