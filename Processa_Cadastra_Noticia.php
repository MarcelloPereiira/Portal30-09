<?php 
		require "conexao.php";
		$manchete  = $_POST['Titulo'];
		$resumo  = $_POST['Resumo'];
		$texto  = $_POST['feedback'];
	
		//Consulta para ver se o usuário já esta cadastrado
		
		$consulta = $pdo->query("SELECT * FROM noticias WHERE machete_not = '$manchete'");
	
		if ($consulta->rowCount() > 0) {
				echo"<script>
				alert ('Notícia ja cadastrada. Codastre uma nova noticia')
					</script>";
			
				echo"<script>
				location.href = ('cadastra_noticia.php')
					</script>";
			
				exit();  //se for verdadeiro, para o fluxo Aqui!!!
		}
		else { //Para o notícia que não existe
			
			$cadastrar = $pdo->query("INSERT INTO noticias (MACHETE_NOT, RESUMO_NOT, TEXTO_NOT) VALUES
					('$manchete', '$resumo', '$texto')");	
					
				
			
			if ($cadastrar->rowCount() > 0) {
			
				echo"<script>
				alert ('$manchete cadastro com sucesso')
					</script>";
			
				echo"<script>
				location.href = ('cadastra_noticia.php')
					</script>";
				exit();
			}
			else{
				echo"<script>
					alert ('Ocorreu um erro no servidor.
											Tente de novo')
						</script>";
				
				echo"<script>
					location.href = ('cadastra_noticia.php')
						</script>";
			}
	}
	