<?php
$servidor = "localhost";
$user     = "id21949740_fabian";
$password = "Fabian1234.";
$namedb   = "id21949740_formulario";

$conexion= new mysqli($servidor,$user,$password,$namedb);

if($conexion) {
    echo "Conectado";
}
else {
    echo "Desconectado";
}

?>