<?php

session_start();

require_once __DIR__ . "/../config/database.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$query = $conn->prepare(
    "SELECT * FROM users WHERE email = ?"
);

$query->execute([$email]);

$user = $query->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user'] = $user['id'];
    $_SESSION['name'] = $user['name'];

    header("Location: index.php?page=dashboard");
    exit;

} else {

    header("Location: index.php?page=login&error=1");
    exit;
}