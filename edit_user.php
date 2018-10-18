<?php
	session_start();
	require "conexao.php";
	
	$id = $_GET['id'];
	if(!empty($_POST['m'])){
		$manchete = $_POST['m'];
		$titulo = $_POST['r'];
		$noticia = $_POST['t'];
		$pdo->query("UPDATE usuarios SET NOME_USER = '$manchete', LOGIN_USER = '$titulo', SENHA_USER = '$noticia' WHERE COD_USER = '$id'");
	}
	
		$consulta = $pdo->query("SELECT * FROM usuarios WHERE COD_USER = '$id'");
		
			echo "<h3>".$consulta->rowCount()." Usuário(s) Cadastrados!!! </h3>";
			if ($consulta->rowCount() > 0) {
				foreach ($consulta->fetchAll() as $item) {
					echo "<form method='POST'>";
					echo "Nome:<br><h2><input name='m' value='".$item["NOME_USER"]."'> </h2>";
					echo "Login:<br><h3><input name='r' value='".$item["LOGIN_USER"]."'> </h3>";
					echo "Senha:<br><h2><input name='t' value=''></h2>";
					echo "<input type='submit' value='Editar'>";
					echo "</form>";
					echo "<hr>";
				}
			}
				
?>
<a href='http://localhost/Portal30-09/Altera_Exclui_User.php'>Voltar</a>