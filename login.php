<?php
session_start();
 include ('conexao.php');

 if(empty($_POST['Nemail']) || empty($_POST['Nsenha']) )
 {
   header("location: home.php");
    exit();
 }

 $email= mysqli_real_escape_string(getconnect(),$_POST['Nemail']);
 $senha= mysqli_real_escape_string(getconnect(),$_POST['Nsenha']);

 $query= "select id_login,email from tb_login where email='{$email}' and senha='{$senha}'";

 $result=mysqli_query(getconnect(),$query);

 $row=mysqli_num_rows($result);

 if($row==1)
 {

   $_SESSION['email']=$email;
    header('location: painel.php');
    exit;
 }

 else
 {
    $_SESSION['nao_autenticada']=true;
    header('location: home.php');
    exit;
 }
