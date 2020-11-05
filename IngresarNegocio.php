<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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