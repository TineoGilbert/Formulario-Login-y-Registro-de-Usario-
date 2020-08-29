<?php
//Inclusión del Archivo conexión, ubicado en la carpeta conexiones
include_once('./conexiones/conexion.php');


//Capturando los valores de los campo del Formulario de Registro
$nombre = $_POST['nombre_usuario'];
$email = $_POST['email'];
$pass1 = $_POST['contrasena'];
$pass2 = $_POST['contrasena2'];



//Validación para saber si el Usuario que se está aregistrando, ya está en uso.
$comprobar = 'SELECT * FROM Usuarios WHERE Email = ?';
$buscar = $pdo->prepare($comprobar);
$buscar->execute(array($email));
$resultado = $buscar->fetch();

if ($resultado) {
    echo "<script>alert('Usuario en Uso')</script>";
    die();
    header('location:index.php');
} else {

    //Hash de Contraseña o Encriptación 

    $pass1 = password_hash($pass1, PASSWORD_DEFAULT);

    echo "<pre>";

    var_dump($nombre);

    var_dump($email);

    var_dump($pass1);

    var_dump($pass2);



    echo "</pre>";

    // Validación de si son Iguales las contraseñas//

    if (password_verify($pass2, $pass1)) {
        echo '¡La contraseña es válida!';
    } else {
        echo 'La contraseña no es válida.';
    }

    //Insertar Datos a la Basse de Datos//

    $insertar = 'INSERT INTO usuarios(Nombre, Email, Contrasena)
VALUES (?,?,?)';


    $sql_agregar = $pdo->prepare($insertar);

    if ($sql_agregar->execute(array($nombre, $email, $pass1))) {
        echo "Datos insertados";
    } else {
        echo "Error al insertar los Datos ";
    }

    $sql_agregar = null;
    $pdo = null;

    header('location:registro.php');
}
