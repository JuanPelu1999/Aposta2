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
        <button id="boton-iniciar" class="is-texto">Iniciar sesión</button>
        <a href="registrarse.php" style="color: white;">Registrarse</a>
    </div>
</div>

<form action="php/login.php" method="POST">
        <input type="text" id="usuario" name="usuario" placeholder="Usuario">
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
        <div class="checkbox-olvidado">
        <label for="recordar"><input type="checkbox" id="recordar" name="recordar"> Recordarme</label>
        <a href="#" id="olvido-contrasena">Olvidé mi contraseña</a>
    </div>
    <button type="submit" id="enviar-login">Iniciar Sesión</button>
</form>


    <script src="script.js"></script>
</body>
</html>
