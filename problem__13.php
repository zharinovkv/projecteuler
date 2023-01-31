<?php

// Problem 12 https://projecteuler.net/problem=12


function isDivide($number)
{
    $dividers = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            array_push($dividers, $i);
        }
    }
    return $dividers;
}

//print_r(isDivide(224));

function triangle($number)
{
    $tria = 0;
    for ($i = 0; $i <= $number; $i++) {
        $tria = $tria + $i;
    }
    return $tria;
}

//print_r(triangle(4));


$counter = 5983;
$prime = [];
$number = 500;
$max = 0;

do {
    $counter++;
    $tria = triangle($counter);
    $dividers = isDivide($tria);
    if(count($dividers) > $max) {
        $max = count($dividers);
        echo $counter . ": " . $tria . ": " . count($dividers) . " \r\n";
    }
} while (count($dividers) < $number);

//print_r($counter);

// 1 в бесконечном цикле 
// 2 проверить каждое триангл число (сумма порядковых номеров)
// 3 для каждлго найти все делители без остатка
// 4 остановить, когда станет более 500 делителей

// требуется функция, 
// которая принимеет число, 
// в цикле находит все делители без остатка
// возвращает массив делителей 

// требуется функция
// которая на основе цикла по индексу, складныет и получает триангл число

// 5984: 17907120: 480 