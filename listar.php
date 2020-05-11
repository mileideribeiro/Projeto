<?php
session_start();
include_once("conexao.php");
include('menu.php');	
	
?>

<html >
	<head>


		<title>Listar Usuários</title>
		<!--<link rel="stylesheet" href="css/estilo.css"  type="text/css"/>-->
	</head>

	<body>
	
	
		<h2> Listar Usuários</h2>
		<table border="0">
<tr>
<td><a href="index.php"><input type="button" value="Cadastrar" ></a></td>
<td><a href="gerarpdf.php"><input type="button" value="Gerar PDF" ></a></td>
<td><a href="index.php"><input type="button" value="Voltar" ></a></td>
</tr>

</table>	  
	  
		
	<?php
	$busca = "";
		$mysqli = new mysqli("localhost", "root", "", "test");
//a variável result recebe o select do banco de dados
		if ($result = $mysqli->query("SELECT id_usuario, nome, email, created FROM adim where nome like '".$busca."%'")) {
			echo '<table border="5">';
			echo '<tr>';
			echo '<td>Nome</td>';
			echo '<td>Email</td>';
			echo '<td>Data e hora do cadastro</td>';
			echo '</tr>';

	//temos um array, logo, precisamos criar um while. Pq? Temos diversas linhas no nosso banco, então precisamos percorrer o array
	//O que é $row? variável para percorrer o vetor. com o mysqli_fetch_assoc($result)), estou lendo o resultado
	while($row = mysqli_fetch_assoc($result)){
		
		echo '<tr>';
 //informo qual coluna quero imprimir
			echo '<td>'. $row['nome'] .'</td>';
			echo '<td>'. $row['email'] .'</td>';
			echo '<td>'. $row['created'] .'</td>';
			if (!empty($_SESSION['login'])){ 
			echo "<td><a href='excluir.php?tipo=2&id_usuario=" . $row['id_usuario'] . "'><img src='imagens/del.png' width='20' height='20' title='Excluir' /></td>";
			echo "<td><a href='editar.php?tipo=2&id_usuario=". $row['id_usuario'] ."'/><img src='imagens/edit.jpg' width='20' height='20' title='Alterar' /></td>";
			}
		echo '</tr>';
	}
	echo '</table>';
    $result->close();
}

	?>

</body>


</html>