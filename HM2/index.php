<?php
include_once ("MainConsts.php");
include_once("src/functions.php");
$stringArray = ["Vasya", "Petya", "Vova"];
echo task1($stringArray),
MY_EOL,
task2("*", 20, 0, 2),
MY_EOL,
task3(5, 5),
MY_EOL,
"Задание 4.1";
date_default_timezone_set("Europe/Moscow");
var_dump(date("d.m.Y H:i"));
echo MY_EOL,
"Задание 4.2";
$date = "24.02.2016 00:00:00";
echo date("U", strtotime($date)),
MY_EOL,
"Задание 5.1",
str_replace("К", "", "Карл у Клары украл Кораллы"),
MY_EOL, "Задание 5.2",
str_replace("Две", "Три", "Две бутылки лимонада"),
MY_EOL;
$fp = fopen("test.txt", "w");
fwrite($fp, "Hello again!");
fclose($fp);
echo task6("test.txt");


