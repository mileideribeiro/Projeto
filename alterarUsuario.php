<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//aqui tenho a minha query. Minha variável recebe a query de alterar
$result_usuario = "UPDATE adim SET nome='$nome', email='$email', modified=NOW() WHERE id_usuario='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//altero através do id, que é único
header("Location: editar.php?id=$id");
?>