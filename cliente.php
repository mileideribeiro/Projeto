<?php
	session_start();
	echo "Cliente: ". $_SESSION['usuarioNome'];	
?>
<br> 
<a href="sair.php">Sair</a>