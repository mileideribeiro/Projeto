<?php
session_start();
include_once("conexao.php");


$aluguel =filter_input(INPUT_POST,'aluguel', FILTER_SANITIZE_STRING);
$luz = filter_input(INPUT_POST,'luz', FILTER_SANITIZE_STRING);
$agua = filter_input(INPUT_POST,'agua',FILTER_SANITIZE_STRING );
$net = filter_input(INPUT_POST,'net', FILTER_SANITIZE_STRING);
$salario = filter_input(INPUT_POST,'salario_funcionario', FILTER_SANITIZE_STRING);

$result_cadastro = "INSERT INTO fixo(aluguel,luz,agua,net,salario_funcionario,created) VALUES ('$aluguel','$luz','$agua','$net','$salario_funcionario', NOW())"; 
$resultado_cadastro= mysqli_query($conn, $result_cadastro);

if (mysqli_insert_id($conn)){
	$_SESSION ['msg']="<p style='color:green;'>Gastos cadastrado com sucesso</p>";
	header("Location: gastosfixo.php");
}else{
	$_SESSION ['msg']="<p style='color:red;'>Erro em cadastro gastos fixo</p>";
	header("Location:gastosfixo.php");
}
?>