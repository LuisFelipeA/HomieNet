<?php

require_once 'config/conexao.php';

$sql = 'SELECT * FROM imovel';

$result = mysqli_query($connection, $sql);

$consulta = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imóveis</title>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body style="background-color: #6A7079">

    <?php
        require_once "navBar.php";
    ?>
        <div class="container">
            <div class="row justify-content-md-start">
                <?php foreach($consulta as $imovel): ?>
                    
                    <div class="col-md-3">
                        <div class="card" style="width: 100%; margin-top: 5%">
                            <img class="card-img-top" src="imageSources/casa.png" alt="Card image cap" style="width: 100% " >
                            <div class="card-body">
                                <h5 class="card-title">R$<?php echo $imovel["valor_aluguel"];?></h5>
                                <p class="card-text"><?php echo $imovel["descricao"];?></p>
                                <p class="card-text"><?php echo $imovel["tamanho"];?>m²</p>
                                <a href="imovel_detalhe.php?imovel=<?=$imovel['id'];?>" class="btn btn-primary">Mais Detalhes</a>
                            </div>
                        </div>   
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    
</body>
</html>

