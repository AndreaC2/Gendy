<?php
header('Content-Type:application/json');
require_once 'DataBase.php';
session_start();

if(isset($_SESSION['user'])){
}else{
    header('Location: ../index.php');
}

$c=$_SESSION['user'];

    $accion=(isset($_GET['accion']))?$_GET['accion']:"leer";

    switch($accion){
        case "agregar":

            echo "agregar";

        break;

        case "eliminar":

            if(isset($_POST["id_Cita"])){            
                
                $sql1 = "DELETE FROM `cita_final` WHERE `id_cita` = :valor";
                $we=$DB->prepare($sql1);
                $we->execute(array(':valor' => $_POST["id_Cita"]));

                $sql2 = "DELETE FROM `cita` WHERE `id` = :valor";
                $we2=$DB->prepare($sql2);
                $we2->execute(array(":valor" => $_POST["id_Cita"]));   

            }

            echo json_encode(true);

        break;

        case "modificar":

            $a=$_POST["id_Cita"];

            $sql1 = "UPDATE `cita` SET `start` = :inicio, `end` = :fin WHERE `cita`.`id` = $a";
            $we=$DB->prepare($sql1);
            $we->execute(array(
                ":inicio" => $_POST["start"],
                ":fin" => $_POST["end"],
            )); 
            
            $sql2 = "UPDATE `cita_final` SET `start` = :inicio, `end` = :fin WHERE `cita_final`.`id_cita` = $a";
            $we2=$DB->prepare($sql2);
            $we2->execute(array(
                ":inicio" => $_POST["start"],
                ":fin" => $_POST["end"],
            )); 

            echo json_encode(true);

        break;
        
        default:
            $sql1 = "SELECT `id_cita`,`nombre_usuario`,`telefono_usuario`,`nombre_servicio`,`descripcion_servicio`, `precio_servicio`,`start`,`end` FROM `cita_final` WHERE `id_negocio`=$c";
            $we=$DB->prepare($sql1);
            $we->execute();
            $res=$we->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($res);
        break;
    }

?>