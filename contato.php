<html>
<head>
<link type="text/css" rel="stylesheet" media="screen" href="css/estilo.css"/>
<title>Cadastro de Usúario</title>
<?php
include('menu.php');
?>
</head>
<?php
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 1)
        echo "<script> alert('Email enviado com sucesso!');</script>";
    }else
        echo "<script>alert('Erro ao enviar o email!');</script>";

$nome="";
$email="";
$assunto="";
$mensagem="";

?>
<body>
<div id="geral">
<br><br><br>
<?php
if(!empty($_SESSION['email'])){
    echo "Usuario: ".$_SESSION['email']."   ";
?>
<a href="sair.php">Sair</a>
<?php
}
?>
    <h1>Entre em contato conosco</h1>
<form method="POST" action="enviarEmail.php">
<label>Nome</label>
<input type="text" name="nome" placeholder="Nome completo"><br><br>

<label>Email</label>
<input type="email" name="email" placeholder="Seu melhor e-mail"><br><br>
<label>Assunto</label>
<input type="text" name="assunto" placeholder="Seu melhor e-mail"><br><br>
<label>Mensagem</label>
<textarea name="mensagem" rows="4" cols="50"></textarea><br><br>

<input type="submit" value="Enviar"><br><br>
</form>

</div>


</body>
</html>