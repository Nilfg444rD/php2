<?php
$dayOfWeek = date("w");

// Определяем время работы в зависимости от дня недели
$workingHours = '';
if (in_array($dayOfWeek, [1, 3, 5])) { // Понедельник, среда, пятница
    $workingHours = '8:00-12:00';
} elseif (in_array($dayOfWeek, [2, 4, 6])) { // Вторник, четверг, суббота
    $workingHours = '12:00-16:00';
} else { // Воскресенье
    $workingHours = 'Нерабочий день';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>График работы докторов</title>
</head>
<body>
    <table border="1">
        <caption>График работы докторов, каб. 333</caption>
        <tr>
            <th>№</th>
            <th>Фамилия, Имя</th>
            <th>График</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Аксенти Елена</td>
            <td><?= $workingHours ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Петрова Мария</td>
            <td><?= $workingHours ?></td>
        </tr>
    </table>
</body>
</html>
