<?php
include ("conexion.php");

$cedula=$_POST['ID_CEDULA'];
$nombre=$_POST['NOMBRES'];
$apellido=$_POST['APELLIDOS'];
$celular=$_POST['CELULAR'];
$correo=$_POST['CORREO'];

$sql="INSERT INTO registro (ID_CEDULA,NOMBRES,APELLIDOS,CELULAR,CORREO) VALUES ('$cedula','$nombre','$apellido','$celular','$correo')";

if 
($conexion -> query($sql) === TRUE) {
    echo "Cliente registrado con éxito";
} else {
    echo "Error al registrar cliente: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>