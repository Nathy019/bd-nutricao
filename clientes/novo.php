<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<form class="container" action="inserir.php" method="post">
    <h1>Novo Contato</h1>
    <p>Vamos cadastrar um contato novo no sistema.</p>

    <div class="row g-3">
        <div class="col-6">
            Nome: <input class="form-control" name="nome" placeholder="NOME" required maxlength="150">
        </div>
        <div class="row">
            <div class="col-6">
                Cidade: <input class="form-control" name="cidade" placeholder="CIDADE" required maxlength="150">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Estado: <input class="form-control" name="estado" placeholder="ESTADO" required maxlength="150">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Peso: <input class="form-control" name="peso" placeholder="PESO" required maxlength="150">
            </div>

        </div>
        <div class="row">
            <div class="col-6">
                altura: <input class="form-control" name="altura" placeholder="ALTURA" required maxlength="150">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Data de nascimento: <input class="form-control" name="data_nascimento" placeholder="aaaa/mm/dd" required maxlength="150">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Data da ultima consulta: <input class="form-control" name="data_ultima_consulta" placeholder="aaaa/mm/dd" required maxlength="150">
            </div>
        </div>
    </div>
        <button type="submit">enviar</button>
</form>
<!-- <form action="inserir.php" method="post">
    E-mail: <input name="email" required maxlength="150">
    Nome: <input name="nome" require maxlength="150">
    contato: <input name="contato" require maxlength="150">
    Mensagem : <input name="mensagem" require maxlength="150">
    <br>
    <button type="submit">Salvar</button>
</form> -->
<?Php
include "../includes/rodape.php"
?>