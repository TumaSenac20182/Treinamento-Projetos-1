<?php

  function Connection() {
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "ProjetoTurma20181";
    $port = "3306";

    $link = mysqli_connect($server, $user, $password, $database, $port);
    mysqli_set_charset($link, 'utf8');

    return $link;

    if(!Connection()) {
      echo "erro na conexão: " . mysqli_errno() . PHP_EOL;
    }
  }
