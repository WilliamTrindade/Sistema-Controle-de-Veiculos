<?php 

	include '../model/crudUsuario.php';

	$opcao = $_POST["opcao"];

	if ($opcao == "Entrar") {
		header("Location: ../../");
	}

?>