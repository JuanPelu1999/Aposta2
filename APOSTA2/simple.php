<?php
session_start();

    if(!isset($_SESSION['usuario'])){
     echo'
        <script>
        alert("Por favor debe iniciar sesión");
        window.location = "index.php";
      </script>
        ';
        session_destroy();
        die();
    }

    session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple</title>
</head>
<body>
    <h1 class="h1-aposta2">APOSTA2</h1>
    <h2 class="h2-lpf">Liga Profesional Argentina</h2>
    <div class="grupo-simple">
        <button class="simple">Simple</button>
        <a href="combinadas.html"><button  class="combinada">Combinada</button></a>
        
    </div>
    <div class="partidos">
        <div class="contenedor1">
            <div class="equipo1"></div>
            <div class="equipo2"></div>
            <button class="simple equipo-1">Colon (2.0)</button>
            <button class="simple empate">X (1.50)</button>
            <button class="simple equipo-2">Union (3.0)</button>
            <div class="emapate"></div>
        </div>
    
        <div class="contenedor1">
            <div class="equipo3"></div>
            <div class="equipo4"></div>
            <button class="simple equipo-1">Boca (1.50)</button>
            <button class="simple empate">X (2.30)</button>
            <button class="simple equipo-2">River (1.50)</button>
            <div class="emapate"></div>
        </div>
 
        <div class="contenedor1">
            <div class="equipo5"></div>
            <div class="equipo6"></div>
            <button class="simple equipo-1">Lanus (1.50)</button>
            <button class="simple empate">X (3.20)</button>
            <button class="simple equipo-2">Velez (1.50)</button>
            <div class="emapate"></div>
        </div>
    
    </div>
    <div class="navbar">
        <button class="navbar-button">Juegos</button>
        <button class="navbar-button">MyBets</button>
        <button href="perfil.html" class="navbar-button">Mi Perfil</button>
    </div>

</body>
</html>

