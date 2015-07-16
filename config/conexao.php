<?php

try{
	$pdo=new PDO("mysql:host=localhost;dbname=sindicato","root", "");
}catch(PDOException $e){
	echo $e->getMessage();
}
?>
