<?php 

include('../modelos/BaseDatos.php');
$transaccion = new BaseDatos();

if(isset($_POST["botonEnvio"])){

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $desc=$_POST["descripcion"];
    $genero=$_POST["genero"];

    echo("prueba");

    $consultaSQL="INSERT INTO usuarios(nombre,apellido,descripcion,sexo)VALUES ('$nombre','$apellido','$desc','$genero')";

    $transaccion->agregarDatos($consultaSQL);

}
    
    





?>