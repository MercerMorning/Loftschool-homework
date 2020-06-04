<?php
$host = '127.0.0.1';
$mysql = new mysqli($host, 'root', 'root', 'users', 3306);
if (mysqli_connect_errno()) {
    echo 'Connection error ' . mysqli_connect_errno();
    die;
}
$ret = $mysql->query("SELECT * FROM usrs ORDER BY id DESC LIMIT 3");
while ($elem = $ret->fetch_assoc()) {
    $data[] = $elem;
}
$data = $ret->fetch_assoc();
echo $mysql->affected_rows;
echo print_r($data, 1);
$password = md5('1234');
$ret = $mysql->query("INSERT INTO usrs (`name`, age, `password`) VALUES ('Jack', 25, $password)");