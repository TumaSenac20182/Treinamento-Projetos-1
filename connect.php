<?php

  function Connection() {
    $link = mysqli_connect('localhost', 'root', '', 'ProjetoTurma20181', '3306');
    mysqli_set_charset($link, 'utf8');

    return $link;

    if(!Connection()) {
      echo "erro na conexão: " . mysqli_errno() . PHP_EOL;
    }
  }
