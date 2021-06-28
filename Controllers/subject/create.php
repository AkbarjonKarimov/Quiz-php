<?php

require (__DIR__ . "/../../bootstrap.php");

if (isset($_POST['add'])) {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO subject (name) VALUES ('" . $_POST['name'] . "');";
    $query = $pdo->exec($sql);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
