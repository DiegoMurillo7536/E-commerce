<?php
    $conexion=mysqli_connect("localhost","root","","ecommerce");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <title>E-commerce</title>
</head>

<body>


    <header>
        <h1>E-commerce</h1>
        <div id="menu">
            <ul>
                <li id="item"> <img src="add-gacfa42d99_640.png" alt="" class="carrito"> </img>
                    <ul id="desple">
                        <li>
                            <div id="scroll">
                            <table id="productocarro">
                                <tr>
                                    <th>Producto</th>
                                    <th>Marca</th>
                                    <th>Precio</th>
                                </tr>
                                <?php
                                 $sentencia="SELECT
                                 p.nombre,p.marca,p.precio FROM producto AS p
                                 INNER JOIN carro_compra as c ON c.id_producto=p.id";
                                 $resultado=mysqli_query($conexion,$sentencia);
                                while ($muestra=mysqli_fetch_array($resultado)) {
                                 # code...
                               ?> 
                                <tr>
                        
                                <td> <?php echo $muestra['nombre'] ?></td>
                                 <td> <?php echo $muestra['marca'] ?></td>
                                 <td> <?php echo $muestra['precio'] ?></td>
                                </tr>
                              
                               <?php
                                }
                               ?>
                            </table>
                            <table id="totalcarro">

                                <tr>
                                    <th>Total</th> 
                                    <?php
                                 $sentencia2="SELECT
                                 p.nombre,p.marca,p.precio,SUM(precio) FROM producto AS p
                                 INNER JOIN carro_compra as c ON c.id_producto=p.id";
                                 $resultado2=mysqli_query($conexion,$sentencia2);
                                while ($muestra2=mysqli_fetch_array($resultado2)) {
                                 # code...
                               ?> 
                                    <td><?php echo $muestra2['SUM(precio)'] ?></td>
                                </tr>
                                <?php
                                }
                               ?>
                            </table>
                                <br>
                            
                        </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </header>
    <h1 class="Compras Compras-Productos"> Productos al mejor precio</h1>

    <section class="Compras">

        <article class="Compras Compras-Articulo">
            <img src="pocket-watch-gf8c53787f_640.jpg" alt="" class="Compras Compras-Producto">
            <?php
                $producto="SELECT * FROM producto where id=01";
                $muestra_productos=mysqli_query($conexion,$producto);
                while ($resutado_muestra=mysqli_fetch_array($muestra_productos)) {
                    # code...
                ?>
            <h2 class="Compras Compras-NombreP"><?php  echo $resutado_muestra['nombre']?> <br> <?php  echo $resutado_muestra['marca']?></h2>
            <p class="desc"><?php  echo $resutado_muestra['descrip']?></p>
            <p class="Compras Compras-NombreP">Precio: <?php  echo $resutado_muestra['precio']?></p>
            <?php
                }
            ?>
            <form action="./Productos/Reloj1.php" method="post" class="Compras Compras-Formulario">
                <button class="Compras Compras-Ag"> Agregar al carrito</button>
            </form>
        </article>

        <article class="Compras Compras-Articulo ">
            <img src="smart-watch-gbd97687f1_640.jpg" alt="" class="Compras Compras-Producto">
            <?php
                $producto="SELECT * FROM producto where id=2";
                $muestra_productos=mysqli_query($conexion,$producto);
                while ($resutado_muestra=mysqli_fetch_array($muestra_productos)) {
                    # code...
                ?>
            <h2 class="Compras Compras-NombreP" name="Reloj"><?php  echo $resutado_muestra['nombre']?> <br> <?php  echo $resutado_muestra['marca']?></h2>
            <p class="desc"><?php  echo $resutado_muestra['descrip']?></p>
            <p class="Compras Compras-NombreP">Precio: <?php  echo $resutado_muestra['precio']?></p>
            <?php
                }
            ?>
            <form action="./Productos/Reloj2.php" method="post" class="Compras Compras-Formulario">
                <button class="Compras Compras-Ag"> Agregar al carrito</button>
            </form>
        </article>

        <article class="Compras Compras-Articulo ">
            <img src="wrist-g1d0e9f2a5_640.jpg" alt="" class="Compras Compras-Producto">
            <?php
                $producto="SELECT * FROM producto where id=03";
                $muestra_productos=mysqli_query($conexion,$producto);
                while ($resutado_muestra=mysqli_fetch_array($muestra_productos)) {
                    # code...
                ?>
            <h2 class="Compras Compras-NombreP"><?php echo $resutado_muestra['nombre']?> <br> <?php  echo $resutado_muestra['marca']?></h2>
            <p class="desc"><?php  echo $resutado_muestra['descrip']?></p>
            <p class="Compras Compras-NombreP">Precio:<?php  echo $resutado_muestra['precio']?></p>
            <?php
                }
            ?>
            <form action="./Productos/Reloj3.php" method="post" class="Compras Compras-Formulario">
                <button class="Compras Compras-Ag"> Agregar al carrito</button>
            </form>
        </article>
    </section>
</body>

</html>



<!-- <div id="menu">
    <ul>
        <li id="item"> hola
            <ul id="desple">
                <li> hola2</li>
            </ul>
        </li>
    </ul>
</div>

<li id="carro_principal"><img src="add-gacfa42d99_640.png" alt="" class="carrito"></img>

    

    -->