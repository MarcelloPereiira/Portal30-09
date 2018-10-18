<?php
	if (isset($_SESSION["login"])){
		echo "Administrador";
	} else{
		echo "<script> location.href=('index.php')</script>";
	}
?>