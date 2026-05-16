<?php

if (!isset($_SESSION['user'])) {
    header("Location: /proyecto-web/public/index.php?page=login");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Dashboard</h1>
    </header>

    <nav>

        <ul>

            <li>
                <a href="/proyecto-web/public/index.php">
                    Inicio
                </a>
            </li>

            <li>
                <a href="/proyecto-web/public/index.php?page=usuarios">
                    Usuarios
                </a>
            </li>

            <li>
                <a href="/proyecto-web/public/logout.php">
                    Cerrar sesión
                </a>
            </li>
        </ul>
    </nav>

    <main>

        <div class="card">

            <h2>
                Bienvenido,
                <?= htmlspecialchars($_SESSION['name']) ?>
            </h2>

            <p>
                Administra usuarios y controla el sistema desde aquí.
            </p>

        </div>

    </main>

</body>

</html>