<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body>
    <div class="logo"></div>
    <div class="contenedor-login">
    <div class="grupo-input">
    <a href="index.php" style="color: white;">Iniciar Sesión</a>
        <button id="boton-registro" class="r-texto">Registrarse</button>
    </div>
    <form action="php/registrar.php" method="POST">
            <input type="text" id="usuario" placeholder="Usuario" name="usuario">
            <input type="password" id="contrasena" placeholder="Contraseña" name="contrasena">
            <input type="password" id="confirmarContraseña" placeholder="Confirmar contraseña">

        <button id="enviar-login" type="submit">Registrarme</button>
    </form>
</div>


    <script src="script.js"></script>
</body>
</html>
