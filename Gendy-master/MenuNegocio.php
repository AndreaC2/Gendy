<?php
require_once 'DataBase.php';
session_start();
$c=$_SESSION['user'];

    $sql = "SELECT `RAZON_SOCIAL` FROM gendy.negocio WHERE `ID_NEGOCIO`=$c";
    $nombre_neg=$DB->prepare($sql);
    $nombre_neg->setFetchMode(PDO::FETCH_ASSOC);
    $nombre_neg->execute();

?>

<html>

    <head>
        <meta charset="utf-8">
        <title>Gendy | Menu Negocio</title>
        <link rel="stylesheet" href="css/menunegocio.css">
    </head>
    <body>
        

            <h1>Gendy</h1>
            

                <div class="titulo"> 
                <p>¡Hola! 

                <?php
                    while ($nom = $nombre_neg->fetch()){
                        echo ($nom["RAZON_SOCIAL"]);
                    }                
                ?>
                
                </p>
                <p>¿En que te podemos ayudar?</p>
                
                    <div class="botones">

                    <form action="calendario_negocio.php" >
                    <input class="boton_calendario" type="submit" value="Calendario de citas" name='Calendario de citas' onclick="" />
                    <br><br>
                    </form>

                    <form action="estadisticas_negocio.php" >
                    <input class="boton_estadisticas" type="submit" value="Estadisticas del negocio" name='Estadisticas del negocio' onclick="" />
                    <br><br>
                    </form>

                    <form action="ajustes_negocio.php" >
                    <input class="boton_ajustes" type="submit" value="Ajustes del negocio" name='Ajustes del negocio' onclick="" />
                    <br><br>
                    </form>

                    </div>

                </div>


    </body>
</html>