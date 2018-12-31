<?php

SESSION_START();

if (!$_SESSION['Nemail']) {
  header('location: home.php');
  exit;
}
