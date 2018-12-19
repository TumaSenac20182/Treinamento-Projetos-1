<?php
  require 'funcoes.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['Nemail'];
    $senha = $_POST['Nsenha'];

    if(verifEmail($emai)) {
      if(verifSenha($senha)) {
        header('Location: home.html');
      } else {
        header('Loocation: falhou.html');
      }
    } else {
      header('Loocation: falhou.html');
    }
  }
