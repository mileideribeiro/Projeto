<?php 
session_start();
include_once('conexao.php');
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
	<div class="funcionario">
		<h1> Cadastar Funcionário</h1>
		<?php 
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<!--Dados do formulario do funcionario-->
		<form method="POST" action="funcionario1.php">
			<label>Nome: </label><br>
			<input type="text" name="nome" placeholder="Digite o nome completo" size="30">
			<br><br>
			
			<label>Idade: </label><br>
			<input type="text" name="idade" size="30">
			<br><br>
			
			<label>Telefone: </label>
			<input type="text" name="telefone" size="30">
			<br><br>
			
			<label>Endereço: </label>
			<input type="text" name="endereco" placeholder="Rua,n°-cidade" size="30">
			<br><br>
			
			<label>E-mail: </label><br>
			<input type="email" name="email" placeholder="Digite seu e-mail" size="30">
			<br><br>
			
			<label>Salario: </label><br>
			<input type="text" name="salario" placeholder="Salario do Funcionário" size="30">
			<br><br>
		
			<div class="wrapper">
				<div class="btn">
					<a href=""><input type="submit" value="Cadastrar"></a>
					<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
					<a href="listar2.php"><input type="button" value="Listar"></a>
				</div>
			</div>
	</div>		

		</form>
	</body>
</html>