<?php

require(__DIR__ . "/../../bootstrap.php");

$sql = $pdo->prepare("select * from subject");
$sql->execute();
$subjects = $sql->fetchAll(PDO::FETCH_OBJ);

if (isset($_GET['id'])) {
    $sql = $pdo->prepare('select * from subject inner join test on subject.id=test.subject_id where test.subject_id=' . $_GET['id']);
    $sql->execute();
    $tests = $sql->fetchAll(PDO::FETCH_OBJ);
}
