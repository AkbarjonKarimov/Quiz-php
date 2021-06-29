<?php

require (__DIR__ . "/../../bootstrap.php");
// if (isset($_POST['edit'])) {
//     $sql = ("UPDATE subject SET name=? WHERE id=?");
//     $query = $pdo->prepare($sql);
//     $query->exec([$name, $get_id]);
//     if ($query) {
//         header("Location: " . $_SERVER['HTTP_REFERER']);
//     }
// }


if (isset($_GET['id'])) {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "update suject set"." ['name']"." where id=" . $_GET['id'];
    $query = $pdo->exec($sql);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}