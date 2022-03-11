<?php
$conexion= mysqli_connect("localhost","root","","ecommerce");
$id="01";
$cantidad=$_POST['cantidad']
$sentencia="INSERT INTO `carro_compra`(`id_producto`,sesion,cantidad) VALUES ('$id',01)";
 $resul=mysqli_query($conexion,$sentencia);
 if ($resul) {
     # code...
     header("location:http://localhost/dashboard/Archivos/E-commerce/E-comerce.php");
 }else{
     echo "no hay productos";
 }
?>