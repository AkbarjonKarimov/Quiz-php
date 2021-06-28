<?php

require(__DIR__ . "/../bootstrap.php");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $pdo->prepare('select * from results inner join subject on results.subject_id=subject.id where users_id=2');
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_OBJ);
