<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

?>

<h1>Módolo de contatos</h1>
<p>
    <a href="novo.php"> <img src="../imagem/icon_add.png" width="50px "></a>
</p>
<h2>Listagem contato</h2>
<table class="table table-bordered border-dark">
    <tr class="table-dark">
        <td>Código</td>
        <td>Nome</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Peso</td>
        <td>Altura</td>
        <td>Data de Nascimeto</td>
        <td>Data da ultima consulta</td>
    </tr>
    <?php
    $sql = "select * from t_cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    ?>
        <tr>
            <td><?php echo $um_cliente['codigo']; ?></td>
            <td><?php echo $um_cliente['nome']; ?></td>
            <td><?php echo $um_cliente['cidade']; ?></td>
            <td><?php echo $um_cliente['estado']; ?></td>
            <td><?php echo $um_cliente['peso']; ?></td>
            <td><?php echo $um_cliente['altura']; ?></td>
            <td><?php echo date('d/m/Y',strtotime ($um_cliente['data_nascimento'])); ?></td>
            <td><?php echo date('d/m/Y',strtotime ($um_cliente['data_ultima_consulta'])); ?></td>
            <!-- add foto img src="php echo +variavel [nome do campo]"
        img src="php $um_portifolio[foto1];php "whidth = "100" "
        -->
            <td>
                <a class="me-2" href="visualizar.php?codigo=<?php echo $um_cliente['codigo'] ?>"><img src="../imagem/icon_visualizar.png" width="25px"></a>
                <a class="me-2" href="editar.php?codigo=<?php echo $um_cliente['codigo'] ?>"><img src="../imagem/icon_edit.png" width="25px"></a>
                <a class="me-2" href="deletar.php?codigo=<?php echo $um_cliente['codigo'] ?>"><img src="../imagem/icon_delet.png" width="25px"></a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>

<?php
include "../includes/rodape.php";
?>