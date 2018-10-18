<?php
	session_start();
    require 'conexao.php';

    if (!empty($_POST['sair'])) {
		unset($_SESSION["login"]);

	}

	require "valida_login.php";
?>
<html>
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/admin.css" />
        <title>Administração</title>
    </head>
		<body>
		<div id="site">
		
		<div id="BANNER">
			<h1>Portal</h1>

			<!--AQUI FICARÁ O BANNER-->
		</div>

		<div id = "Locais">
			<p class="texl"> Seja Bem-vindo</p>
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
				<center><h1 style="padding-bottom: 0">Listagens de Noticias</h1></center>
				<?php
					$sql = $pdo->query("SELECT * FROM noticias");
					echo "<h4 style='margin-top: 0;padding-left:115px'>".$sql->rowCount()." noticias postadas!!! </h4><hr>";		
					if ($sql->rowCount() > 0) {
						foreach ($sql->fetchAll() as $item) {
							echo "<h2>".$item['MACHETE_NOT']."</h2>";
							echo "<h3>".$item['RESUMO_NOT']."</h3>";
							echo "<p class='p'>".$item['TEXTO_NOT']."</p>";
							echo "<hr>";
						}
					}
				?>
			</div>
		</div>
	</body>
</html>