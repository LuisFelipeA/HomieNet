<?php

require_once 'config/conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imoveis</title>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body style="background-color: #6A7079">
    <?php
        require_once 'navBar.php';
    ?>
    
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6 position-absolute top-50 start-50 translate-middle"> -->
            <div class="card" style="width: 100%;" >
                <div class="card-body" style="padding: 10px;">
                <h5 class="card-title h3" style="padding: 10px; font-size:">Informações do Imóvel</h5>
                    <form action="inserir_imoveis.php" method="POST">
                        
                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="descricao">Descrição</label>
                            <input id="descricao" class="form-control" name="descricao" type="text"></input>
                        </div> 

                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="tamanho">Tamanho</label>
                            <input id="tamanho" class="form-control" name="tamanho" type="double"></input>
                        </div>

                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="qtd_quartos">Quantidade de Quartos</label>
                            <input id="qtd_quartos" class="form-control" name="qtd_quartos" type="double"></input>
                        </div>

                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="qtd_banheiros">Quantidade de Banheiros</label>
                            <input id="qtd_banheiros" class="form-control" name="qtd_banheiros" type="text"></input>
                        </div>

                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="mobilhado">Mobilhado</label>
                            <select id="mobilhado" class="form-control" name="mobilhado">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>

                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="valor_aluguel">Valor do Aluguel</label>
                            <input id="valor_aluguel" class="form-control" name="valor_aluguel" type="double"></input>
                        </div>

                        <div class="form-group" style="padding: 10px; width: 100%">
                            <label for="usuario_id"></label>
                            <input id="usuario_id" class="form-control" name="usuario_id" type="double"></input>
                        </div>

                        <div class="form-group">
                            <input id="btnCadastrarImovel" name="btnCadastrarImovel" type="submit" class="btn btn-primary" value="Cadastrar Imóvel" style="padding: 10px; width: 100%"></input>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
        </div>
    </div>

</body>
</html>






<!-- sala da juliana
pollyanna dantas
phyetro
luiz miguel prado demaraujo
gustavo cassineli fischer -->