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
        <title>Gendy | Menu Cliente</title>
        <link rel="stylesheet" href="css/ingresar.css">
    </head>
    <body>
        <?php
        if ( ! isset($_SESSION["correo"]) ) { ?>
        <?php } else { ?>
            <p>This is where a cool application would be.</p>
            <p>Please <a href="CerrarSesion.php">Log Out</a> when you are done.</p>
        <?php } ?>
    </body>
</html> 