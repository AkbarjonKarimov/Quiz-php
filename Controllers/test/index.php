<?php

require(__DIR__ . "/../../bootstrap.php");

$sql = $pdo->prepare("select * from subject");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_OBJ);

$sql = $pdo->prepare('select * from subject inner join test on subject.id=test.subject_id');
$sql->execute();
$tests = $sql->fetchAll(PDO::FETCH_OBJ);
