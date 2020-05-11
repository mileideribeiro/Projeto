<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Silvana Variedade</title>
 <!--Estilo-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<div class="variaveis">
		<h1> Gastos Variaveis </h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<!--Dados dos gastos variaveis-->
		<form method="POST" action="variaveis.php">
			<label>Material de Escritorio/<br> Produto de limpeza: </label>
			<input type="text" name="material">
			<br><br>
			
			<label>valor: </label><br>
			<input type="text" name="valor1">

			<br><br>
			
		
			
			<div class="wrapper">
				<div class="btn">
				<a href=""><input type="submit" value="Cadastrar"></a>
				<input type='button' value='Voltar' onclick='history.go(-1)' />
				<a href="listar5.php"><input type="button" value="Listar"></a>
				</div>
			</div>
		</div>
		</form>
	</body>
</html>