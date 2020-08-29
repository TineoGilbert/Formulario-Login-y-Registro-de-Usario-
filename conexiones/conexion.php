<?php


$link = 'mysql:host=localhost; dbname=Formulario';
$user = 'root';
$password = '123Tineo';

try {
    $pdo = new PDO($link, $user, $password);
    //  echo "Conectado";

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

/*

$servidor = 'localhost';
$usuario = 'root';
$contraseña = '123Tineo';
$db = 'Formulario';
//$conexion;

    $conexion = new mysqli($servidor, $usuario, $contraseña, $db);


    /*ESTABLECER CONEXIÓN*/
    /*
    if($conexion->connect_error){
        echo 'Error al Establecer Conexión ' .$conexion->error;
    }
    else{
        echo 'Conexión Exitosa';
    };

    */
/*


class Conexion{
    private $servidor = 'localhost';
    private $usuario = 'root';
    private $contraseña = '123Tineo';
    private $db = 'Formulario';
    public $conexion;

    public function conectar(){
        $conexion = new mysqli($this->servidor, $this->usuario, $this->contraseña, $this->db);


        /*ESTABLECER CONEXIÓN*/

        /*
        
        if($conexion->connect_error){
            echo 'Error al Establecer Conexión ' .$conexion->error;
        }
        else{
            echo 'Conexión Exitosa';
        };
*/

        


        /*CREAR BASE DE DATOS*/ 
        
        /*
        $sql = 'CREATE DATABASE Formulario';

        if($conexion->query($sql) === true){
            echo 'La Base de Datos se ha creado correcatmente';
        }

        else{
            echo 'Error al crear la Base de Datos ' .$conexion->error;
        }
        */


        /*CREAR TABLA EN LA BASE DE DATOS */

        /*
        $tabla = 'CREATE TABLE Usuarios(
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            Nombre VARCHAR(270),
            Email VARCHAR(270),
            Contrasena VARCHAR(270)
        )';

        if(($conexion)->query($tabla) === true){
            echo "La tabla se ha creado correctamente ne la Base de Datos: " .$this->conexion;
        }
        else{
            echo "Error al crear la tabla en la Base de Datos: " .$conexion->error;
            die();
        }

        */
    
      //  $pdo->close();
    


//$db = new Conexion();

// echo $db->conectar();
