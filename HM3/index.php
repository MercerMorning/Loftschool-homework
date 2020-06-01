<?php
echo "Задание 3.1", PHP_EOL;
include_once('functions.php');
$users = [];
$names = ["Vasya", "Petya",  "Artur", "Pavel", "Artyom"];
for ($usersCount = 0; $usersCount < 50; $usersCount++) {
    $users[] = ["name" => $names[rand(0, array_key_last($names))], "id" => $usersCount, "age" => rand(18, 45)];
}
var_dump($users);
echo PHP_EOL;
file_put_contents("users.json", json_encode($users));
$fp = fopen("users.json", "r");
$usersFromJson = [];
readJson($fp, $usersFromJson);
var_dump($usersFromJson);
echo PHP_EOL;
$sumAge = 0;
$countNames = [];
foreach ($usersFromJson as $userFromJson => $propertyFromJson) {
    $sumAge += $propertyFromJson["age"];
    if (!in_array($propertyFromJson["name"], $countNames)) {
        $countNames[$propertyFromJson["name"]]++;
    }
}
$averageAge = $sumAge / sizeof($usersFromJson);
echo $averageAge, PHP_EOL;
var_dump($countNames);
echo MY_EOL;
echo "Задание 3.2", PHP_EOL;


