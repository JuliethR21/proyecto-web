<?php

session_start();

include("../config/database.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = $conn->prepare(
    "SELECT * FROM users WHERE email = ?"
);

$query->execute([$email]);

$user = $query->fetch();

if($user && password_verify($password, $user['password'])){

    $_SESSION['user'] = $user['id'];

    header("Location: dashboard.php");

}else{

    echo "Credenciales incorrectas";

}
