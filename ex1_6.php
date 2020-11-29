<?php

//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
// Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;


function operation($a = 10, $b = 5) {

    if ($a >= 0 && $b >= 0) {
        $c = $a - $b;
    } elseif ($a < 0 && $b < 0) {
        $c = $a * $b;
    } else {
        $c = $a + $b;
    }
    return $c;
}

//2. Присвоить переменной $а значение в промежутке [0..15].
// С помощью оператора switch организовать вывод чисел от $a до 15.

function sweet4($a = 0) {
    switch($a){
        case(0):
            echo 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,  13, 14, 15;
            break;
        case(1):
            echo 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(2):
            echo 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(3):
            echo 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(4):
            echo 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(5):
            echo 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(6):
            echo 6, 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(7):
            echo 7, 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(8):
            echo 8, 9, 10, 11, 12, 13, 14, 15;
            break;
        case(9):
            echo 9, 10, 11, 12, 13, 14, 15;
            break;
        case(10):
            echo 10, 11, 12, 13, 14, 15;
            break;
        case(11):
            echo 11, 12, 13, 14, 15;
            break;
        case(12):
            echo 12, 13, 14, 15;
            break;
        case(13):
            echo 13, 14, 15;
            break;
        case(14):
            echo 14, 15;
            break;
        case(15):
            echo 15;
            break;
    }
}

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.

function plusik($a = 1, $b = 1){
    $c = $a + $b;
    return $c;
}

function minusik($a = 1, $b = 1) {
    $c = $a - $b;
    return $c;
}

function umnozh($a = 2, $b = 2) {
    $c = $a * $b;
    return $c;
}

function deli($a = 2, $b = 2) {
    $c = $a / $b;
    return $c;
}

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости
// от переданного значения операции выполнить одну из арифметических операций (использовать функции
// из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1 = 2, $arg2 = 2, $operation){
    switch($operation){
        case('plusik'):
            $c = $arg1 + $arg2;
            break;
        case('minusik'):
            $c = $arg1 - $arg2;
            break;
        case('umnozh'):
            $c = $arg1 * $arg2;
            break;
        case('deli'):
            $c = $arg1 / $arg2;
        default: $c = 'Неверно передано название операции!';
    }
    return $c;
}

// 6. *С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val = 1, $pow = 1){
    if ($pow == 1) {
        return $val;
    } elseif ($pow > 1) {
        return $val * power($val, $pow - 1);
    } else {
        return "Заданное значение степени меньше, либо равно нулю";
    }
}
