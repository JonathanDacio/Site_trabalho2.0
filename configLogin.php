<?php
session_start();
//print_r($_REQUEST); 
if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha'])){

  include_once('config.php');
  $email= $_POST['email'];
  $senha= $_POST['senha']; 
  /*print_r('Email: '. $email);
  print_r('<br>');
  print_r('Senha: '. $senha);*/
 $sql= "SELECT * FROM usuario WHERE email='$email' and senha= '$senha'";

 
 $result= $conexao-> query($sql);
  if(mysqli_num_rows($result)<1){
unset($SESSION['email']);
unset($SESSION['senha']);
header('Location: login.php');
}else{
  $_SESSION['email']= $_email;
  $_SESSION['senha']= $_senha;
  header('Location: sistema.php');
}


}else{

    header('Location: login.php');
}
?>
