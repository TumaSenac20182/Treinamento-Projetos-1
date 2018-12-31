<?php

function getconnect()
{
   $link= mysqli_connect('localhost','root','' ,'usuarios');

     mysqli_set_charset($link,'utf8');

     return $link;
}

if(!getconnect())
{
  echo "Erro".mysqli_error().PHP_EOL;
}
