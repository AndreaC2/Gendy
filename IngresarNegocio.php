<?php
require_once './DataBase.php';
session_start();
if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    unset($_SESSION['user']);
    $sql = "SELECT * FROM gendy.negocio WHERE CORREO_ELECTRONICO_NEGOCIO=:correo and CONTRASENA_NEGOCIO=:contrasena ";
    $datos = $conpdo->prepare($sql);
    $datos->execute(array(
        ':correo' => $_POST['correo'], 
        ':contrasena' => $_POST['contrasena']));

    $data= $datos->fetch(PDO::FETCH_ASSOC);
    $numero = $datos->rowCount();
    if ($numero == 1) {
        $_SESSION['user'] = $data['ID_NEGOCIO'];
        $_SESSION["success"] = "Logged in.";
        header('Location: MenuCliente.php');
        return;
    } else {
        $_SESSION["error"] = "Datos Incorrectos";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gendy | Ingresar Negocio</title>
        <link rel="stylesheet" href="css/ingresar.css">
    </head>
    <body>
        <div class="ingresar_Panel">
            <h2>Gendy</h2>
            <!-- Titulo de la caja -->
            <h1>Ingresar Negocio</h1>
            <!-- recoge los datos para procesar -->
            <form method="post">
                <!-- Datos correo -->
                <label for="correo">Usuario:</label>                    
                <input type="email" name="correo">

                <!-- Datos Contraseña -->
                <label for="contrasena">Contraseña:</label>  
                <input type="password" name="contrasena">

                <!-- boton Ingresar -->
                <input type="submit" value="Ingresar" />
                <a href="RegistrarUsuarioNegocio.php">Registrarse</a><br>
            </form>
        </div>
    </body>
</html> 