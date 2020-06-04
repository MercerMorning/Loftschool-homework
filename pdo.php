<?php
include_once "dbconfig.php";
try {
    $pdo = new PDO(DSN_DB, USERNAME_DB, PASSWORD_DB);
} catch (PDOException $e) {
    echo "Не удалось оформить заказ";
    die;
}

/**
 * Полученный Email от метода POST
 */
$email = $_POST['email'];

/**
 * Поиск email в базе данных
 */
$queryFind = $pdo->prepare("SELECT * FROM users WHERE `email` = :user_email");
$queryFind->execute(["user_email" => $email]);

/**
 * Условие (Если был найден email)
 */
if ($queryFind->rowCount()){

    /**
     * Запись в перменную id пользователя с найденным email
     */
    $currentId = $queryFind->fetchAll()[0]['id'];

    /**
     * Увеличение количества заказов на 1
     */
    $queryUpdate = $pdo->prepare("UPDATE users SET `order_count` = `order_count`+1 WHERE `id`=:user_id");
    $queryUpdate->execute(["user_id" => $currentId]);
    echo 'Ваш заказ был оформлен';
} else {

    /**
     * Если условие было не соблюдено
     */
    if (preg_match(REGEX_EMAIL, $email)) {

        /**
         * Записываем пользователя с новым email в базу данных, устанавливаем что был совершен 1-ый заказ
         */
        $querySet = $pdo->prepare("INSERT INTO users (`email`, `order_count`) VALUES (:user_email, 1)");
        $querySet->execute(["user_email" => $email]);
        echo 'Ваш заказ был оформлен';
    } else {

        /**
         * Если email был введен неверно
         */
        echo "Не удалось оформить заказ. Неправильная форма email";
    }
}


