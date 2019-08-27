<?php 
$text = 'Доброе утро!';
$image = 'img/1.jpg';
$day = 'понедельник';
$message = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18.00';

if (date("H") < 11 and date("H") <= 6) {
    $text = 'Доброе утро!';
    $image = 'img/1.jpg';
} elseif (date("H") >= 23 and date("H") < 6) {
    $text = 'Доброй ночи!';
    $image = 'img/2.jpg';
} elseif (date("H") >= 18 and date("H") < 23) {
    $text = 'Добрый вечер!';
    $image = 'img/3.jpg';
} else {
    $text = 'Добрый день!';
    $image = 'img/4.jpg';
};

if (date("N") == 2) {
    $day = 'вторник.';
} elseif (date("N") == 3) {
    $day = 'среда.';
} elseif (date("N") == 4) {
    $day = 'четверг.';
} elseif (date("N") == 5) {
    $day = 'пятница.';
} elseif (date("N") == 6) {
    $day = 'суббота.';
} elseif (date("N") == 7) {
    $day = 'воскресенье.';
} else {
    $day = 'понедельник.';
};

if (date("N") >= 1 and date("N") <= 6) {
    $message = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18.00';
};

// if (date("N") = 6)  {
//     $message = 'Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 9 до 18.00';
// }; //else {
//     $message = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 9 до 18.00';
// }

// if ($text = 'Добрый вечер!' or $text = 'Доброй ночи!') {
//     $message = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18.00';
// };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><?= $text; ?></h1>
            <h2>Сегодня <?=$day; ?></h2>
            <h2><?= $message; ?></h2>
        </div>
    </div>
</body>
</html>
