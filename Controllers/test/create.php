<?php

require(__DIR__ . "/../../bootstrap.php");

if (!empty($_POST['subject']) && !empty($_POST['body']) && !empty($_POST['answer'])) {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO test (subject_id, question, correct_answer) 
    VALUES ('" . $_POST['subject'] . "'" .',' . "'" . $_POST['body'] . "'" . ',' . "'" . $_POST['answer'] . "');";

    $query = $pdo->exec($sql);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
