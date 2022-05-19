<?php 

require_once "config/conexao.php";

$sql = 'SELECT * FROM usuario';

$result = mysqli_query($connection, $sql);


$usuario = $result->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
</head>
<body>

    <?php
        require_once "nav.php";
    ?>



<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">email</th>
                <th scope="col">descrição</th>
                <th scope="col">Data_nasc</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuario as $tarefa): ?>
            <tr>
                <th scope="row"><?php echo $tarefa["id"]; ?></th>
                <td><?php echo $tarefa["email"]; ?></td>
                <td><?php echo $tarefa["descricao"]; ?></td>
                <td><?php echo $tarefa["data_nasc"]; ?></td>
            </tr>
            <?php endforeach; ?>   

  
        </tbody>
    </table>


</html>

