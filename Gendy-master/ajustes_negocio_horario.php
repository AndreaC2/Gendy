<?php
session_start();
require_once 'DataBase.php';
$c=$_SESSION['user'];


if(!empty($_POST['apertura'])){
    $sql = "UPDATE `negocio` SET `HORA_APERTURA` = :loc WHERE `negocio`.`ID_NEGOCIO`=$c";
    $lun=$DB->prepare($sql);
    $lun->setFetchMode(PDO::FETCH_ASSOC);
    $lun->execute(array(':loc' => $_POST['apertura']));
    header('Location: MenuNegocio.php');
}

if(!empty($_POST['cierre'])){
    $sql = "UPDATE `negocio` SET `HORA_CIERRE` = :loc WHERE `negocio`.`ID_NEGOCIO`=$c";
    $lun=$DB->prepare($sql);
    $lun->setFetchMode(PDO::FETCH_ASSOC);
    $lun->execute(array(':loc' => $_POST['cierre']));
    header('Location: MenuNegocio.php');
}    

if(!empty($_POST['dia_apertura'])){
    $sql = "UPDATE `negocio` SET `DIA_APERTURA` = :loc WHERE `negocio`.`ID_NEGOCIO`=$c";
    $lun=$DB->prepare($sql);
    $lun->setFetchMode(PDO::FETCH_ASSOC);
    $lun->execute(array(':loc' => $_POST['dia_apertura']));
    header('Location: MenuNegocio.php');
} 

if(!empty($_POST['dia_cierre'])){
    $sql = "UPDATE `negocio` SET `DIA_CIERRE` = :loc WHERE `negocio`.`ID_NEGOCIO`=$c";
    $lun=$DB->prepare($sql);
    $lun->setFetchMode(PDO::FETCH_ASSOC);
$lun->execute(array(':loc' => $_POST['dia_cierre']));
    header('Location: MenuNegocio.php');
} 

?>


<html>

    <head>
        <meta charset="utf-8">
        <title>Gendy | Ajustes Negocio</title>
        <link rel="stylesheet" href="css/ajustes.css">
    </head>
    <body>

        <div class="titulo">
            <h1>Horario del negocio</h1>
            <p>Ingrese los valores que desea modificar. Puede dejar en blanco los datos que no va a modificar</p>

            <div class = "botones">

                <form method="post">
                <label>Hora de apertura: (Formato 24h)</label>
                    <input type="text" name="apertura">
                    <label>Hora de cierre: (Formato 24h)</label>
                    <input type="text" name="cierre">
                    <br>
                    <label>Día de apertura: (Ingrese el día de la semana)</label>
                    <input type="text" name="dia_apertura">
                    <br>
                    <label>Día de cierre: (Ingrese el día de la semana)</label>
                    <input type="text" name="dia_cierre">
                    <input type="submit" value="Modificar" />

                </form>

                <form action="ajustes_negocio_pre.php" >
                        <input class="boton_volver" type="submit" value="Volver" name='Volver' onclick="" />
                </form>

            </div>
        </div>
            

    </body>
</html>