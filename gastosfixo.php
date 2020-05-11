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
	<div class="fixo">
		<h1> Gastos Fixo </h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<!--Dados dos gastos fixo-->
		<form method="POST" action="fixo.php">
			<label>Aluguel: </label>
			<input type="text" name="aluguel" size="30">
			<br><br>
			
			<label>Luz: </label>
			<input type="text" name="luz" size="30">
			<br><br>
			
			<label>Agua: </label>
			<input type="text" name="agua" size="30">
			<br><br>
			
			<label>Internet: </label>
			<input type="text" name="net" size="30">
			<br><br>
			
			<label>Salario: </label>
			<input type="text" name="salario_funcionario" size="30">
			<br><br>

			
		
			<div class="wrapper">
					<div class="btn">
				<a href=""><input type="submit" value="Cadastrar"></a>
				<input type='button' value='Voltar' onclick='history.go(-1)' />
				<a href="listar4.php"><input type="button" value="Listar"></a>
					</div>
				</div>
	</div>
		</form>
	</body>
</html>