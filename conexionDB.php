<?php

$db_host="localhost";
$db_nombre="usuario";
$db_usuario="root";
$db_contra="";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

$consulta="SELECT * FROM datospersonales";
$resultado=mysqli_query($conexion,$consulta);

$fila=mysqli_fetch_row($resultado);
echo $fila[0]. " ";
echo $fila[1]. " ";
echo $fila[2]. " ";
echo $fila[3]. " ";

?>