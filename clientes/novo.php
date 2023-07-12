<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<form class="container " action="inserir.php" method="post">
    <div class="container m-5">
        <h1 class="text-center">Novo Contato</h1>
        <p class="text-center">Vamos cadastrar um contato novo no sistema.</p>

        <div class="row g-3 ">
            <div class="col-6">
                Nome: <input class="form-control" name="nome" placeholder="NOME" required maxlength="150">
            </div>
            <div class="row">
                <div class="col-6">
                    Cidade: <input class="form-control" name="cidade" placeholder="CIDADE" required maxlength="150">
                </div>
            </div>
            <div class="col-6 mb-2">
                <select class="form-select" id="floatingSelect" name="estado">
                    <option selected>Estado</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
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
                    Data de nascimento: <input class="form-control" name="data_nascimento" type="date" required maxlength="150">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Data da ultima consulta: <input class="form-control" name="data_ultima_consulta" type="date" required maxlength="150">
                </div>
            </div>
        </div>
        <div class="p-5 d-grid gap-2 col-6 mx-auto">
            <button class=" btn btn-outline-dark" type="submit">Atualizar</button>
        </div>
    </div>
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