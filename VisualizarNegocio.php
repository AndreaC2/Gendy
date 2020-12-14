<?php
session_start();
require_once 'DataBase.php';
if (isset($_SESSION["success"])) {
    //echo('<label style="color:green">' . $_SESSION["success"] . "</label>\n");
    $negocio = $_GET["Negocio"];
    $_SESSION['negocio'] = $negocio;
} else {
    header('Location: index.php');
}
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
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 5.png" name='Calendario' onclick="openForm()" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 6.png" name='Ajustesusuario' onclick="openForm()" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 11.png" name='Crear' onclick="openForm()" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 4.png" name='Crear' onclick="openForm()" />
                </form>
            </div>
            <div class="informacionUsuario">
                <img class="Logo" src="css/Imagenes/Mesa de trabajo 19.png" alt="Gendy"/>
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
                <div class="informacionUsuario3">
                    <form action="CerrarSesion.php">
                        <input class="boton_cerrar" type="submit" value="Cerrar Sesion" name='Cerrarsesion' onclick="" />
                    </form>
                </div>
            </div>
            <div class="Menuopciones">
                <div class="Menuopcionesarriba">
                    <div class="separadorbarra"></div>
                    <div class="barracategorias">
                        <div class="separador"></div>
                        <label class="NombreNegocio"><?php
                            $sql = "SELECT * FROM gendy.negocio WHERE ID_Negocio =:negocio";
                            $datosUser = $DB->prepare($sql);
                            $datosUser->execute(array(':negocio' => $negocio));
                            while ($dataUser = $datosUser->fetch()) {
                                echo('<label class ="NombreNeg">' . $dataUser["RAZON_SOCIAL"] . '</label>');
                            }
                            ?></label>
                        <div class="separador2"></div>
                    </div>
                </div>
                <div class="Menuopcionesabajo">
                    <div class="separador2"></div>
                    <div class="separador2"></div>                    
                    <div class="Favoritos" id="negoser">
                        <label class="texto">Servicios<br></label>
                        <?php
                        $sql = "SELECT * FROM gendy.negocio JOIN gendy.servicios ON negocio.ID_NEGOCIO = servicios.ID_NEGOCIO WHERE negocio.ID_NEGOCIO =:negocio";
                        $datos = $DB->prepare($sql);
                        $datos->execute(array(':negocio' => $negocio));

                        while ($data = $datos->fetch()) {
                            ?>
                            <form action="CalendarioCliente.php?Servicio=<?php echo $data["ID_SERVICIOS"]; ?>" method="POST">
                                <input class="BotonServicios" type="submit" value="<?php echo $data["NOMBRE_SERVICIOS"]; ?>" name='Servicio' onclick="" />
                            </form>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html> 

