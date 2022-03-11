<?php
$conexion= mysqli_connect("localhost","root","","ecommerce");
$id="03";
$cantidad=$_POST['cantidad'];
$sentencia="INSERT INTO `carro_compra`(`id_producto`,sesion,Cantidad_Carro) 
VALUES ('$id',01,$cantidad)";
 $resul=mysqli_query($conexion,$sentencia);
 if ($resul) {
     # code...
     header("location:http://localhost/dashboard/Archivos/E-commerce/E-comerce.php");
 }else{
     echo "no hay productos";
 }
?>