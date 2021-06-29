<?php

require(__DIR__ . "/../../bootstrap.php");

$correct_answer = 0;
$number_of_questions = 0;
foreach ($_POST['correct_answer'] as $k => $answer) {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("select correct_answer from test where id=" . "'" . $k . "'" . " and correct_answer=" . "'" . $answer . "'");
    $sql->execute();
    $tests = $sql->fetchAll(PDO::FETCH_OBJ);

    if (!empty($tests)) {
        foreach ($tests as $test) {
            ++$correct_answer;
        }
    }
    ++$number_of_questions;
}

$percentage = $correct_answer * 100 / $number_of_questions;

$sql = "INSERT INTO results (subject_id, users_id, percentage, number_of_correct_answers, number_of_questions)
    VALUES ('14', '2'," . $percentage . "," . $correct_answer . "," . $number_of_questions . ");";
$pdo->exec($sql);