<?php
// Получаем текущий день недели
$dayOfWeek = date("w");
$currentDate = date("d.m.Y"); // Текущая дата в формате дд.мм.гг

switch ($dayOfWeek) {
    case 0:
        $dayName = "воскресенье";
        break;
    case 1:
        $dayName = "понедельник";
        break;
    case 2:
        $dayName = "вторник";
        break;
    case 3:
        $dayName = "среда";
        break;
    case 4:
        $dayName = "четверг";
        break;
    case 5:
        $dayName = "пятница";
        break;
    case 6:
        $dayName = "суббота";
        break;
    default:
        $dayName = "неизвестный день";
        break;
}

echo "Сегодня, $dayName, $currentDate";
?>
