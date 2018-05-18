<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT *FROM tb_usuario");

foreach ($usuarios as $user) {
	
	foreach ($user as $key => $value) {

		echo $key ." = ".$value ."<br>";
	}

	echo "============================================<br>";
}

echo json_encode($usuarios);

?>