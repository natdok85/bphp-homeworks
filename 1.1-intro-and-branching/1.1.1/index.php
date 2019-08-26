<?php
$variable = 1.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> is<?
if (is_bool($variable)) {
    echo " bool";
} elseif (is_float($variable)) {
    echo " float</br>"; 
    echo "Число с плавающей точкой.</br>";   
    echo  "Используется для вещественных чисел.";
} elseif (is_null($variable)) {
    echo " null";
} elseif (is_string($variable)) {
    echo " string";
} elseif (is_int($variable)) {
    echo " integer";
} else {
    echo " other";
}; 
?>
</p>

</body>
</html>


