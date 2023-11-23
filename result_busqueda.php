<?php
require("conexionDB.php");


$busqueda=$_GET["search"];

$consulta="SELECT * FROM productos WHERE productos like '%$busqueda%'";

$resultado=mysqli_query($conexion,$consulta);

while ($fila = mysqli_fetch_assoc($resultado)) {

    echo "<table><tr><td>";
    echo $fila['id_producto']."<td>";
    echo $fila['seccion'] . "<td>";
    echo $fila['producto']."<td>";
    echo $fila['origen'] . "<td>";
    echo $fila['importado'] ."<td>";
    echo $fila['precio']."<tr><table>";  
    echo "<br><br>"; 
   }

?>