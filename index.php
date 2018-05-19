<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT *FROM tb_usuario");

foreach ($usuarios as $user) {
	
	foreach ($user as $key => $value) {

		echo $key ." = ".$value ."<br>";
	}

	echo "============================================<br>";
}
*/

$user = new Usuario();

$user->loadById(5);

echo $user;


?>