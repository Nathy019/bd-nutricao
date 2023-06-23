<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET["codigo"];
$email = "";
$sql = "select * from t_cliente where codigo = $codigo";
$todos_os_clientes = mysqli_query($conexao, $sql);
while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
$nome = $um_cliente["nome"];
$cidade =  $um_cliente["cidade"];
$estado =  $um_cliente["estado"];
$peso = $um_cliente["peso"];
$altura = $um_cliente["altura"];
$data_nascimento= $um_cliente["data_nascimento"];
$data_ultima_consulta = $um_cliente["data_ultima_consulta"];
endwhile;
?>
<h1>Editar cliente <?php echo $codigo; ?></h1>
<form method="post" action="atualizar.php?codigo=<?php echo $codigo; ?>">
    Nome: <input name="nome" value="<?php echo $nome;?>"><br>
    Cidade: <input name="cidade" value="<?php echo $cidade;?>"><br>
    estado: <input name="estado" value="<?php echo $estado;?>"><br>
    peso: <input name="peso" value="<?php echo $peso;?>"><br>
    Altura: <input name="altura" value="<?php echo $altura;?>"><br>
    Data de nascimento: <input name="data_nascimento" value="<?php echo $data_nascimento;?>"><br>
    Data ultima consulta: <input name="data_ultima_consulta" value="<?php echo $data_ultima_consulta;?>"><br>
    <button type="submit">Atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>