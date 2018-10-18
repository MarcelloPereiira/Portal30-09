<?php
	session_start();
	require 'conexao.php';
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	/* ver o BD */
	
	$result = $pdo->query("SELECT login_user,senha_user 
							FROM usuarios
							WHERE
							login_user = '$login'
							AND
							senha_user = '$senha'");
							if ($result->rowCount() > 0) {
								$_SESSION["login"] = $login;
								echo "<script> location.href = ('Administracao.php')</script>";
							} else{
								echo "<script>alert('Login errado!!!')</script>";
								echo "<script>location.href=('index.php')</script>";
							}
							
								
?>