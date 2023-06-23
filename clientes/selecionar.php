<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

?>

<h1>Módolo de contatos</h1>
<p>
    <a href="novo.php"> Adicionar um novo contato</a>
</p>
<h2>Listagem contato</h2>
<table border="1">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Peso</td>
        <td>Altura</td>
        <td>Data de Nascimeto</td>
        <td>Data da ultima conlsulta</td>
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
            <td><?php echo $um_cliente['data_nascimento']; ?></td>
            <td><?php echo $um_cliente['data_ultima_consulta']; ?></td>
            <!-- add foto img src="php echo +variavel [nome do campo]"
        img src="php $um_portifolio[foto1];php "whidth = "100" "
        -->
            <td>
                <a href="visualizar.php?codigo=<?php echo $um_cliente['codigo'] ?>">Visualizar</a>
                <a href="editar.php?codigo=<?php echo $um_cliente['codigo']?>">editar</a>
                <a href="deletar.php?codigo=<?php echo $um_cliente['codigo']?>">excluir</a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>


<?php

mysqli_close($conexao);
include "../includes/rodape.php";
?>