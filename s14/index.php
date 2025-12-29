<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, "UFT-8");
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=course", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo "A problem occured wit hthe database connection";
    die();
}


$stmt = $pdo->prepare('INSERT INTO `notes` (`title`, `content`) VALUES (:title, :content)');
$stmt->bindValue('title', "🐈‍⬛");
$stmt->bindValue('content', "🏋️");
$stmt->execute();
