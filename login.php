<?php

//Inicio de la sesión
session_start();


//Archivo incluido en esta página
include_once('./conexiones/conexion.php');


//Variables extraidas del Formulario Login
$user_email = $_POST['mail'];
$user_password = $_POST['password'];


// Visualizar si la información se está recibiendo (No es necesario su uso)
echo '<pre>';
var_dump($user_email);
var_dump($user_password);
echo '</pre>';



//Sentencia SQL para verificar si el Usuario existe el la Base de Datos
$comprobar = 'SELECT * FROM Usuarios WHERE Email = ?';
$buscar = $pdo->prepare($comprobar);
$buscar->execute(array($user_email));
$resultado = $buscar->fetch();

if (!$resultado) {
    echo "<script>alert('El Usuario no existe')</script>";
    header('location:index.php');
}

if (password_verify($user_password, $resultado['Contrasena'])) {
    $_SESSION['admin'] = $user_email;
    header('location:logueado.php');
} else {
    echo "<script> alert('Contraseña Incorrecta');</script>";
    header('location:index.php');
    die();
}
