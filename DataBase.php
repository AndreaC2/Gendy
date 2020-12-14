<?php 

$conexion = 'mysql:host=localhost;port=3306;dbname=gendy';
$usuario = 'ankcalderonga';
$contraseña = 'Gendy1234';
try{
    $DB = new PDO($conexion,$usuario,$contraseña);
    
}catch(PDOException $e){
    echo("Error</br>");
    print $e->getMessage();
    die();
}

?>