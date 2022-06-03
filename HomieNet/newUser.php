<?php 

require_once "config/conexao.php";

$sql = 'SELECT * FROM interesses';

$result = mysqli_query($connection, $sql);


$interesses = $result->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo!</title>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body style="background-color: #6A7079">
    <header>
        <?php require_once "navBar.php"?>
    </header>   
   
    <div class=container>
        <div cass="row">
            <!-- <div class="col-md-4 position-absolute top-50 start-50 translate-middle"> -->
                <div class="card" style="width: 100%;" >
                    <div class="card-body" style="padding: 10px;">
                        <h5 class="card-title h3" style="padding: 10px; font-size:">Nos conte mais sobre você</h5>
                        <form action="createNewUser.php" method="POST">
                        
                            <div class="form-group" style="padding: 10px; width: 100%"> 
                                <label for="nome">Nome Completo</label>
                                <input id="nome" name="nome" type="text" class="form-control" required></input> 
                            </div>

                            <div class="form-group" style="padding: 10px; width: 100%">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control" required></input>
                            </div>

                            <div class="form-group" style="padding: 10px; width: 100%">
                                <label for="senha">Senha</label>
                                <input id="senha" name="senha" type="password" class="form-control" required></input>
                            </div>
                            <div class="form-group" style="padding: 10px; width: 100%">
                                <label for="data_nasc">Data de Nascimento</label>
                                <input id="data_nasc" name="data_nasc" type="date" class="form-control" required></input>
                            </div>

                            <div style="margin-bottom: 20px;">
                                <h5 style="padding: 10px; font-size:">Do que você gosta?</h5>
                                <?php foreach ($interesses as $interesse):?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="<?php echo $interesse["id"]?>" id="interesse" name="interesse[]">
                                            <label class="form-check-label" for="flexCheckDefault"><?php echo $interesse["nome"] ?></label>
                                    </div>
                                <?php endforeach ?>
                            </div>    
                            
                            <input id="btnCreateUser" name="btnCreateUser" type="submit" class="btn btn-primary" value="Criar Conta" style="padding: 10px; width: 100%">
                        </form>

                        

    
                    </div>
                </div> 
            <!-- </div> -->
        </div>
    </div>
        
   <footer>
  
   </footer>

                                </body>


</html>


