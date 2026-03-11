<?php
require 'Database.php';

$db = (new Database())->getConnection();
$stmt = $db->query("SELECT * FROM article");

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($articles as $article) {
    echo $article['tittle'] . " - " . $article['id_user'] . "<br>";
}

$sql = "INSERT INTO article (tittle, content, id_user) VALUES (:tittle, :content, :id_user)";
$stmt = $db->prepare($sql);
$stmt->execute([
    'tittle' => 'hi',
    'content' => 'i am new here my name is houda.',
    'id_user' => 11
]);

$stmt = $db->prepare("UPDATE article SET tittle = :tittle WHERE id = :id");
$stmt->execute(['tittle' => 'PDO introduction', 'id' => 1]);


$stmt = $db->prepare("DELETE FROM article WHERE id = :id");
$stmt->execute(['id' => 11]);
