<?php


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
                <label>Razon Social:</label>
                <input type="text" name="razon">  
                <label>Correo Electronico:</label>
                <input type="email" name="correo">
                <label>Contraseña:</label>
                <input type="password" name="contrasena">
                <label>Telefono:</label>
                <input type="number" name="telefono">
                <label>Direccion:</label>
                <input type="text" name="direccion">
                <label>Localidad:</label>
                <input type="text" name="localidad">
                <input type="submit" value="Registrar" />
            </form>
        </div>
    </body>
</html> 