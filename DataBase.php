<?php
//conecta a la base de datos
$conpdo = new PDO('mysql:host=localhost;port=3306;db=gendy', 'ankcalderonga', 'Gendy1234');
//muesta los errores si existen
$conpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//imprime la tabla usuario por lineas 
/*$tabla = $conpdo->query("SELECT * FROM gendy.usuario");
while ($row = $tabla->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}

echo "<pre>\n";*/
?>
