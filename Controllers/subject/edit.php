<?php

require (__DIR__ . "/../../bootstrap.php");
if (isset($_POST['edit'])) {
    $sql = ("UPDATE subject SET name=? WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $get_id]);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}