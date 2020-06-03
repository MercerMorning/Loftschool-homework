<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=users_bd", "root", "root");
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}
$email = "hugopochta@gmail.com";
$query = $pdo->prepare("SELECT * FROM users WHERE `email` = :user_email");
$query->execute(["user_email" => $email]);
$result = $query->fetchAll()[0]['id'];
echo $result;
echo $query->rowCount();
if ($query->rowCount()){
    $query = $pdo->prepare("UPDATE users SET `order_count` = `order_count`+1 WHERE `id`=:user_id");
    $query->execute(["user_id" => $result]);
} else {
    $query = $pdo->prepare("INSERT INTO users (`email`, `order_count`) VALUES (:user_email, 1)");
    $query->execute(["user_email" => $email]);
}