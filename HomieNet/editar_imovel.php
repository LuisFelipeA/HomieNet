<?php

require_once 'config/conexao.php';

if (!empty($_POST['id'])) {
    $id = addslashes($_POST['id']);
}

if (!empty($_POST['descricao'])) {
    $descricao = addslashes($_POST['descricao']);
}

if (!empty($_POST['tamanho'])) {
    $tamanho = addslashes($_POST['tamanho']);
}

if (isset($_POST['qtd_quartos'])) {
    $qtd_quartos = addslashes($_POST['qtd_quartos']);
}

if (isset($_POST['qtd_banheiros'])) {
    $qtd_banheiros = addslashes($_POST['qtd_banheiros']);
}

if (isset($_POST['mobilhado'])) {
    $mobilhado = addslashes($_POST['mobilhado']);
}

if (isset($_POST['valor_aluguel'])) {
    $valor_aluguel = addslashes($_POST['valor_aluguel']);
}

if (isset($descricao) && isset($tamanho) && isset($qtd_quartos) && isset($id)) {
    $sql = "UPDATE tarefas SET descricao = '{$descricao}', tamanho = '{$tamanho}', qtd_quartos = {$qtd_quartos}, qtd_banheiros = {$qtd_banheiros}, mobilhado = {$mobilhado}, valor_aluguel = {$valor_aluguel}   WHERE id =  {$id}";

    mysqli_query($connection, $sql);
}

header("Location: imovel_detalhe.php");

?>