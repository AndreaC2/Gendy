<?php
session_start();
require_once './DataBase.php';
if (isset($_POST['nombre']) && isset($_POST['apodo']) && isset($_POST['contrasena']) &&
        isset($_POST['correo']) &&
        isset($_POST['telefono'])) {
    $sql = "INSERT INTO gendy.usuario(`NOMBRE_USUARIO`, `APODO_USUARIO`, `CONTRASENA`, `CORREO_ELECTRONICO`, `TELEFONO`) "
            . "VALUES (:nombre,:apodo,:contrasena,:correo,:telefono)";
    //revisa si la sintaxis de sql esta correcta, protege los datos de la DB
    $datos = $conpdo->prepare($sql);
    $datos->execute(array(
        //: protegen la base de datos no usar $
        ':nombre' => $_POST['nombre'],
        ':apodo' => $_POST['apodo'],
        ':contrasena' => $_POST['contrasena'],
        ':correo' => $_POST['correo'],
        ':telefono' => $_POST['telefono']));
    header('Location: IngresarCliente.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gendy | Registro Cliente</title>
        <link rel="stylesheet" href="css/registrar.css">
    </head>
    <body>
        <div class="registro_Cliente">
            <h2>Gendy</h2>
            <h1>Registrar Cliente</h1>
            <form method="post">
                <label>Nombre Completo:</label>
                <input type="text" name="nombre">  
                <label>Apodo:</label>
                <input type="text" name="apodo">
                <label>Correo Electronico:</label>
                <input type="email" name="correo">
                <label>Contraseña:</label>
                <input type="password" name="contrasena">
                <label>Telefono:</label>
                <input type="number" name="telefono">
                <input type="submit" value="Registrar" />
            </form>
        </div>
    </body>
</html> 