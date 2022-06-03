<?php 

require_once "config/conexao.php";


$sql = "SELECT * FROM usuario";

$result = mysqli_query($connection, $sql);


$usuarios = $result->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body style="background-color: #6A7079">

    <?php require_once "navBar.php"?>
       
    <div class="container">
        <div class="row" style="padding: 15px">
            
            <?php foreach($usuarios as $usuario): ?>
                
                <div class="col col-md-3" style="padding-bottom: 15px">
                    <div class="card" style="width: 100%; height: 100%; padding:5px;">
                        <img src="./imageSources/noUserProfilePic.png" class="card-img-top rounded-circle z-depth-2" alt="..." style="width: auto; heigh: auto;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $usuario["nome"]; ?></h5>
                                <p class="card-text"><?php echo $usuario["descricao"]; ?></p>
                                <p class="card-text"><?php echo $usuario["data_nasc"]; ?></p>
                                <a href="#" class="btn btn-primary">Ver Perfil</a>
                            </div>
                    </div>
                </div>
        
            <?php endforeach; ?>   
            
        </div>
    </div>
  
   




</html>

