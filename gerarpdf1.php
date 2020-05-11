<?php
include_once("conexao.php");
$html = '<table border=2 font color="red">';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>ID</th>';
$html .= '<th>Nome</th>';
$html .= '<th>Telefone</th>';
$html .= '<th>Endereço</th>';
$html .= '<th>E-mail</th>';
$html .= '<th>Data e hora de cadastro</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';


$result_cliente = "SELECT id_cliente, nome, telefone,endereco ,email, created FROM cadastro";
$resultado_cliente= mysqli_query($conn, $result_cliente);
while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
$html .= '<tr><td>'.$row_cliente['id_cliente'] . "</td>";
$html .= '<td>'.$row_cliente['nome'] . "</td>";
$html .= '<td>'.$row_cliente['Telefone'] . "</td>";
$html .= '<td>'.$row_cliente['endereço'] . "</td>";
$html .= '<td>'.$row_cliente['email'] . "</td>";
$html .= '<td>'.$row_cliente['created'] . "</td>";

}


$html .= '</tbody>';
$html .= '</table>';


//referenciando o DomPDF
use Dompdf\Dompdf;

// includindo a pag de autoload
require_once("dompdf/autoload.inc.php");

$dompdf = new DOMPDF();

// Carregando o HTML com título
$dompdf->load_html('
<h2 style="text-align: center;">Relatório de Clientes Cadastrados no Sistema.</h2>
'. $html .'
');

//O render(); torna uma classe responsável por add informações a ela de forma dinâmica. Posso gravar de maneira automatica.
$dompdf->render();

//Exibibindo a página em pdf
$dompdf->stream(
"relatorio_cliente", //nome do download a ser realizado
array(
"Attachment" => false //Para realizar o download de maneira automática, alteramos o false para true
)
);
?>