<?php

require_once 'config/conexao.php';

if (!empty($_POST['descricao'])) {
    $descricao = $_POST['descricao'];
}

if (!empty($_POST['tamanho'])) {
    $tamanho = $_POST['tamanho'];
}

if (!empty($_POST['qtd_quartos'])) {
    $qtd_quartos = $_POST['qtd_quartos']; 
}

if (!empty($_POST['qtd_banheiros'])) {
    $qtd_banheiros = $_POST['qtd_banheiros']; 
}

if (isset($_POST['mobilhado'])) {
    $mobilhado = $_POST['mobilhado']; 
}

if (!empty($_POST['valor_aluguel'])) {
    $valor_aluguel = $_POST['valor_aluguel']; 
}

if (!empty($_POST['usuario_id'])) {
    $usuario_id = $_POST['usuario_id']; 
}

if (isset($descricao) && isset($tamanho) && isset($qtd_quartos) && isset($qtd_banheiros) && isset($mobilhado) && isset($valor_aluguel) && isset($usuario_id)) {
    $sql = "INSERT INTO imovel(descricao, tamanho, qtd_quartos, qtd_banheiros, mobilhado, valor_aluguel, usuario_id) VALUES('{$descricao}', '{$tamanho}', {$qtd_quartos}, '{$qtd_banheiros}', '{$mobilhado}', '{$valor_aluguel}', '{$usuario_id}')";



    mysqli_query($connection, $sql);
}


header("Location: listagem_imoveis.php");

?>