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
		<h1> Listar Viagens</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			}
		$result_viagens="SELECT * FROM viagens";
		$resultado_viagens=mysqli_query($conn,$result_viagens);
		while($row_viagens = mysqli_fetch_assoc($resultado_viagens)){
			echo "ID: " .  $row_viagens['id_viagens'] . "<br>" ;
			echo "LUGAR: " .  $row_viagens['nome'] . "<br>" ;
			echo "VALOR: " .  $row_viagens['valor'] . "<br>" ;
			echo "DATA DA VIAGEM: " .  $row_viagens['data'] . "<br><hr>" ;
		}
		?>

	</body>
</html>