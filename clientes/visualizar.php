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
<table class="table">
    <thead>
        <th class="bg-secondary-subtle">Nome:</th>
        <th class="bg-secondary-subtle">Cidade:</th>
        <th class="bg-secondary-subtle">Estado:</th>
        <th class="bg-secondary-subtle">Peso:</th>
        <th class="bg-secondary-subtle">Altura:</th>
        <th class="bg-secondary-subtle">Data de nascimento:</th>
        <th class="bg-secondary-subtle">Data da ultima consulta:</th>
    </thead>

    <tbody class="border-dark">
    <td><?php echo $nome ?></td>
    <td><?php echo $cidade ?> <br></td>
    <td><?php echo $estado ?><br></td>
    <td><?php echo $peso ?> <br></td>
    <td><?php echo $altura ?> <br></td>
    <td><?php echo date('d/m/Y',strtotime ('data_nacimento')); ?> <br></td>
    <td><?php echo date('d/m/Y',strtotime ('data_ultima_consulta')); ?></td>

    </tbody>
    
</table>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>