<?php
session_start();
include_once("conexao.php");
include('menu.php');
?>

<html>
	<head>


		<title>Silvana Variedades</title>
		<!--<link rel="stylesheet" href="css/estilo.css"  type="text/css"/>-->
	</head>

	<body>
	
	 
		<h2> Listar Vendas</h2>
		<table border="0">
		<tr>
<td><a href="valida.php"><input type="button" value="Cadastrar" ></a></td>
<td><a href="gerarpdf1.php"><input type="button" value="Gerar PDF" ></a></td>
<td><a href="valida.php"><input type="button" value="Voltar" ></a></td>
</tr>

</table>
<?php
	  $busca = "";
	 	$mysqli = new mysqli("localhost", "root", "", "test");
	  //a variável result recebe o select do banco de dados
	 if ($result = $mysqli->query("SELECT id_vendas, nome_cliente, descricao, valor, created FROM vendas where nome like '".$busca."%'")){
			echo '<table border="5">';
			echo '<tr>';
			echo '<td> NOME</td>';
			echo '<td> DESCRIÇÃO </td>';
			echo '<td> VALOR </td>';
			echo '<td> DATA E HORA DO CADASTRO </td>';
			echo '</tr>';
		
		
		while($row_vendas = mysqli_fetch_assoc($result)){
			echo '<tr>';
			echo '<td>'.  $row_vendas['nome_cliente']. '</td>';
			echo '<td>'.  $row_vendas['descricao'].'<td>';
			echo '<td>' . $row_vendas['valor'] .'</td>';
			echo '<td>'.  $row_vendas['created'] . '</td>';
		if (!empty($_SESSION['login'])){ 
		  echo "<td><a href='excluir.php?tipo=2&id_vendas=" . $row_vendas['id_vendas'] . "'><img src='imagens/del.png' width='20' height='20' title='Excluir' /></td>";
		  echo "<td><a href='editar.php?tipo=2&id_vendas=". $row_vendas['id_vendas'] ."'/><img src='imagens/edit.jpg' width='20' height='20' title='Alterar' /></td>";
		  }
		  echo '</tr>';
		} 
  echo '</table>';
  $result->close();
	}

?>
		
</body>
</html>