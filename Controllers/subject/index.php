<?php

include './bootstrap.php';

$sql = $pdo->prepare("select * from subject");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);