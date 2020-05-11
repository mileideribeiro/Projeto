<?php
session_start();
include_once("conexao.php");


$nome =filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING );
$sexo = filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

$result_cadastro = "INSERT INTO cadastro(nome,telefone,sexo,endereco,email,created) VALUES ('$nome','$telefone','$sexo','$endereco','$email', NOW())"; 
$resultado_cadastro= mysqli_query($conn, $result_cadastro);


if(mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>Cliente cadastrado com sucesso</p>";
	header("Location: cliente_.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Erro em cadastro cliente</p>";
	header("Location:cliente_.php");
}

