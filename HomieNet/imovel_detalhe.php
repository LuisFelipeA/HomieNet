<?php

require_once 'config/conexao.php';

if (isset($_GET['imovel'])) {
    $imovel = $_GET['imovel'];
}



$sql = "SELECT * FROM imovel WHERE id = {$imovel}";

$result = mysqli_query($connection, $sql);

$consulta = $result->fetch_all(MYSQLI_ASSOC);
if (empty($consulta)) {
    header("Location: listagem_imoveis.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do imovel</title>
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
                                <p class="card-text"><?php echo $imovel["qtd_quartos"];?> quartos</p>
                                <p class="card-text"><?php echo $imovel["qtd_banheiros"];?> banheiros</p>


                                <!-- <p class="card-text"><?php echo $imovel["mobilhado"]; ?></p> -->

                                <p class="card-text">
                                    <?php 
                                        if ($imovel["mobilhado"] == 1) {
                                            echo "Imobilhado";
                                        } else {
                                            echo "Não imobilhado";
                                        } 
                                    ?>
                                </p>


                            </div>
                        </div>   
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    
</body>
</html>

