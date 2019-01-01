<?php
  require 'crud.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['Nemail'];
    $nome = $_POST['Nnome'];
    $senha = $_POST['Nsenha'];

    if(insere($email, $nome, $senha)) {
      echo "Sucesso ao cadastrar!";
    } else {
      echo "Falha ao cadastrar!";
    }
  }