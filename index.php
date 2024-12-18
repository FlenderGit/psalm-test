<?php

require_once "vendor/autoload.php";

$pdo = new PDO("mysql:host=localhost;dbname=phpunit", "root", "");

$user_id = 1;
$statement = $pdo->prepare("SELECT * FROM users WHERE id = $user_id"); 


$statement = "SELECT * FROM users WHERE id = :id group by $user_id";

$statement = "SELECT * FROM users";
$stmt = "INSERT INTO users (name, email) VALUES (:name, :email)";

$statement = $statement . (isset($user_id) ? " WHERE id = :id" : "");

$statement = isset($_GET['id']) ? "SELECT * FROM users WHERE id = :id" : "SELECT * FROM users";


