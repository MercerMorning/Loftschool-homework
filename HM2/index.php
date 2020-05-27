<?php
require('src/functions.php');

$stringArray = ['Vasya', 'Petya', 'Vova'];
task1($stringArray);
echo task1($stringArray, 1);

echo "</br>";

task2('*', 20, 2, 2);

echo "</br>";

task3(5, 5);

echo "</br>";
echo "<pre>Задание 4.1</pre>";

date_default_timezone_set('Europe/Moscow');
var_dump(date('d.m.Y H:i'));

echo "</br>";
echo "<pre>Задание 4.2</pre>";

$time = '24.02.2016 00:00:00';
echo date('U', strtotime($time));

echo "</br>";
echo "<pre>Задание 5.1</pre>";

echo str_replace('К', '', 'Карл у Клары украл Кораллы');

echo "</br>";
echo "<pre>Задание 5.2</pre>";

echo str_replace('Две', 'Три', 'Две бутылки лимонада');

echo "</br>";

$fp = fopen("test.txt", "w");

fwrite($fp, 'Hello again!');
fclose($fp);

task6('test.txt');


