<?php
session_start();
include_once("conexao.php");


$nome =filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST,'valor',FILTER_SANITIZE_STRING );
$data = filter_input(INPUT_POST,'data', FILTER_SANITIZE_STRING);

$result_viagens = "INSERT INTO viagens(nome,valor,data) VALUES ('$nome','$valor','$data')"; 
$resultado_viagens= mysqli_query($conn, $result_viagens);


if(mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>A viagem cadastrados com sucesso</p>";
	header("Location: compras.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Erro em cadastar viagem</p>";
	header("Location:compras.php");
}
