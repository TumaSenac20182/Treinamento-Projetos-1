<?php

session_start();
 include ('conexao.php');

 if(empty($_POST['Nemail']) || empty($_POST['Nsenha']))
 {
   header("location: home.php");
    exit();
 }

 $email= mysqli_real_escape_string(getconnect(),$_POST['Nemail']);
 $senha= mysqli_real_escape_string(getconnect(),$_POST['Nsenha']);

 $query= "select email from tb_login where email='{$email}' and senha='{$senha}'";

 $result = mysqli_query(getconnect(),$query);

 $row = mysqli_num_rows($result);


 if($row == 1){
   $_session['usuario'] = $email;
   echo $mail;
    header('location: painel.php');

    exit;
 }

 else
 {
    $_session['nao_autenticada'] = true;
    header('location: home.php');
    exit;
 }
