<?php 

	include 'conexao_bd.php';

	function cadastrarVeiculo($placa, $marca, $modelo, $preco){
		conectar();
		query("INSERT INTO veiculo(placa, marca, modelo, preco) VALUES ('$placa', '$marca', '$modelo', $preco)");
		fechar();
	}

	function mostrar(){
		conectar();
		$resultado = query("SELECT * FROM veiculo");
		fechar();
		return $resultado;
	}
	
?>