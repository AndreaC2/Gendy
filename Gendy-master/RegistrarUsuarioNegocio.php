<?php
session_start();
require_once 'DataBase.php';
try {
    if (isset($_POST['razon']) && isset($_POST['correo']) && isset($_POST['contrasena']) &&
            isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['localidad']) &&
            !empty($_POST['razon']) && !empty($_POST['correo']) && !empty($_POST['contrasena']) &&
            !empty($_POST['direccion']) && !empty($_POST['telefono']) && !empty($_POST['localidad'])) {
         
                $sql2="SELECT `ID_NEGOCIO` FROM gendy.negocio";        

                $num=$DB->prepare($sql2); 
                $num->execute();
                $numero=$num->rowCount();
                $numero=$numero+1;                

                
        $sql = "INSERT INTO gendy.negocio(`ID_NEGOCIO`,`RAZON_SOCIAL`, `CONTRASENA_NEGOCIO`, `CORREO_ELECTRONICO_NEGOCIO`, 
        `TELEFONO_NEGOCIA`, `DIRECCION_NEGOCIO`, `LOCALIDAD`,`PUNTAJE_NEGOCIO`) VALUES (:id,:razon,:contrasena,
        :correo,:telefono,:direccion,:localidad,:puntaje)";


        $datos = $DB->prepare($sql);
        $datos->execute(array(

            
            ':id' => $numero,
            ':razon' => $_POST['razon'],
            ':contrasena' => $_POST['contrasena'],
            ':correo' => $_POST['correo'],
            ':telefono' => $_POST['telefono'],
            ':direccion' => $_POST['direccion'],
            ':puntaje' => 5,
            ':localidad' => $_POST['localidad']));


        header('Location: IngresarNegocio.php');
    }
} catch (Exception $ex) {
    echo $e->getMessage();
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Gendy | Registro Negocio</title>
        <link rel="stylesheet" href="css/registrar.css">
    </head>
    <body>
        <div class="registro_Cliente">
            <h2>Gendy</h2>
            <h1>Registrar Negocio</h1>
            <form method="post">
                <label>Razon Social:</label>
                <input type="text" name="razon">  
                <label>Correo Electronico:</label>
                <input type="email" name="correo">
                <label>Contraseña:</label>
                <input type="password" name="contrasena">
                <label>Telefono:</label>
                <input type="text" name="telefono">
                <label>Direccion:</label>
                <input type="text" name="direccion">
                <label>Localidad:</label>
                <input type="text" name="localidad">
                <input type="submit" value="Registrar" />
            </form>
        </div>
    </body>
</html> 