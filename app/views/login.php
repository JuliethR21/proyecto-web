<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Iniciar Sesión</h1>
    </header>

    <nav>
        <ul>
            <li>
                <a href="/proyecto-web/public/index.php">
                    Inicio
                </a>
            </li>
        </ul>
    </nav>

    <main>

        <form action="../router.php?page=auth" method="POST">

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
                Ingresar
            </button>

            <?php if (isset($_GET['error'])): ?>

                <div class="alert">
                    Usuario o contraseñas incorrectas
                </div>

            <?php endif; ?>

        </form>

    </main>
    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.style.transition = "0.5s";
                alert.style.opacity = "0";
            }
        }, 3000);
    </script>

</body>

</html>