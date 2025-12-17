<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, "UFT-8");
}

$pdo = new PDO("mysql:host=localhost;dbname=course", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$statement = $pdo->prepare("SELECT id, email FROM users ORDER BY email ASC");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);
