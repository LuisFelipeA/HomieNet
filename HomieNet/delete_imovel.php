<?php

require_once 'config/conexao.php';


if (!empty($_GET['imovel'])) {

    $id = $_GET['imovel'];
    
    $sql = "DELETE FROM imovel WHERE id = {$id}";
    mysqli_query($connection, $sql);

}

    header("Location: listagem_imoveis.php");

?>