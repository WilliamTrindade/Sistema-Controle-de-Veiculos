<?php 
	
	//verifica se existe uma sesão iniciada

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<meta charset="UTF-8">
		<title>Car Control - Login</title>
		<link rel="stylesheet" href="../../assets/css/estilo.css">
	</head>

	<body>
		<div class="container" >
			<header>
				<!-- Image and text -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  	<a class="navbar-brand" href="../../">
				    	<img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
				    	Controle Veícular
				  	</a>
				  	
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
				  	</button>

				  	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				    	<ul class="navbar-nav">
				    		<li class="nav-item">
				        		<a class="nav-link" href="../../">Dashboard</a>
				      		</li>
				      		<li class="nav-item ">
				        		<a class="nav-link active" href="cadastrarVeiculo.php">Cadastrar</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="visualizarVeiculo.php">Visualizar</a>
				      		</li>
				      		<li class="nav-item dropdown active">
						        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						        user
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="../controller/controleUsuario.php?opcao=Sair">Sair</a>
						        </div>
						    </li>
				    	</ul>
				  	</div>
				</nav>
			</header>

		</div>
	</body>

</html>