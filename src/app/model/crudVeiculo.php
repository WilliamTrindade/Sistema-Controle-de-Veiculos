<?php 

	include 'conexao_bd.php';

	function cadastrarVeiculo($placa, $marca, $modelo, $preco){
		conectar();
		query("INSERT INTO veiculo(placa, marca, modelo, preco) VALUES ('$placa', '$marca', '$modelo', $preco)");
		fechar();
	}

	function mostrarVeiculo(){
		conectar();
		$resultado = query("SELECT * FROM veiculo");
		fechar();
		return $resultado;
	}

	function mostrarVeiculoEditar($codigo){
		conectar();
		$resultado = query("SELECT * FROM veiculo WHERE codigo = $codigo");
		fechar();
		return $resultado;
	}

	function editarVeiculo($codigo, $placa, $marca, $modelo, $preco){
		conectar();
		query("UPDATE veiculo SET placa = '$placa', marca = '$marca', modelo = '$modelo', preco = $preco WHERE codigo = $codigo");
		fechar();
	}

	function excluirVeiculo($codigo){
		conectar();
		query("DELETE FROM veiculo WHERE codigo = $codigo");
		fechar();
	}
	
?>