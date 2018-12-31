<?php

function getconnect()
{
<<<<<<< HEAD
  $link = mysqli_connect("localhost", "root", "", "projetosenac2018");

   mysqli_set_charset($link, "utf8");
=======
   $link= mysqli_connect('localhost','root','' ,'usuarios');

     mysqli_set_charset($link,'utf8');
>>>>>>> 881fd925934579adf4efae7d751dbf8eb4935ecc

     return $link;
}

if(!getconnect())
{
  echo "Erro".mysqli_error().PHP_EOL;
}
