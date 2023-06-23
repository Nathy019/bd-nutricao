<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$data_nascimento = $_POST["data_nascimento"];
$data_ultima_consulta = $_POST["data_ultima_consulta"];

$sql = "insert into t_cliente(nome,cidade,estado,peso,altura,data_nascimento,data_ultima_consulta) values('$nome', '$cidade','$estado','$peso', '$altura', '$data_nascimento','$data_ultima_consulta')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");

?>