<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET['codigo'];
$email = "";
$sql = "select * from t_cliente where codigo = $codigo";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    $nome = $um_cliente["nome"];
    $cidade =  $um_cliente["cidade"];
    $estado =  $um_cliente["estado"];
    $peso = $um_cliente["peso"];
    $altura = $um_cliente["altura"];
    $data_nascimento = $um_cliente["data_nascimento"];
    $data_ultima_consulta = $um_cliente["data_ultima_consulta"];
endwhile;
?>
<h1 class="text-center">Editar cliente <?php echo $codigo; ?></h1>
<form method="post" action="atualizar.php?codigo=<?php echo $codigo; ?>">
    <div class="container">
        <div class="row g-3 ">
            <div class="shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                Nome: <input class="form-control" name="nome" value="<?php echo $nome; ?>" placeholder="NOME" required maxlength="150"><br>
            </div>
        </div>
        <div class="row">
            <div class="shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                Cidade: <input class="form-control" name="cidade" value="<?php echo $cidade; ?>" placeholder="CIDADE" required maxlength="150"><br>
            </div>
        </div>
        <div class="row">
            <div class="shadow-none p-3 mb-2 bg-body-tertiary rounded">
                Estado: <input class="form-control" name="estado" value="<?php echo $estado; ?>" placeholder="ESTADO" required maxlength="150"><br>
            </div>
        </div>
        <div class="row">
            <div class="shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                Peso: <input class="form-control" name="peso" value="<?php echo $peso; ?>" placeholder="PESO" required maxlength="150"><br>
            </div>
        </div>
        <div class="row">
            <div class="shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                altura: <input class="form-control" name="altura" value="<?php echo $altura; ?>" placeholder="ALTURA" required maxlength="150"><br>
            </div>
        </div>
        <div class="row">
            <div class="shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                Data de nascimento: <input class="form-control" name="data_nascimento" value="<?php echo $data_nascimento; ?>" type="date" required maxlength="150"><br>
            </div>
        </div>
        <div class="row">
            <div class="shadow-lg p-3 mb-2 bg-body-tertiary rounded">
                Data da ultima consulta: <input class="form-control" name="data_ultima_consulta" value="<?php echo $data_ultima_consulta; ?>" type="date" required maxlength="150"><br>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class=" btn btn-outline-dark" type="submit">Atualizar</button>
        </div>
    </div>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>