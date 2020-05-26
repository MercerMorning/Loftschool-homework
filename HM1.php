<?php
echo "<pre>Задание 1</pre>";

$name = 'Николай';
$age = '20';

echo "<br/>Меня зовут: $name \n";
echo "<br/>Мне $age лет";
echo '<br/>"!|/\'"\\';

echo "<pre>Задание 2</pre>";

const ALL_PAGES = 80;
const FELTPEN_PAGES = 23;
const PENCIL_PAGES = 40;

echo '<br/>Красками нарисовано ' . (ALL_PAGES - FELTPEN_PAGES - PENCIL_PAGES) . ' рисунков';

echo "<pre>Задание 3</pre>";

$age = rand(1, 100);

if ($age >= 18 && $age <= 65) {
    echo "<br/>Вам еще работать и работать";
} elseif ($age > 65) {
    echo "<br/>Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo "<br/>Вам еще рано работать";
} else {
    echo "<br/>Неизвестный возраст";
}

echo "<pre>Задание 4</pre>";

$day = rand(1, 10);

switch ($day) {
    case $day >= 1 && $day <= 5:
        echo '<br/>Это рабочий день';
        break;
    case $day == 6 || $day == 7:
        echo '<br/>Это выходной день';
        break;
    default:
        echo '<br/>Неизвестный день';
}

echo "<pre>Задание 5</pre>";

$bmw = [
    "name" => "bmw",
    "model" => "x5",
    "speed" => "120",
    "doors" => "doors",
    "year" => "2015"
];

$opel = [
    "name" => "opel",
    "model" => "z3",
    "speed" => "90",
    "doors" => "doors",
    "year" => "2012"
];

$toyota = [
    "name" => "toyota",
    "model" => "q2",
    "speed" => "140",
    "doors" => "doors",
    "year" => "2009"
];

$cars = [$toyota, $opel, $bmw];

foreach ($cars as $car) {
    foreach ($car as $item => $inf) {
        if ($item == 'name') {
            echo "</br>CAR $inf</br>";
        } else {
            echo "$inf ";
        }
    }
    echo "</br>";
}

echo "<pre>Задание 6</pre>";

?>

<table>
    <?php
    $p = 0;
    for ($i = 1; $i <= 10; $i++) {
        $p++;
        echo "<tr>";
        for ($q = 1; $q <= 10; $q++) {
            echo "<td>";
            if ($i % 2 == 0 && $q % 2 == 0) {
                echo "(" . $q * $p . ")";
            } elseif ($i % 2 != 0 && $q % 2 != 0) {
                echo "[" . $q * $p . "]";
            } else {
                echo $q * $p;
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    ?>
</table>
