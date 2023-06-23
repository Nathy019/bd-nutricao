<?php 
include "../includes/conexao.php";
$codigo =$_GET ["codigo"];

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$data_nascimento = $_POST["data_nascimento"];
$data_ultima_consulta = $_POST["data_ultima_consulta"];

$sql = "update t_cliente set nome = '$nome', cidade = '$cidade', estado = '$estado', peso = '$peso', altura = '$altura', data_nascimento = '$data_nascimento', data_ultima_consulta = '$data_ultima_consulta' where codigo = $codigo";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>