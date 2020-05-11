<?php
session_start();
include_once("conexao.php");
include('menu.php');	

?>
<html>
	<head>
		<title>Cadastro de usuários</title>		
		<link rel="stylesheet" href="css/estilo.css"  type="text/css"/>
		<style>

#popup{
				position: fixed;
				top: 0; bottom: 0; 
				left: 850; right:0;
				margin: auto;
				width: 300px;
				height: 300px;
				padding: 15px;
				border: solid 1px #4c4d4f;
				background:url(imagens/cadastro.png);
				
				display: none;
			}
</style>

	</head>
	<body>

	
	<div id="popup">
<a href="#" onClick="document.getElementById('popup').style.display='none';">[Fechar]</a>
<br />
	Eu sou um popup chato e estou aqui para fazer com que compre minhas coisas e te irritar. Bjs ;*

</div>
<h2> Estou testando isso aqui. </h2>

<a href="#" onmouseover="document.getElementById('popup').style.display='block';">Ei, clique em mim aqui, por favor.</a> <br /><br />
<a href="#" onmouseover="document.getElementById('popup').style.display='block';"><img src='imagens/cadastro.png' width='100' height='100'  /></a>

<div id="popup2">
<a href="#" onClick="document.getElementById('popup2').style.display='none';">[Fechar]</a>
<br />
	Mas eu também posso ser legaal, tá?

</div>
<h2> Estou testando isso aqui. </h2>

<a href="#" onmouseover="document.getElementById('popup2').style.display='block';">Ei, clique em mim aqui, por favor.</a> <br /><br />
<a href="#" onmouseover="document.getElementById('popup2').style.display='block';"><img src='imagens/cadastro.png' width='100' height='100'  /></a>		
	</body>
	
	
	</html>