<?php

require_once 'config/conexao.php';

if (!empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
}

if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
}

if (!empty($_POST['senha'])) {
    $senha = addslashes($_POST['senha']);
}

if (!empty($_POST['data_nasc'])) {
    $data_nasc = addslashes($_POST['data_nasc']);
}



if (isset($nome) && isset($email) && isset($senha) && isset($data_nasc)) {
    $sql = "INSERT INTO usuario(nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

    mysqli_query($connection, $sql);
}

$userID = mysqli_insert_id($connection);

$interesses = [];
if (!empty($_POST['interesse'])) {
   foreach ($_POST['interesse'] as $i) {
    $interesses[] = "({$userID}, {$i})";
   }
}
$interesses = implode(',', $interesses);

$sql = "INSERT INTO interesses_has_usuario (usuario_id, interesses_id) VALUES {$interesses}";

mysqli_query($connection, $sql);

header("Location: usersList.php");

?>