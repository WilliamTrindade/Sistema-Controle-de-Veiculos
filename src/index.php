<?php 
	
	session_start();
	if (isset($_SESSION['nome'])){
		$nome = $_SESSION['nome'];
	}else{
		header("Location: app/view/login.php");
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
		<title>Car Control</title>
		<link rel="stylesheet" href="assets/css/estilo.css">
	</head>

	<body>
		<div class="container">
			<header>
				<!-- Image and text -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="index.php">
					   	<i class="fas fa-car"></i>Controle Veicular
					</a>
					  	
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					   	<ul class="navbar-nav">
					    	<li class="nav-item">
					        	<a class="nav-link active" href="index.php">Dashboard</a>
					      	</li>
					      	<li class="nav-item ">
					        	<a class="nav-link" href="app/view/cadastrarVeiculo.php">Cadastrar</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="app/view/visualizarVeiculo.php">Visualizar</a>
					      	</li>
					    </ul>
					</div>
				</nav>
				<div class="user">
					<p>Bem Vindo <?php echo $nome; ?> <a href="app/controller/controleUsuario.php?opcao=Sair">Sair</a></p>
				</div>
			</header>
			<section>
				<div class="row">
					<div class="col-md-6 col-sm-12 info">
					    <h1>Quantidade de veículos</h1>
					    <i class="fas fa-chart-pie"></i>

				     	<?php 

				     		include 'app/model/crudVeiculo.php';

				     		$resultado = mostrarVeiculo();

				     		$i;
				     		$total;
				     		global $total;
			              global $i;
			            	$i = 0;
			            	$total = 0;
				     		if($resultado) {
				     			while($linha = mysqli_fetch_assoc($resultado)) {
			              $codigo = $linha['codigo'];
			              $preco = $linha['preco'];
			              global $total;
			              global $i;
			            	$i++;
			            	$total = $total + $preco;
			            }
				     		}
				     		echo "
									<p class='number'>$i</p>
				     		";
			     		?>
					</div>
					<div class="col-md-6 col-sm-12 info">
						<h1>Valor total dos veículos</h1>
						<i class="fas fa-dollar-sign"></i>
						<?php 
						    echo "
								<p class='number'>
									<span>R$ $total</span>			
								</p>
					     	";
						 ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="app/view/cadastrarVeiculo.php"><button type="button" class="btn btn-primary btn-sm my-btn">Cadastrar Veículo</button></a>
					</div>
				</div>	
			</section>
		</div>
	</body>
</html>