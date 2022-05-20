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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once 'nav.php';
    ?>

    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="inserir_imoveis.php" method="POST">
                
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input id="descricao" class="form-control" name="descricao" type="text"></input>
                </div> 

                <div class="form-group">
                    <label for="tamanho">Tamanho</label>
                    <input id="tamanho" class="form-control" name="tamanho" type="double"></input>
                </div>

                <div class="form-group">
                    <label for="qtd_quartos">Quantidade de Quartos</label>
                    <input id="qtd_quartos" class="form-control" name="qtd_quartos" type="double"></input>
                </div>

                <div class="form-group">
                    <label for="qtd_banheiros">Quantidade de Banheiros</label>
                    <input id="qtd_banheiros" class="form-control" name="qtd_banheiros" type="text"></input>
                </div>

                <div class="form-group">
                    <label for="mobilhado">Mobilhado</label>
                    <select id="mobilhado" class="form-control" name="mobilhado">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="valor_aluguel">Valor do Aluguel</label>
                    <input id="valor_aluguel" class="form-control" name="valor_aluguel" type="double"></input>
                </div>

                <div class="form-group">
                    <label for="usuario_id"></label>
                    <input id="usuario_id" class="form-control" name="usuario_id" type="double"></input>
                </div>

                <div class="form-group">
                    <input id="btnCadastrar" class="btn btn-success" name="btnCadastrar" type="submit" value="Cadastrar"></input>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

