<?php

require(__DIR__ . "/../../bootstrap.php");

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("select role_id from users where username='" . $_POST['username'] . "'" . " and password='" . $_POST['password'] . "'");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_OBJ);
    if ($result) {
        $cookie_name = 'role_id';
        $role_id = $result->role_id;
        setcookie($cookie_name, $role_id, time() + (86400 * 30), "/");

        header("Location:" . '/test/index.php');
        return;
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
}
