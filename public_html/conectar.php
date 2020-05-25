<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="escuela";
$enlace=mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

if(!$enlace){
echo"error en la conexion con el servidor";
}

?>
