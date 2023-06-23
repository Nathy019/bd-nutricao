<?php 
include "../includes/conexao.php";
$codigo = $_GET["codigo"];
$sql = "delete from t_cliente where codigo = $codigo";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("location:selecionar.php");
?>