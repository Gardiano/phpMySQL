<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> LOGIN </title>    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css"> -->
</head>

<body>
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Sistema de Login</h3>
                <h3 class="title has-text-grey"><a href="index.php">Login</a></h3>
   
        <?php if(isset($_SESSION['nao_autenticado'])): ?>
            <div> <p>ERRO: Usuário ou senha inválidos.</p> </div>
        <?php endif; unset($_SESSION['nao_autenticado']); ?>

<div class="box">
            <form action="login.php" method="POST">
                
                    <?php if(isset($_SESSION['erroVazio'])): ?>
                        <div> <p style="color:red;">ERRO: Usuário ou senha vazios.</p> </div>
                    <?php endif; unset($_SESSION['erroVazio']); ?>                      
                        <input name="usuario" name="text" placeholder="Seu usuário" autofocus="">                    
                              
                    <div>
                        <input name="senha" type="password" placeholder="Sua senha">
                    </div>
                
                <button type="submit" class="button">Entrar</button>
            </form>
        </div>
    </div>
  </div>
</div>       
</section>
</body>

</html>