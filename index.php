

<html> 
	<head>
		
	<?php
			session_start();
				if (empty($_SESSION['login'])){
					header("Location: login.php");
				}
	?>
	<?php
 include_once('menu.php');
	?>
	<?php
  	 echo "Olá,Seja bem vindo: " . $_SESSION['login']."";    
	?>
 
&nbsp;&nbsp;<a href="sair.php">Sair</a> 
		<title>Cadastro de usuários</title>	
<script language="javascript" type="text/javascript">
	//function mostraImagem() {
		//document.getElementById("myForm").submit();
	//}
	function enviar() {
		document.getElementById("myForm").action = "inscidade.php";
		document.getElementById("myForm").submit();
	}
</script>
<?php
/*$img = "";

if (!empty($_POST['imagem'])){
	$img = $_POST['imagem'];
}*/
?>		
		<!--Estilo-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		
	</head>
<body>
<!--<div class="wrapper">
	<div class="payment">
		<div class="payment-logo">
			<p>sv</p>
		</div>
			<h2>Cadastrar Usuário</h2>

	<div class="form">

		<form method="POST" action="insereUsuario.php">
		<div class="card space icon-relative">
			<label class="label">Nome: </label>
			<input type="text" class="input" name="nome" placeholder="Digite o nome completo"><br><br>
			<i class="fas fa-user-alt"></i>
		</div>
		<div class="card space icon-relative">
			<label  class="label">E-mail: </label>
			<input type="email" class="input" name="email" placeholder="Digite o e-mail"><br><br>
			<i class="fas fa-at"></i>
		</div>
		<div class="card space icon-relative">
			<label class="label">Foto: </label>
			<input type="file" class="input" name="imagem" id="imagem" value="<?php //echo $img; ?>" >
			<i class="fas fa-images"></i><br><br>
		</div>	
		<div class="btn">
			<input type="submit" value="Cadastrar"><br><br>
			<input type="reset" value="Limpar"><br><br>
			<a href="listar.php"><input type="button" value="Listar usuários cadastrados" ></a>
		</div>
		</form>
		</div>
	</div>
	</div>
</div> -->
</body>
</html>



