<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Editar usuário</title>
<link rel="stylesheet" href="css/estilo.css"  type="text/css"/>
</head>
<body>
<?php

 include('menu.php');
?>
<?php

echo "Usuario: ". $_SESSION['login']."     ";    
?>

<a href="sair.php">Sair</a> <br>

<h1>Editar Usuário</h1>
<!-- estou enviando as informações para a página para alterar usuários -->
<form method="POST" action="alteraUsuarios.php">
<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

<label>Nome: </label>
<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>

<label>E-mail: </label>
<input type="email" name="email" placeholder="Digite o e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

<input type="submit" value="Alterar">
</form>
<?php

include('listar.php');

?>
</body>
</html>
