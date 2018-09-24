<?php 

	include '../model/crudVeiculo.php';

	$opcao = $_POST["opcao"];

	if($opcao == "Cadastrar Veículo"){
		$placa = $_POST["placa"];
		$marca = $_POST["marca"];
		$modelo = $_POST["modelo"];
		$preco = $_POST["preco"];

		cadastrarVeiculo($placa, $marca, $modelo, $preco);

		header("Location: ../view/cadastrarVeiculo.php");
	}


?>