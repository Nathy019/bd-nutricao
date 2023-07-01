<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<form class="container " action="inserir.php" method="post">
    <h1>Novo Contato</h1>
    <p>Vamos cadastrar um contato novo no sistema.</p>

    <div class="row g-3 ">
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
                Estado: <select class=" col-6 form-select" aria-label="Default select example">
                    <option selected>Selecione seu estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
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