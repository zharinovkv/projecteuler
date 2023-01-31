<?php

function problem13($path = "./p013_nums.txt")
{
    $file = file_get_contents($path);
    $nums = explode(PHP_EOL, $file);
    $sum = array_sum($nums);
    $str = number_format($sum, 2, ".", "");
    return substr($str, 0, 10);
}

echo problem13();