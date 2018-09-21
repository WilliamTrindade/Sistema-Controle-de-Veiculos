<?php 

	include 'conexao_bd.php';

	function cadastrar($placa, $marca, $modelo, $ano){
		conectar();
		query("INSERT INTO veiculo(placa, marca, modelo, ano) VALUES ('$placa', '$marca', '$modelo', $ano)");
		fechar();
	}
	function mostrar(){
		conectar();
		$resultado = query("SELECT * FROM veiculo");
		fechar();
		return $resultado;
	}
	
?>