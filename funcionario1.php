<?php
session_start();
include_once("conexao.php");


$nome =filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING );
$endereco = filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$salario = filter_input(INPUT_POST,'salario', FILTER_SANITIZE_STRING);

$result_cadastro = "INSERT INTO funcionario(nome,idade,telefone,endereco,email,salario,created) VALUES ('$nome',$idade,'$telefone','$endereco','$email','$salario', NOW())"; 
$resultado_cadastro= mysqli_query($conn, $result_cadastro);

if (mysqli_insert_id($conn)){
	$_SESSION ['msg']="<p style='color:green;'>Funcionario cadastrado com sucesso</p>";
	header("Location: f.funcionario.php");
}else{
	$_SESSION ['msg']="<p style='color:red;'>Erro em cadastro funcionario</p>";
	header("Location:f.funcionario.php");
}
?> 


