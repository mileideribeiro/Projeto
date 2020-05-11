 <?php
			session_start();
				if (empty($_SESSION['login'])){
					//header("Location: login.php");
				}
	?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Silvana Variedade</title>
 <!--Estilo-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
#menuf{
	margin:0;
	padding:0;
	box-sizing:border-box;
	list-style:none;
	text-decoration:none;
}
.wrapper{
	display:flex; /* fixar o elemento*/
	position:relative;/*A posição é definida através de quatro outras propriedades: top, bottom, left e right*/
}
	

.wrapper .sidebar{
	position:fixed; /* fixar o elemento*/
	width:200px; /*largura*/
	height:100%; /* altura*/
	background:#333; /*cor*/
	padding: 30px 0;
	border-right: 1px solid #e0e4e7;	
}
.wrapper .sidebar h2{
	color: #fff;
	text-transform:uppercase;
	text-align:center;
	margin-bottom:30px;
}

.wrapper .sidebar ul li{
	padding:20px;
	border-bottom:1px solid rgba(0,0,0,0.05); /*separação dos termos*/
	border-top:1px solid rgba(225,225,225,0.05); /*linhas entre os termos*/
}

.wrapper .sidebar ul li a{
	color:#bdb8d7;/*cor cinza*/
	display:block;
	text-align: justify;
}

.wrapper .sidebar ul li a .fas{
	width:25px;
}
.wrapper .sidebar ul li:hover{
	background:  #ffc252;	
}

.wrapper .sidebar ul li:hover a{
	color:#fff;
}

.wrapper .sidebar .social_media{
	position:absolute;
	bottom:0;
	left:50%;
	transform:translateX(-50%);
	display:flex;
}
.wrapper .sidebar .social_media a{
	display:block;
	width:40px;
	background:rgb(167, 0, 92);
	height:40px;
	line-height:40px;
	text-align:center;
	margin:0 5px;
	color:#bdb8d7;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
}
.wrapper .main_content {
	width: 100%;
	margin-left: 200px;
}

.wrapper .main_content .header{
	padding: 15px;
	background: #333;
	color:#fff;
	border-bottom: 1px solid #e0e4e7;

}

.wrapper .main_content .info{
	margin: 20px;
	color:#717171;
	line-height: 25px;
}

.wrapper .main_content .info div{
	color: #fff;
	width: 13px;
}
.wrapper .main_content .info img{
	margin-left:10%; /*lado*/
	padding:50px;
	position:relative;
	width:70vw; /*largura*/
	height:40vw;
	margin-bottom:45%;
}
</style>

</head>
<body>
<div id="menuf">
	<div class="wrapper"> 
		<div class="sidebar">
			<img src="imagens/01.jpg" width="190" height="110" >
			<ul>
				<!--<li><a href="administrativo.php"><i class="fas fa-home"></i>Home</a></li>-->
				<li><a href="cliente_.php"><i class="fas fa-address-card"></i>Cadastrar Cliente</a></li>
			<!--<li><a href="f.funcionario.php"><i class="fas fa-address-book"></i>Cadastrar Funcionario</a></li>-->
				<li><a href="ven.dia.php"><i class="fas fa-pencil-alt"></i>Venda do dia</a></li>
				<li><a href="gastosfixo.php"><i class="fas fa-chart-line"></i>Gastos Fixo</a></li>
				<li><a href="gastosvariaveis.php"><i class="fas fa-chart-line"></i>Gastos Variáveis</a></li>
			<!--<li><a href="compras.php"><i class="fas fa-map-marker-alt"></i>Viajens </a></li>
				<li><a href="lucro.php"><i class="fas fa-calculator"></i></i>Lucro</a></li>
				<li><a href='formTexto.php'><i class="fas fa-file-import"></i>Importar documento de texto </a></li>
				<li><a href="listar.php"><i class="fas fa-list"></i> Listar usuários </a></li>-->
			</ul>
			<div class="social_media">
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-whatsapp-square"></i></a>
				
			</div>
		</div>
		<div class="main_content">
			<div class="header">Olá Funcionario&nbsp;&nbsp;<a href="sair.php">Sair</a> </div>
			<div class="info">
					<img src="imagens/01.jpg">
			</div>
		</div>
	</div>
</div>
</body>
</html>
