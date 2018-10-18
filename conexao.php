<?php 
try {
	global $pdo;
	$pdo = new PDO("mysql:dbname=portal;host=localhost;charset=utf8", "root", "");


} catch(PDOExeption $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}