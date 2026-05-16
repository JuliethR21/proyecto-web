<?php

include("../config/database.php");

$usuarios = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Usuarios Registrados</h1>
        <a
            class="btn"
            href="/proyecto-web/public/index.php?page=nuevo">
            Nuevo Usuario
        </a>
    </header>

    <nav>

        <ul>

            <li>
                <a href="/proyecto-web/public/index.php">
                    Inicio
                </a>
            </li>

            <li>
                <a href="/proyecto-web/public/index.php?page=dashboard">
                    Dashboard
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

            <table>

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>

                <?php foreach ($usuarios as $usuario): ?>

                    <tr>

                        <td><?= $usuario['id'] ?></td>

                        <td><?= htmlspecialchars($usuario['name']) ?></td>

                        <td><?= htmlspecialchars($usuario['email']) ?></td>
                        <td>

                            <a
                                class="btn"
                                href="/proyecto-web/public/index.php?page=editarUsuario&id=<?= $usuario['id'] ?>">
                                Editar
                            </a>

                            <a
                                class="btn btn-delete"
                                href="/proyecto-web/router.php?page=eliminarUsuario&id=<?= $usuario['id'] ?>"
                                onclick="return confirm('¿Eliminar usuario?')">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </table>

        </div>

    </main>

</body>

</html>