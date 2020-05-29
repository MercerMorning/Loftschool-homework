<?php
require_once "MainConsts.php";
$name = "Николай";
$age = "20";
echo "Задание 1", MY_EOL,"Меня зовут: $name", PHP_EOL, "Мне $age лет", PHP_EOL, "//“!|/’”\\", MY_EOL, "Задание 2", PHP_EOL;
include_once "Task2Constants.php";
echo PHP_EOL, "Красками нарисовано ", PAINT_PAGES, " рисунков";
$age = rand(1, 100);
include_once "Task3Constants.php";
if ($age >= AGE_WORK_MIN && $age <= AGE_WORK_MAX) {
    echo PHP_EOL, "Вам еще работать и работать";
} elseif ($age > AGE_WORK_MAX) {
    echo PHP_EOL, "Вам пора на пенсию";
} elseif ($age >= AGE_START && $age < AGE_WORK_MIN) {
    echo PHP_EOL, "Вам еще рано работать";
} else {
    echo PHP_EOL, "Неизвестный возраст";
}
echo MY_EOL, "Задание 4";
$day = rand(1, 10);
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo PHP_EOL, "Это рабочий день";
        break;
    case 6:
    case 7:
        echo PHP_EOL, "Это выходной день";
        break;
    default:
        echo PHP_EOL, "Неизвестный день";
}
echo MY_EOL, "Задание 5";
$bmw = [
    "model" => "x5",
    "speed" => "120",
    "doors" => "doors",
    "year" => "2015"
];
$opel = [
    "model" => "z3",
    "speed" => "90",
    "doors" => "doors",
    "year" => "2012"
];
$toyota = [
    "model" => "q2",
    "speed" => "140",
    "doors" => "doors",
    "year" => "2009"
];

$cars = [
    "toyota" => $toyota,
    "opel" => $opel,
    "bmw" => $bmw
];
//todo: что такое эхо по в пхп
echo PHP_EOL;
foreach ($cars as $key => $value) {
    echo "CAR $key" , PHP_EOL , implode(",", $value) , PHP_EOL;
}
echo PHP_EOL;
echo MY_EOL, "Задание 6", PHP_EOL;
for ($row = 1; $row <= 10; $row++) {
    for ($col = 1; $col <= 10; $col++) {
        $result = $row * $col;
        if (($row + $col) % 2 == 0) {
            if ($row % 2 == 0) {
                echo "($result)";
            } else {
                echo "[$result]";
            }
        } else {
            echo $result;
        }
    }
    echo PHP_EOL;
}

