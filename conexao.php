<?php 
$servidor="localhost";
$usuario="root";
$senha="";
$bdnome="test";

//criar a conexão. Com a variavel $conn recebe a conexão
$conn = mysqli_connect($servidor,$usuario,$senha,$bdnome) or die ("Não foi possivel conectar");
?>


