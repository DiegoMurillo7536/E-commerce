<?php
$conexion= mysqli_connect("localhost","root","","ecommerce");
$id="02";
$sentencia="INSERT INTO `carro_compra`(`id_producto`,sesion) VALUES ('$id',01)";
 $resul=mysqli_query($conexion,$sentencia);
 if ($resul) {
     # code...
     header("http://localhost/dashboard/Archivos/E-commerce/E-comerce.php");
 }else{
     echo "no hay productos";
 }
?>