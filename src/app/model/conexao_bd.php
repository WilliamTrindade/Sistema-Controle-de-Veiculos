<?php 

	$conexao;

	function conectar(){
		global $conexao;
		$conexao = mysqli_connect('localhost', 'root', '','controle_veiculo') or die(mysqli_connect_error());

	}
	function fechar(){
		global $conexao;
		$conexao = mysqli_close($conexao);
	}
	function query($sql){
		global $conexao;
		mysqli_query($conexao, "SET CHARACTER SET utf8");
		$query = mysqli_query($conexao, $sql) or die (mysqli_query_error());
		return $query;
	}

?>