<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Usuario</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>
        <h1>Crear Usuario</h1>
    </header>

    <main>

        <form
            action="../router.php?page=crearUsuario"
            method="POST">

            <input
                type="text"
                name="name"
                placeholder="Nombre"
                required>

            <input
                type="email"
                name="email"
                placeholder="Correo"
                required>

            <input
                type="password"
                name="password"
                placeholder="Contraseña"
                required>

            <button type="submit">
                Guardar
            </button>

        </form>

    </main>

</body>

</html>