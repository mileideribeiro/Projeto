<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Silvana Variedade</title>

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

<div class="vendas">

	<h1> Vendas </h1>
	<?php
	if (isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
	
	include_once("conexao.php");
	$result_vendas = "SELECT * FROM cadastro ORDER BY nome"; 
	$resultado_vendas= mysqli_query($conn, $result_vendas);
	?>
	<form method="POST"  action="vendas.php" >

		<label> Nome do Cliente: </label>
			<select name="nome_cliente">
		<?php
			foreach($resultado_vendas as $res) {
		?>
			<option value="<?php echo $res['id_cliente']; ?>"><?php echo $res['nome']; ?></option>
		<?php
		}
		?>
			</select>
		<br><br>
		
		<label>Produto: </label><br>
		<input type="text" name="descricao" size="20"> 
		<br><br>
		
		<label>Valor: </label><br>
		<input type="text" name="valor" size="20" > 
		<br><br>

			<div class="form-group">
				<label  class="col-sm-2 control-label">Data: </label><br>
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
						<input type='button' value='Voltar' onclick='history.go(-1)' />
						<a href="listar3.php"><input type="button" value="Listar"></a>
					</div>
				</div>

	</form>

	<script type="text/javascript">
	$('#exemplo').datepicker({
		format: 'dd/mm/yyyy',
		language: "pt-BR",
	});
	</script> 
</div>
</body>
</html>