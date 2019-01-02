<?php
session_start();
 include ('conexao.php');

 if(empty($_POST['Nemail']) || empty($_POST['Nsenha'])) {
   header("location: home.php");
    exit();
 }

 $email = mysqli_real_escape_string(getconnect(), $_POST['Nemail']);
 $senha = mysqli_real_escape_string(getconnect(), $_POST['Nsenha']);

<<<<<<< HEAD
 $query = "select id_login, email nome from tb_login where email = '{$email}' and senha = '{$senha}'";
=======
 $query = "select*from tb_login where email ='{$email}' and senha='{$senha}'";
>>>>>>> 377fe728efe1a62c9c673df6567dbf3cc93ed90a

 $result = mysqli_query(getconnect(), $query);

 $row = mysqli_num_rows($result);

 if($row == 1) {
  $email = $_SESSION['Nemail'];
  header('location: cadastro.html');
  exit;
 }
 else
  {
    $_SESSION['nao_autenticada'] = true;
    header('location: painel.php');
    exit;
 }
