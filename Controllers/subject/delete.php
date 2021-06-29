<?php

require (__DIR__ . "/../../bootstrap.php");

if (isset($_GET['id'])) {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "delete from subject where id=" . $_GET['id'];
    $query = $pdo->exec($sql);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}