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
	
	<!--<script language="javascript" type="text/javascript">
	function enviar() {
		document.getElementById("myForm").action = "inscidade.php";
		document.getElementById("myForm").submit();
	}
	</script>-->
	<body>
			<div class="cliente">
			<h1> Cadastar Cliente</h1>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			} 
			?>
			
			<!--Dados do formulario do cliente-->

			<form method="POST" action="insereUsuario.php">
				<label>Nome: </label>
				<input type="text" name="nome" placeholder="Digite o nome completo" size="30">
				<br><br>
				
				<label>Telefone: </label>
				<input type="text" name="telefone" size="30">
				<br><br>
				
				<label>Sexo: </label><br/>
				Feminino <input type="radio" name="sexo" id="feminino" value="feminino" checked /><br>
				Masculino <input type="radio" name="sexo" id="maculino" value="masculino"/><br>
				Não declarar <input type="radio" name="sexo" id="naodeclarado" value="naodeclarar" /><br>
				<br><br>
				
				<label>Endereço: </label>
				<input type="text" name="endereco" placeholder="Rua,n°-cidade" size="30">
				<br><br>
				 
				<label>E-mail: </label>
				<input type="email" name="email" placeholder="Digite seu e-mail" size="30">
				<br><br>
			
				<!-- Botões -->
				<div class="wrapper">
					<div class="btn">
						<a href=""><input type="submit" value="Cadastrar"></a>
						<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
						<a href="listar1.php"><input type="button" value="Listar"></a>
					</div>
				</div>
			
			</form>
		</div>
	</body>
</html>