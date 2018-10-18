<?php
	session_start();
	require "conexao.php";


$id = $_GET['id'];
$pdo->query("DELETE FROM noticias WHERE COD_NOT = '$id'");

header('Location: http://localhost/Portal30-09/Altera_Exclui_Noticia.php');