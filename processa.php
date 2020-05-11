<?php
session_start();

include_once("conexao.php");
//Com esta linha, estou recebendo os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);

//dados é a variável que percorre o array, logo, dados serão inseridos na minha variável indexar, linha a linha
//sempre que ele pssar pelo foreach, vai salvar no banco de dados
foreach($dados as $indexar){
	//com trim tiro os espaços do inicio e do final
	$indexar = trim($indexar);
	//separar cada posicao em uma posição, utilizando o expload, por vírgulaula
	//na linha que está na variável indexar
	$posicao = explode(',', $indexar);
	//em todas as interações que ele passar, adiciona uma linha
	var_dump($posicao);
	//posição das minhas variáveis no array
	$nome = $posicao[0];
	$email = $posicao[1];
	$senha = $posicao[2];
	
	$insercao_query = "INSERT INTO usuarios_b (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	
	$cadastros = mysqli_query($conn, $insercao_query);	
}
$_SESSION['msg'] = "<p style='color: red;'>Arquivo não inserido !</p>";
header("Location: formTexto.php");