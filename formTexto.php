<?php
session_start();
include ('menu.php');
?>
<html>
	<head>
		
		<title>Cadastro de usuários</title>		
		<link rel="stylesheet" href="css/estilo.css"  type="text/css"/>
	</head>
	<body>
		<br><br>
		<h1>Importar dados dos usuários</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			
			<input type="submit" value="Importar">
		</form>
	</body>
</html>