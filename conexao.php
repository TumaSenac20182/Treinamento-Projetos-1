<?php

function getconnect()
{
  $link = mysqli_connect("localhost", "root", "", "projetosenac2018");

   mysqli_set_charset($link, "utf8");

   return $link;
}

if(!getconnect())
{
  echo "erro".mysqli_error().PHP_EOL;
}
