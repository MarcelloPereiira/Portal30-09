<?php
	session_start();
	include "conexao.php";

	if (!empty($_POST['sair'])) {
		unset($_SESSION["login"]);

	}

	require "valida_login.php";
?>
<html>
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/aenoticia.css" />
        <title>ALTERA_EXCLUI_NOTICIA</title>
    </head>
		<body>
		<div id="site">
		
		<div id="BANNER">
			<h1>Portal</h1>
			<!--AQUI FICARÁ O BANNER-->
		</div>
		<div id = "Locais">
			<p class="texl"> Seja Bem vindo</p>
			<div id = "link">
				<a href="Administracao.php">Administração</a><p>
				<a href="cadastra_noticia.php">Cadastro de Noticias</a><p>
				<a href="Altera_Exclui_Noticia.php">Alteração/Exclusao de Noticias</a></p>

				<form method="POST">
					<input type="hidden" name="sair" value="sair">
					<input type="submit" value="Sair">
				</form>
			</div>
		</div>
			<div id="conteudo">	
			<?php
				$consulta = $pdo->query("SELECT * FROM noticias");
					
				echo "<h3> ".$consulta->rowCount()." noticia(s) cadastrada(s)! </h3><hr>";?>

				<?php if ($consulta->rowCount() > 0): ?>
					<?php foreach($consulta->fetchAll() as $item): ?>
						<tr>
							<td>
								<?php echo "<p>".$item['MACHETE_NOT']."</p>"; ?>
							</td>
							<td>
								<a style="padding-left: 30px" href="http://localhost/Portal30-09/edit.php?id=<?php echo $item['COD_NOT']; ?>">Alterar</a> | <a href="http://localhost/Portal30-09/Processa_Excluir.php?id=<?php echo $item['COD_NOT']; ?>">Excluir</a>
							</td>
						</tr>
						<hr>	
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</body>
</html>