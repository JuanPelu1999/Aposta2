<?php

    include 'conexion.php';


    $usuario = $_POST['usuario'];
    $contrasena= $_POST['contrasena'];

    $query = "INSERT INTO usuarios(usuario, contrasena) 
                            VALUES('$usuario', '$contrasena')";

    
    

    //verificacion de user
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
                alert("Este usuario ya está en uso, intente otro");
                window.location = "../registrarse.php"
        </script>
        ';

        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario creado exitosamente");
        window.location =  "../index.php";
        </script>
    
    ';
    } else{
     echo '
        <script>
        alert("El usuario no se ha registrado");
        window.location =  "../registrarse.php";
        </script>
    
        ';
    }
    mysqli_close($conexion);






?>