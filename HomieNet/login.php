
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo!</title>
    <link rel='stylesheet' href='assets/css/bootstrap.css'>
</head>
<body style="background-color: #6A7079">

    <?php require_once "navBar.php"?>
       
    
    <div class="col-md-3 position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 100%;">
            <div class="card-body" style="padding: 10px;">
                <h5 class="card-title h3" style="padding: 10px; font-size:">Entrar</h5>
                <form action="doLogin.php" method="POST">
                    <div class="form-group" style="padding: 10px; width: 100%">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control" required></input>
                    </div>
                    <div class="form-group" style="padding: 10px; width: 100%">
                        <label for="senha">Senha</label>
                        <input id="senha" name="senha" type="password" class="form-control" required></input>
                    </div>
                    <input id="btnLogin" name="btnLogin" type="submit" class="btn btn-primary" value="Entrar" style="padding: 10px; width: 100%"></input>
                </form>
                <div style="margin: 10px; text-align: right">
                    <a href="newUser.php" class="card-link">Criar conta</a>
                </div>
            </div>
        </div> 
    </div>
   
        
   




</html>

