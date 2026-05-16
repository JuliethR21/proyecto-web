<?php

require("../config/database.php");

$id = $_GET['id'];

$stmt = $conn->prepare(
    "SELECT * FROM users WHERE id=?"
);

$stmt->execute([$id]);

$usuario = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Usuario</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>
        <h1>Editar Usuario</h1>
    </header>

    <main>

        <form
            action="../router.php?page=actualizarUsuario"
            method="POST">

            <input
                type="hidden"
                name="id"
                value="<?= $usuario['id'] ?>">

            <input
                type="text"
                name="name"
                value="<?= htmlspecialchars($usuario['name']) ?>"
                required>

            <input
                type="email"
                name="email"
                value="<?= htmlspecialchars($usuario['email']) ?>"
                required>
            <input
                type="password"
                name="password"
                placeholder="Nueva contraseña (opcional)">

            <button type="submit">
                Actualizar
            </button>

        </form>

    </main>

</body>

</html>