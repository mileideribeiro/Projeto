<?php
session_start();
include_once("conexao.php");
?>

<html>
	<head>
		<title>Silvana Variedades</title>
		<link rel="stylesheet" href="css/estilo.css"  type="text/css"/>
	</head>
	<style>
		*{
			color:white;
		}
		table{
			HEIGHT:50%;
			WIDTH:70%;
			margin-left: 15%;
		}
		tr {
			text-align:center;
			bottom:middle;
		}

		#botão { 
			margin-left: 15%;
		}
		
	</style>

	<body>
	<br>
		<h1> Listar Fixo</h1>

<table border="0"></table>	 

		<?php
			$busca = "";
			$mysqli = new mysqli("localhost", "root", "", "test");
	//a variável result recebe o select do banco de dados
	if ($result = $mysqli->query("SELECT id_fixo, aluguel, luz, agua, net, salario_funcionario, created FROM fixo where nome like '".$busca."%'")){
				echo '<table border="6">';
				echo '<tr>';
				echo '<td> ALUGUEL</td> ';
				echo '<td> LUZ</td>';
				echo '<td> AGUA</td>';
				echo '<td> INTERNET </td>';
				echo '<td> SALARIO DO FUNCIONARIO</td>';
				echo '<td>DATA E HORA DO CADASTRO</td>';
				echo '</tr>';	

			while($row_fixo = mysqli_fetch_assoc($result)){
				echo'<tr>';
				echo '<td>'.  $row_fixo['aluguel'] . '</td>';
				echo '<td>' .  $row_fixo['luz'] . '</td>'  ;
				echo '<td>' .  $row_fixo['agua'] . '</td>'  ;
				echo '<td>' .  $row_fixo['net'] .'</td>'  ;
				echo '<td>' .  $row_fixo['salario_funcionario'] . '</td>' ;
				echo '<td>' . $row_fixo['created'] . '</td>' ;
			if (!empty($_SESSION['login'])){ 
			echo "<td><a href='excluir.php?tipo=2&id_fixo=" . $row_fixo['id_fixo'] . "'><img src='imagens/del.png' width='20' height='20' title='Excluir' /></td>";
			echo "<td><a href='editar.php?tipo=2&id_fixo=". $row_fixo['id_fixo'] ."'/><img src='imagens/edit.jpg' width='20' height='20' title='Alterar' /></td>";
			}
				echo '</tr>';
			}
	  echo '</table>';
	  $result->close();
	}
		?>
		<br><br>
		<div id="botão">
			<tr> 
				<td><a href="gastrosfixo.php"><input type="button"  value="Cadastrar" ></a></td>
				<td><a href="gerarpdf1.php"><input type="button" value="Gerar PDF" ></a></td>
				<td><input type="button" value="Voltar" onClick="JavaScript: window.history.back();"></td>
			</tr>
		</div>
		
	</body>
</html>