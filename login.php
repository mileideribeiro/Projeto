<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<title> Cadastro de usuários</title>
<!--Estilo-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<?php
//incluindo a conexao com o banco de dados
 include_once('conexao.php');
?>
    
<?php
$mensg1="";
$login="";
$senha="";

if((isset($_POST['login'])) && (isset($_POST['senha']))){
	session_start(); 
	$conn=mysqli_connect("localhost","root","","test");

	/* check connection */
	if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  

	$result_usuario =  "SELECT login,senha FROM usuarios WHERE login ='".$_POST['login']."' and senha = '".$_POST['senha']."'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
		
	if(isset($resultado)){
        $_SESSION['login'] = $resultado['login'];    
	header("Location: index.php");
	}else{
	$mensg1 = "Usuário ou senha inválidos";
	}
	
}
?>
<body>


<!-- DADOS DE LOGIN -->
<div class="loginbox">
        <h1> Login </h1> 
        <form action="valida.php" method="post" id="myForm" >
            <label for="login">Login: </label> <br>
            <input type="login" name="login" id="login"> <br>
        
            <label for="senha">Senha: </label> <br>
            <input type="password" name="senha" id="senha">
        
            <?php echo $mensg1; ?> 
        
            <br />
            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">
            <a href="index.php"><input type="button" value="Voltar" ></a>
        </form>
</div>
</body>

</html>