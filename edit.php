<?php
	session_start();
	require "conexao.php";
	
	$id = $_GET['id'];
	if(!empty($_POST['m'])){
		$manchete = $_POST['m'];
		$titulo = $_POST['r'];
		$noticia = $_POST['t'];
		$pdo->query("UPDATE noticias SET MACHETE_NOT = '$manchete', RESUMO_NOT = '$titulo', TEXTO_NOT = '$noticia' WHERE COD_NOT = '$id'");
	}
	
		$consulta = $pdo->query("SELECT * FROM noticias WHERE COD_NOT = '$id'");
		
			echo "<h3>".$consulta->rowCount()." noticias postadas!!! </h3>";
			if ($consulta->rowCount() > 0) {
				foreach ($consulta->fetchAll() as $item) {
					echo "<form method='POST'>";
					echo "Manchete:<br><h2><input name='m' value='".$item["MACHETE_NOT"]."'> </h2>";
					echo "Resumo:<br><h3><input name='r' value='".$item["RESUMO_NOT"]."'> </h3>";
					echo "Noticia:<br><h2><input name='t' value='".$item["TEXTO_NOT"]."'></h2>";
					echo "<input type='submit' value='Editar'>";
					echo "</form>";
					echo "<hr>";
				}
			}
				
?>
<a href='http://localhost/Portal30-09/Altera_Exclui_Noticia.php'>Voltar</a>