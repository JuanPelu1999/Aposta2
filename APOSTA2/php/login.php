<?php
include 'conexion.php';
session_start();
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");

if(mysqli_num_rows($validar_login)> 0){
    $_SESSION['usuario'] = $usuario;
    header("location: ../simple.php");
    exit;
 } else{
    echo'
    <script>
     alert ("El usuario no existe, por favor verifique los datos introducidos");
     window.location= "../index.php";
    </script>
    ';
    exit;

 }



?>