<?php
session_start();
require_once 'DataBase.php';
if (isset($_SESSION["success"])) {
//echo('<label style="color:green">' . $_SESSION["success"] . "</label>\n");
} else {
    header('Location: ../index.php');
}


$e=$_SESSION['user'];

?> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Gendy | Menu Cliente</title>
        <link rel="stylesheet" href="css/MenuCliente.css">
    </head>
    <body>
        <section id="principal">
            <div class="barralateral">
                <form action="calendario_Cliente.php">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 5.png" name='Calendario' onclick="" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 6.png" name='Ajustesusuario' onclick="" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 11.png" name='Crear' onclick="" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 4.png" name='Crear' onclick="" />
                </form>
                <form action="CerrarSesion.php" >
                    <input class="logout" type="image" src="css/Imagenes/logout_invertido.png" name='logoff' onclick="" />
                </form>
            </div>

            <div class="informacionUsuario">
                <img class="Logo" src="css/Imagenes/-_Gendy azul.png" alt="Gendy"/>
                <div class="informacionUsuario2">
                    <label class="texto">¡Hola! 
                        <?php
                        $sql = "SELECT * FROM gendy.usuario WHERE usuario.ID_USUARIO =:usuario";
                        $datosUser = $DB->prepare($sql);
                        $datosUser->execute(array(':usuario' => $_SESSION['user']));
                        while ($dataUser = $datosUser->fetch()) {
                            echo('<label class ="texto">' . $dataUser["NOMBRE_USUARIO"] . '</label>');
                        }
                        ?>
                    </label>
                </div>
                
            </div>



            <div class="Menuopciones">
                <div class="Menuopcionesarriba">
                    <br>
                    <div class="barracategorias">
                        <label class="texto">Categorías<br></label>
                        <div class="separador2"></div>
                        <div class="categorias">
                            <form method="post">
                                <input class="categoriasboton1" type="submit" value="Fitness" name='Fitness' onclick="" />
                            </form>
                            <form method="post">
                                <input class="categoriasboton2" type="submit" value="Restaurantes" name='Restaurantes' onclick="" />
                            </form><!-- comment -->
                            <form method="post">
                                <input class="categoriasboton3" type="submit" value="Bienestar" name='Bienestar' onclick="" />
                            </form><!-- comment -->
                            <form method="post">
                                <input class="categoriasboton4" type="submit" value="Mecánico" name='Mecánico' onclick="" />
                            </form>
                            <form method="post">
                                <input class="categoriasboton5" type="submit" value="Belleza" name='Belleza' onclick="" />
                            </form>
                        </div>
                    </div>
                </div>





                <div class="Menuopcionesabajo">
                
                    <div class="buscar">
                        <form action="">
                            <input class="buscarboton" type="buscar" value="" placeholder="Busca tu servicio" name='buscar' onclick="mostrarServicios()" />
                        </form>  
                    </div>
                    <div class="separador2"></div>
                    <div class="separador2"></div>
                    <div class="separador2"></div>
                    <div class="separador2"></div>
                    <div class="separador2"></div>   




                    
                    
                    <div class="Favoritos">
                        <label class="texto">Selecciona un opcion: <br></label>
                        <div class="scrollfavoritos">

                            <form action="VisualizarTodosNegocios.php" >
                                <input class="BotonServicios" type="submit" value="Negocios" name='Nombre' onclick="" />
                            </form>

                            <form action="Visualizarfavoritos.php" >
                                <input class="BotonServicios" type="submit" value="Favoritos" name='Nombre' onclick="" />
                            </form>

                        </div>
                    </div>


                    <div class="Favoritos">
                        <label class="texto">Citas Programadas<br></label>
                        <div class="scrollfavoritos">
                            <?php {
                                $sql = "SELECT * FROM `cita_final` WHERE `id_usuario`= $e";
                                $datosFav = $DB->prepare($sql);
                                $datosFav->execute();

                                while ($dataFav = $datosFav->fetch()) {

                                    ?>
                                    <form action="calendario_Cliente.php" >
                                        <input class="BotonServicios" type="submit" value="<?php echo $dataFav["nombre_negocio"]; ?>" name='Nombre' onclick="" />
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>





<!--
                    <div class="Servicios" id = "serv">
                        <label class="texto">Servicios<br></label>
                        <div class="scrollServicios">
                            <?php
                            if (isset($_POST['Fitness'])) {
                                $sql = "SELECT * FROM gendy.pertenece JOIN gendy.negocio ON pertenece.ID_NEGOCIO = negocio.ID_NEGOCIO JOIN gendy.categorias ON pertenece.ID_CATEGORIA = categorias.ID_CATEGORIA WHERE NOMBRE_CATEGORIA =:categoria";
                                $datos = $DB->prepare($sql);
                                $datos->execute(array(':categoria' => $_POST['Fitness']));

                                while ($data = $datos->fetch()) {
                                    ?>
                                    <form action="VisualizarNegocio.php?Negocio=<?php echo $data["ID_NEGOCIO"]; ?>" method="POST">
                                        <input class="BotonServicios" type="submit" value="<?php echo $data["RAZON_SOCIAL"]; ?>" name='Servicio' onclick="" />
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            if (isset($_POST['Restaurantes'])) {
                                $sql = "SELECT * FROM gendy.pertenece JOIN gendy.negocio ON pertenece.ID_NEGOCIO = negocio.ID_NEGOCIO JOIN gendy.categorias ON pertenece.ID_CATEGORIA = categorias.ID_CATEGORIA WHERE NOMBRE_CATEGORIA =:categoria";
                                $datos = $DB->prepare($sql);
                                $datos->execute(array(':categoria' => $_POST['Restaurantes']));

                                while ($data = $datos->fetch()) {
                                    ?>
                                    <form action="VisualizarNegocio.php?Negocio=<?php echo $data["ID_NEGOCIO"]; ?>" method="POST">
                                        <input class="BotonServicios" type="submit" value="<?php echo $data["RAZON_SOCIAL"]; ?>" name='Servicio' onclick="" />
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            if (isset($_POST['Bienestar'])) {
                                $sql = "SELECT * FROM gendy.pertenece JOIN gendy.negocio ON pertenece.ID_NEGOCIO = negocio.ID_NEGOCIO JOIN gendy.categorias ON pertenece.ID_CATEGORIA = categorias.ID_CATEGORIA WHERE NOMBRE_CATEGORIA =:categoria";
                                $datos = $DB->prepare($sql);
                                $datos->execute(array(':categoria' => $_POST['Bienestar']));

                                while ($data = $datos->fetch()) {
                                    ?>
                                    <form action="VisualizarNegocio.php?Negocio=<?php echo $data["ID_NEGOCIO"]; ?>" method="POST">
                                        <input class="BotonServicios" type="submit" value="<?php echo $data["RAZON_SOCIAL"]; ?>" name='Servicio' onclick="" />
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            if (isset($_POST['Mecánico'])) {
                                $sql = "SELECT * FROM gendy.pertenece JOIN gendy.negocio ON pertenece.ID_NEGOCIO = negocio.ID_NEGOCIO JOIN gendy.categorias ON pertenece.ID_CATEGORIA = categorias.ID_CATEGORIA WHERE NOMBRE_CATEGORIA =:categoria";
                                $datos = $DB->prepare($sql);
                                $datos->execute(array(':categoria' => $_POST['Mecánico']));

                                while ($data = $datos->fetch()) {
                                    ?>
                                    <form action="VisualizarNegocio.php?Negocio=<?php echo $data["ID_NEGOCIO"]; ?>" method="POST">
                                        <input class="BotonServicios" type="submit" value="<?php echo $data["RAZON_SOCIAL"]; ?>" name='Servicio' onclick="" />
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            if (isset($_POST['Belleza'])) {
                                $sql = "SELECT * FROM gendy.pertenece JOIN gendy.negocio ON pertenece.ID_NEGOCIO = negocio.ID_NEGOCIO JOIN gendy.categorias ON pertenece.ID_CATEGORIA = categorias.ID_CATEGORIA WHERE NOMBRE_CATEGORIA =:categoria";
                                $datos = $DB->prepare($sql);
                                $datos->execute(array(':categoria' => $_POST['Belleza']));

                                while ($data = $datos->fetch()) {
                                    ?>
                            <form action="VisualizarNegocio.php?Negocio=<?php echo $data["ID_NEGOCIO"]; ?>" method="POST" >
                                        <input class="BotonServicios" type="submit" value="<?php echo $data["RAZON_SOCIAL"]; ?>" name='Servicio' onclick="" />
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

                        -->
        </section>
    </body>
</html> 
