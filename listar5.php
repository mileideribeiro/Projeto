<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Silvana Variedade</title>
 </head>
	<body>
		<h1> Listar Variáveis</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			}
		$result_variaveis="SELECT * FROM variaveis";
		$resultado_variaveis=mysqli_query($conn,$result_variaveis);
		while($row_variaveis = mysqli_fetch_assoc($resultado_variaveis)){
			echo "ID: " .  $row_variaveis['id_variaveis'] . "<br>" ;
			echo "MATERIAL DE ESCRITORIO: " .  $row_variaveis['material'] . "<br>" ;
			echo "VALOR1: " .  $row_variaveis['valor1'] . "<br>" ;
			echo "PRODUTOS DE LIMPEZA: " .  $row_variaveis['produto'] . "<br>" ;
			echo "VALOR2: " .  $row_variaveis['valor2'] . "<br><hr>" ;
		
		}
		?>

	</body>
</html>