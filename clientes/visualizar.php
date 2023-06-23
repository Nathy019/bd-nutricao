<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET["codigo"];

$nome = "";
$cidade = "";
$estado = "";
$peso = "";
$altura = "";
$data_nascimento ="";
$data_ultima_consulta = "";

$sql = "select * from t_cliente where codigo= $codigo";
$todos_os_clientes = mysqli_query($conexao, $sql);

while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
$nome = $um_cliente["nome"];
$cidade =  $um_cliente["cidade"];
$estado =  $um_cliente["estado"];
$peso = $um_cliente["peso"];
$altura = $um_cliente["altura"];
$data_nascimento= $um_cliente["data_nascimento"];
$data_ultima_consulta = $um_cliente["data_ultima_consulta"];
endwhile
?>

<h2>Ficha cliente</h2>

Nome: <?php echo $nome ?><br>
Cidade:<?php echo $cidade ?> <br>
Estado: <?php echo $estado ?><br>
Peso:<?php echo $peso ?> <br>
Altura:<?php echo $altura ?> <br>
Data de nascimento:<?php echo $data_nascimento ?> <br>
Data da ultima conlsulta:<?php echo $data_ultima_consulta ?> <br>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";

?>