<? php 

$conexion = 'mysql:host=localhost;port=3307;dbname=gendy';
$usuario = 'root';
$contraseña = 'root';
	try{
    $DB = new PDO($conexion,$usuario,$contraseña);
    echo("connected");


echo "<pre>\n";*/	}catch(PDOException $e){
    echo("Error</br>");
    print $e->getMessage();
    die();
}