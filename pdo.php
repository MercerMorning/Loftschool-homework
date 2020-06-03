<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=users_bd", "root", "root");
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}
$email = $_POST['email'];
$queryFind = $pdo->prepare("SELECT * FROM users WHERE `email` = :user_email");
$queryFind->execute(["user_email" => $email]);
$currentId = $queryFind->fetchAll()[0]['id'];
if ($queryFind->rowCount()){
    $queryUpdate = $pdo->prepare("UPDATE users SET `order_count` = `order_count`+1 WHERE `id`=:user_id");
    $queryUpdate->execute(["user_id" => $currentId]);
    echo 'Ваш заказ был оформлен';
} else {
    if (preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $email)) {
        $querySet = $pdo->prepare("INSERT INTO users (`email`, `order_count`) VALUES (:user_email, 1)");
        $querySet->execute(["user_email" => $email]);
        echo 'Ваш заказ был оформлен';
    } else {
        echo "Неправильный email";
    }
}


