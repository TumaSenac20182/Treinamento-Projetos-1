<?php

SESSION_START();

if(!$_SESSION['email'])
{
  header('location: home.php');
  exit;
}
