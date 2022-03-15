<?php
$conexion= mysqli_connect("localhost","root","","ecommerce");
$id="01";
$sentencia="DELETE FROM `carro_compra`";
$sentencia_correcta= mysqli_query($conexion,$sentencia);
if ($sentencia_correcta) {
    # code...
    header("location:http://localhost/dashboard/Archivos/E-commerce/E-comerce.php");
}

?>