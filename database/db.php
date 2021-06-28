<?php

$host = 'localhost';
$db = 'quiz';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo 'Error from DB ' . $e->getMessage();
}
