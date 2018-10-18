<?php
	session_start();
	require "conexao.php";
?>

<html>
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" />
        <script language="javascript" type="text/javascript">

			function validar() {
				var login = form_login.login.value;
				var senha = form_login.senha.value;
				
				if(login == ""){
					alert("COLOCA O LOGIN");
					form_login.nome.focus();
					return false;
					}
					if (senha == ""){
						alert ("ESQUECEU A SENHA?");
						form_login.senha.focus();
						return false;
						}
			}
    	</script>
		<title>INDEX</title>
    </head>
	<body>
		<div id="site">
			<div id= "busca">
				<form>
					<label name="buscar"> Busca: </label>
					<input type="text" name="buscar"/></br>
					<input type="submit" value="busca">
				</form>
			</div>
			<div id="BANNER">
				<h1>Portal</h1>
				<!--AQUI FICARÁ O BANNER-->
			</div>
			<div id="arearestrita">
				<p class="ar">Area Restrita</p>
				<form action= "Processa_login.php" method="post" name="form_login">
		            <p>
		                <label>Login :</label><br>
		                <input type= "text" name="login" size="20"/>
		            </p>
		            <p>
		                <label>Senha:</label><br>
		                <input type="password" name="senha" size="20"/>
		            </p>
	                 <p>
	                     <input type="submit" name="entrar" value="Entrar" onclick="return validar()" />
	                </p>
	        	</form>
			</div>
			<div id="conteudo">
				<center><h1>Listagens de Noticias</h1></center>
				<?php
					$sql = $pdo->query("SELECT * FROM noticias");
					echo "<h4> ".$sql->rowCount()." noticia(s) postada(s)!!! </h4><hr>";
					if ($sql->rowCount() > 0) {
						foreach ($sql->fetchAll() as $item) {
							echo "<h2>".$item['MACHETE_NOT']." </h2>";
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