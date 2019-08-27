<?php
$variable = 11;
$type = 'is float';
$text = 'Массив, объект или ресурс';

if (is_float($variable)) {
    $type = ' is float';
    $text = 'Число с плавающей точкой. <br>
    Используется для вещественных чисел.';
} elseif (is_bool($variable)) {
    $type = 'Variable is bool';
    $text = 'Тип boolean может быть либо true, либо false';
} elseif (is_int($variable)) {
    $type = ' is integer';
    $text = 'Целое число';
} elseif (is_string($variable)) {
    $type = ' is string';
    $text = 'Строка - это набор символов';
} elseif (is_null($variable)) {
    $type = 'Variable is null';
    $text = 'Переменная без значения';
} else {
    $type = ' is other';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> <?=$type?></p>
    <p><?=$text?></p>
</body>
</html>


