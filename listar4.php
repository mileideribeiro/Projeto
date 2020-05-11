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
		<h1> Listar fixo</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			}
		$result_fixo="SELECT * FROM fixo";
		$resultado_fixo=mysqli_query($conn,$result_fixo);
		while($row_fixo = mysqli_fetch_assoc($resultado_fixo)){
			echo "ID: " .  $row_fixo['id_fixo'] . "<br>" ;
			echo "ALUGEL: " .  $row_fixo['aluguel'] . "<br>" ;
			echo "LUZ: " .  $row_fixo['luz'] . "<br>" ;
			echo "ÁGUA: " .  $row_fixo['agua'] . "<br>" ;
			echo "NET: " .  $row_fixo['net'] . "<br>" ;
			echo "SALARIO: " .  $row_fixo['salario_funcionario'] . "<br><hr>" ;
		}
		?>
		
		
		
	</body>
</html>