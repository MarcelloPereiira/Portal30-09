<?php
	session_start();
	require "conexao.php";

	if (!empty($_POST['sair'])) {
		unset($_SESSION["login"]);

	}

	require "valida_login.php";
?>
<html>
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/cnoticia.css" />
        <title>Cadastro de Noticias</title>
    </head>
		<body>
		<div id="site">
		
		<div id="BANNER">
			<h1>Portal</h1>

			<!--AQUI FICARÁ O BANNER-->
		</div>

		<div id="Locais">
			<p class="texl"> Seja Bem vindo</p>
			<div id="link">
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
			<p>Formulario de Cadastro de Noticias</p>
			<form method="POST" id="noticia" action="Processa_Cadastra_Noticia.php" >
				<Label>
					<span>Titulo : </span>
					<input type="text"  name="Titulo" size="40"></textarea>
					
				</label> 
				</br></br>
				<Label>
					<span>Resumo: </span>
					<input type="text"  name="Resumo" size="37"></textarea>
				</label>
				</br></br>
				<Label>
					<span>Noticia :</span>
					<textarea name="feedback"></textarea></br> 
				</label> </br>
				<input id="buttonoticia" type="submit" class="button" value="Cadastrar Noticia"/>
				</br></br>					
			</form>	
		</div>	
	</div>
</body>

</html>