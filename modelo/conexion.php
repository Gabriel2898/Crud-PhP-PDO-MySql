<?php  
$server="localhost:3307";
	$contrasena = '';
	$usuario = "root";
	$nombrebd= "crud_php";

	try {
		$bd = new PDO('mysql:host=localhost:3307;dbname=crud_php', 'root', ''
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>