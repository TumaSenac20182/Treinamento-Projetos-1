<?php

  require_once 'conexao.php';
function insere($email, $nome, $senha)
  {
    $link = getconnect();
    $query = "insert into tb_login(email, nome, senha) values ('{$email}', '{$nome}', '{$senha}')";
    if(mysqli_query($link, $query)) {
      return true;
    }

    return false;
  }