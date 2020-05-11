<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Silvana Variedades</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.pt-BR.min.js"></script>

 <!--Estilo-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<style>
	*{
		color:white;
	}
</style>
<body>

 <div class="compras">
	<h1> Viagens</h1>
	<?php
	 if (isset($_SESSION['msg'])){
		 echo $_SESSION['msg'];
		 unset($_SESSION['msg']);
		}
	?>
	<form method="POST"  action="viagens.php" >

	<label> Nome do Lugar: </label>
    <input type="text" name="nome" size="30" > 
	<br><br>
	
    <label>Valor: </label><br>
    <input type="text" name="valor" size="30" > 
	<br><br>
	 
	
		<div class="form-group">
			<label  class="col-sm-2 control-label">Data:</label>
			<div class="col-sm-10"> 
				<div class="input-group date" >
					<input type="text" class="form-control" id="exemplo">
					<div class="input-group-addon">	
						<span class="glyphicon glyphicon-th"></span>
					</div>
				</div>
			</div>
		</div>
		<br><br>
			<div class="wrapper">
				<div class="btn">
					<a href=""><input type="submit" value="Cadastrar"></a>
					<a href="administrativo.php"><input type="button" value="Home"></a>
					<a href="listar6.php"><input type="button" value="Listar"></a>
				</div>
			</div>
	</form>
	</div>
	<script type="text/javascript">
	$('#exemplo').datepicker({
		format: 'dd/mm/yyyy',
		language: "pt-BR",
	});
	</script> 
</div>

</body>
</html>