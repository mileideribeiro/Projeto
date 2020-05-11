<?php

include_once("conexao.php");
$html = '<table border=2 font color="red">';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>ID</th>';
$html .= '<th>Nome</th>';
$html .= '<th>E-mail</th>';
$html .= '<th>Data e hora de cadastro</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';

$result_usuarios = "SELECT * FROM adim";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
$html .= '<tr><td>'.$row_usuarios['id_usuario'] . "</td>";
$html .= '<td>'.$row_usuarios['nome'] . "</td>";
$html .= '<td>'.$row_usuarios['email'] . "</td>";
$html .= '<td>'.$row_usuarios['created'] . "</td>";

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
<h2 style="text-align: center;">Relatório de usuários cadastrados no sistema.</h2>
'. $html .'
');

//O render(); torna uma classe responsável por add informações a ela de forma dinâmica. Posso gravar de maneira automatica.
$dompdf->render();

//Exibibindo a página em pdf
$dompdf->stream(
"relatorio_usuarios", //nome do download a ser realizado
array(
"Attachment" => false //Para realizar o download de maneira automática, alteramos o false para true
)
);
?>