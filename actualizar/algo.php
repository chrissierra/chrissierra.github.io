<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pruebas chat</title>
</head>
<body>

	<?php 
function chat($path){
	$texto="";
	$fp= fopen($path, "r");
	/*
	while($linea= fgets($fp, 5)){
$linea = str_replace($cadena, "<b>$cadena</b>", $linea);

$texto.=$linea;
	}*/

	$texto= fpassthru($fp);
	
return $texto;
}


$path="hola.txt";



function i_contador($archivo, $texto, $nombre){
	
	

	$texto = $nombre . ":" ." ". $texto .  "<br>";

	$fl=fopen($archivo, "a");
	fwrite($fl, $texto);
	fclose($fl);
	
}
 
session_start();
$_SESSION["nombre"]= $_GET["nombre"];

$nombre= $_SESSION["nombre"];
$algo= $_GET["texto"];
i_contador("hola.txt", $algo, $nombre);
$texto= chat($path);
echo $texto;

header("location:index.php");

	 ?>
</body>
</html>