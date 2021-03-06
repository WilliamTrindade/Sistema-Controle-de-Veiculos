<?php 
	
	session_start();
	if (isset($_SESSION['nome'])){
		$nome = $_SESSION['nome'];
	}else{
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<meta charset="UTF-8">
		<title>Car Control - Visualizar Veículos</title>
		<link rel="stylesheet" href="../../assets/css/estilo.css">
	</head>

	<body>
		<div class="container" >
			<header>
				<!-- Image and text -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  	<a class="navbar-brand" href="../../">
				    	<i class="fas fa-car"></i>Controle Veicular
				  	</a>
				  	
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
				  	</button>

				  	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				    	<ul class="navbar-nav">
				    		<li class="nav-item">
				        		<a class="nav-link" href="../../">Dashboard</a>
				      		</li>
				      		<li class="nav-item ">
				        		<a class="nav-link" href="cadastrarVeiculo.php">Cadastrar</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link active" href="visualizarVeiculo.php">Visualizar</a>
				      		</li>
				      		
				    	</ul>
				  	</div>
				</nav>
				<div class="user">
					<p>Bem Vindo <?php echo $nome; ?> <a href="../controller/controleUsuario.php?opcao=Sair">Sair</a></p>
				</div>
			</header>
			<section>
				<h1>Visualizar Veículos</h1>
				<table class="table table-veiculo">
				  	<thead class="thead-dark">
				    	<tr>
				      		<th scope="col">Placa</th>
				      		<th scope="col">Marca</th>
				      		<th scope="col">Modelo</th>
				      		<th scope="col">Preço</th>
				      		<th scope="col">Opcão</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				  		<?php 
				  			include '../model/crudVeiculo.php';

				  			$resultado = mostrarVeiculo();

			                if($resultado){
			                    while($linha = mysqli_fetch_assoc($resultado)) {
			                    	$codigo = $linha['codigo'];
							  		$placa = $linha['placa'];
							  		$marca = $linha['marca'];
							  		$modelo = $linha['modelo'];
							  		$preco = $linha['preco'];	

							  		echo "

										<tr>
					      					<td>$placa</td>
					      					<td>$marca</td>
					      					<td>$modelo</td>
					      					<td><span>R$ </span>$preco</td>
					      					<td>
					      						<a class='btn btn-primary' href='editarVeiculo.php?codigo=$codigo'>Editar
					      						</a>
					      					</td>
				    					</tr>
							  		";	
							  	}
							}
				  		?>
				  	</tbody>
				</table>
			</section>
		</div>
	</body>
</html>