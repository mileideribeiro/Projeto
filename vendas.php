<?php
session_start();
include_once("conexao.php");


$nome_cliente =filter_input(INPUT_POST,'nome_cliente', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_STRING );
$valor= filter_input(INPUT_POST,'valor', FILTER_SANITIZE_STRING);


$result_vendas = "INSERT INTO vendas(nome_cliente,descricao,valor,created) VALUES ('$nome_cliente','$descricao','$valor', NOW())"; 
$resultado_vendas= mysqli_query($conn, $result_vendas);


if (mysqli_insert_id($conn)){
	$_SESSION ['msg']="<p style= 'color:green;'>Usuário cadastro com sucesso</p>";
	header("Location: ven.dia.php");
}else{
	$_SESSION ['msg']="<p style= 'color:red;'>Usuário não foi cadastro</p>";
	header("Location: ven.dia.php");
}
?>