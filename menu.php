<nav id="menu">	  
			<!--Estilo-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<style>
	#menu ul{
		list-style: none;
		height:60px;
		overflow: hidden;
		background-color: #333;
	}
	li{
		float: left;
	}
	li a {
		padding: 0px 20px;
		display:block;
		color: white;
		text-align: center;
		text-decoration: none;

	}
	li a:hover{
		background-color: #111;
		top:2px;
	}

	
	</style>
<nav id="menu">
	<ul>
</br>
			<li>
			
				<a href="index.php"><i class="fas fa-home"></i> Inicio</a>
				
			</li>
			<!--<li>
			
				<a href="listar.php"><i class="fas fa-list"></i> Listar usuários </a>
				
			</li>-->
			<li>
			
				<a href="contato.php"><i class="fas fa-phone"></i> Entre em contato </a>
				
			</li>
			

			<?php 
			
			if (empty($_SESSION['login'])){ 
			
				echo "<li><a href='login.php'>Área Restrita </a></li>";
			}else{
				"<li><a href='formTexto.php'>Importar documento de texto </a></li>";
			}
			?>

	</ul>	
</nav>

