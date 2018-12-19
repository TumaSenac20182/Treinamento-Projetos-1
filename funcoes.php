<?php
  require 'connect.php';

  function verifEmail($email) {
    $link = connection();
    $query = "select * from tb_singin where email = '{$email}'";

    mysqli_query($link, $query);

    if($query == true) {
      return true;
    } else {
      return false;
    }
  }

  function verifSenha($senha) {
    $link = connection();
    $query = "select * from tb_singin where senha = '{$senha}'";

    mysqli_query($link, $query);

    if($query == true) {
      return true;
    } else {
      return false;
    }
  }
