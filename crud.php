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

  function buscarNome($nome)
  {
    $link=getconnect();

    $query = "select * from tb_login where nome like '%{$nome}%'";

    $resultado=mysqli_query($link,$query);

    $cadastro = array();

    while ($varaux=mysqli_fetch_assoc($resultado))
     {
       array_push($cadastro, $varaux);
     }
     return $cadastro;
    }
