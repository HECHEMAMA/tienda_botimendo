<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inicio de Sesion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <section>
        <h1>Inicio de Sesion</h1>
        <form action="../../Controllers/UsuarioController.php" method="post">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="user" id="name" minlength="4" maxlength="10" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" minlength="4" maxlength="10" required>
            </div>
            <input type="submit" value="Iniciar Sesion">
        </form>
        <a href="#">¿Olvidaste tú Contraseña?</a>
    </section>
</body>

</html>