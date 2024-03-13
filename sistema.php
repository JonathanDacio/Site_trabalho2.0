<?php
session_start();


if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}else{

    $logado= $_SESSION['email'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #000000;
        }
        .content{
            color: #fff;
        }
    </style>
</head>
    <div class="navbar">
       <a class="active" href="home">Página Incial</a>
       <a href="#news">Minha Conta</a>
       <a href="contact">Atendimento</a>
       <a style="float:right" href="sair.php">Sair</a>
    </div>

    <div style="padding: 20px;">
    <div class="content">
    <?php
       echo "<h2>Seja bem vindo ao Sistema <br> $logado</h2>";
    ?>

       </div>

       </div>

<body
>
    
</body>
</html>
