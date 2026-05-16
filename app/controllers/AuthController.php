<?php

class AuthController
{

    public function login($email, $password)
    {

        require_once(__DIR__ . "/../../config/database.php");

        $query = $conn->prepare(
            "SELECT * FROM users WHERE email = ?"
        );

        $query->execute([$email]);

        $user = $query->fetch();

        if ($user && password_verify($password, $user['password'])) {

            session_start();

            $_SESSION['user'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header("Location: /proyecto-web/public/index.php?page=dashboard");
        } else {
            header(
                "Location: /proyecto-web/public/index.php?page=login&error=1"
            );
        }
    }
}
