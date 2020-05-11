<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM adim WHERE id_usuario='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	header("Location: index.php");
}
?>
