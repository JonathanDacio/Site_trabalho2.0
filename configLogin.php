<?php
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
  print_r($sql);



}else{

    header('Location: login.php');
}
?>
