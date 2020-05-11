<?php
	session_start();
	if (empty($_SESSION['login'])){ 
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Silvana Variedade</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--Estilo-->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
	#fixa{
	position: absolute;
	width: 20%;
	height: 400px;
	background: black;
	}

	.header {
		position: fixed;
	}

  </style>


</head>
<body>
<nav class="menu2">
	<ul>
		<li><i class="fas fa-address-card"></i> Cadastro
			<ul>
				<li><i class="fas fa-address-card"></i> Cliente</li>
				<li><i class="fas fa-list"></i> Listar C.
					<ul>
						<li><a href="cliente_.php">Cadastrar-se</a></li>
						<li><a href="listar1.php">Listar</a></li>
					</ul>
				</li>
				<li><i class="fas fa-list"></i> Gerar PDF
					<ul>
						<li><a href="#">Avista</a></li>
						<li><a href="#">Boleto</a></li>
					</ul>
				</li>		
			</ul>
		</li>

		<li><i class="fas fa-address-book"></i> Cadastro
			<ul>
				<li><i class="fas fa-address-book"></i> Funcionario</li>
					<li><i class="fas fa-list"></i> Listar F.
						<ul>
							<li><a href="f.funcionario.php">Cadastrar-se</a></li>
							<li><a href="listar2.php">Listar</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fas fa-list"></i> Gerar PDF</a>
						<ul>
							<li><a href="#">Folha de Pagamento</a></li>
						</ul>
					</li>
			</ul>
		</li>

		<li><i class="fas fa-pencil-alt"></i> Vendas
			<ul>
				<li><a href="ven.dia.php">Vendas do Dia</a></li>
				<li><a href="listar3.php">Listar Vendas do dia</a></li>
			</ul>
		</li>

		<li><i class="fas fa-chart-line"></i> Gastos
			<ul>
				<li><a href="#"><i class="fas fa-chart-line"></i> Variaveis</a>
					<ul>
						<li><a href="gastosvariaveis.php">Gastos Variaveis</a></li>
						<li><a href="listar5.php">Listar Gastos Variaveis</a></li>
					</ul>
				</li>
					<li><a href="#"><i class="fas fa-chart-line"></i> Fixos</a>
						<ul>
							<li><a href="gastosfixo.php">Gastos Fixos</a></li>
							<li><a href="listar4.php">Listar Gastos Fixo</a></li>
						</ul>
					</li>
			</ul>
		</li>

		<li><i class="fas fa-map-marker-alt"></i> Viajens
			<ul>
				<li><a href="compras.php">Registro de Viajens</a></li>
				<li><a href="listar6.php">Listar Viajens</a></li>
				<li><a href="#">Gerar PDF</a></li>
			</ul>
		</li>

		<li><i class="fas fa-calculator"></i> Lucro
			<ul>
				<li><a href="#"><i class="fas fa-calculator"></i></i> Lucro</a>
					<ul>
						<li><a href="lucro.php">Armazenamento do Lucro</a>
						<li><a href="#">Listar Lucro</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fas fa-list"></i> Total</a>
					<ul>
						<li><a href="#">Fixo</a></li>
						<li><a href="#">Variaveis</a></li>
						<li><a href="#">Viajens</a></li>
					</ul>
				</li>
			</ul>
		</li>

		<li><i class="fas fa-file-import"></i> Importar
			<ul>
			<li><a href='formTexto.php'>Documento de texto </a></li>
			</ul>
		</li>
	</ul>
</nav>
<div>
    <img src="imagens/01.jpg" style="width:99.7%;">
</div>

	
</body>
</html>