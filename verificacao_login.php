<?php

session_start();

if(!$_session['Nemail']){
  header('location: home.php');
  exit;
}
