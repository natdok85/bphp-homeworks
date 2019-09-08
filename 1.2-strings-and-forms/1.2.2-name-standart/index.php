<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];

$firstLetterFirstName = mb_substr($firstName, 0, 1);
$fLfNtoUpper = mb_strtoupper($firstLetterFirstName);
$newFirstName = substr_replace($firstName, $fLfNtoUpper, 0, 2);

$firstLetterLastName = mb_substr($lastName, 0, 1);
$fLlNtoUpper = mb_strtoupper($firstLetterLastName);
$newLastName = substr_replace($lastName, $fLlNtoUpper, 0, 2);

$firstLetterMiddleName = mb_substr($middleName, 0, 1);
$fLmNtoUpper = mb_strtoupper($firstLetterMiddleName);
$newMiddleName = substr_replace($middleName, $fLmNtoUpper, 0, 2);

$fullName = $newLastName . ' ' . $newFirstName . ' ' . $newMiddleName;
$fio = $fLlNtoUpper . $fLfNtoUpper . $fLmNtoUpper;
$surnameAndInitials = $newLastName . ' ' . $fLfNtoUpper . '.' . $fLmNtoUpper . '.';

echo 'Полное имя: "' . $fullName . '" <br> Фамилия и инициалы: "' . $surnameAndInitials . '"' . '<br> Аббревиатура: "' . $fio . '"';




