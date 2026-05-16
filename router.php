<?php

$page = $_GET['page'] ?? 'home';

switch ($page) {

    case 'login':
        require_once __DIR__ . "/app/views/login.php";
        break;

    case 'dashboard':
        require_once __DIR__ . "/app/views/dashboard.php";
        break;

    case 'usuarios':
        require_once __DIR__ . "/app/views/usuarios.php";
        break;

    case 'auth':
        require_once __DIR__ . "/app/controllers/AuthController.php";

        $auth = new AuthController();

        $auth->login(
            $_POST['email'],
            $_POST['password']
        );
        break;

    case 'crearUsuario':
        require_once __DIR__ . "/app/controllers/UserController.php";

        $user = new UserController();

        $user->create($_POST);
        break;

    case 'editarUsuario':
        require_once __DIR__ . "/app/views/editar_usuario.php";
        break;

    case 'actualizarUsuario':
        require_once __DIR__ . "/app/controllers/UserController.php";

        $user = new UserController();

        $user->update($_POST);
        break;

    case 'eliminarUsuario':
        require_once __DIR__ . "/app/controllers/UserController.php";

        $user = new UserController();

        $user->delete($_GET['id']);
        break;

    case 'nuevo':
        require_once __DIR__ . "/app/views/crear_usuario.php";
        break;

    default:
        require_once __DIR__ . "/app/views/home.php";
        break;
}