<?php
session_start();
if (isset($_SESSION["success"])) {
    echo('<label style="color:green">' . $_SESSION["success"] . "</label>\n");
    unset($_SESSION["success"]);
}
// Check if we are logged in!
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Gendy | Menu Negocio</title>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/pushbar.css">
    </head>
    <body>
        <?php if (!isset($_SESSION["user"])) { ?>
        <?php
        } else {
            echo($_SESSION["user"]);
            ?>
            <p>Para <a href="CerrarSesion.php">Cerrar Sesion</a><p>
            <?php } ?>

            <h1>Gendy</h1>


            </form>
            
                <p>¡Hola!, ¿En que te podemos ayudar?</p>

                <div class="container"></div>
                    <!--<form  action="./IngresarNegocio.php">-->
                    <input class="boton" type="submit" value="Calendario de citas" name='Calendario de citas' onclick="" />
                    <br><br>
                    <!--<form  action="./IngresarNegocio.php">-->
                    <input class="boton" type="submit" value="Estadisticas del negocio" name='Estadisticas del negocio' onclick="" />
                    <br><br>
                    <!--<form  action="./IngresarNegocio.php">-->
                    <input class="boton" type="submit" value="Ajustes del negocio" name='Ajustes del negocio' onclick="" />
                    <br><br>
                </div>



    </body>
</html>