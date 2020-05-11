<?php
session_start();
include_once("conexao.php");


$material =filter_input(INPUT_POST,'material', FILTER_SANITIZE_STRING);
$valor1 = filter_input(INPUT_POST,'valor1',FILTER_SANITIZE_STRING );

$result_variaveis = "INSERT INTO variaveis(material,valor1,created) VALUES ('$material','$valor1', NOW())"; 
$resultado_variaveis= mysqli_query($conn, $result_variaveis);




if(mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>Gastos cadastrados com sucesso</p>";
	header("Location: gastosvariaveis.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Erro em cadastar gastos</p>";
	header("Location:gastosvariaveis.php");
}
