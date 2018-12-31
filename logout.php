<?php
/*aqui eu estou inciando a sessão e estou com o procimo comando saindo dela
com isso devemos criar um botão sair no painel jogando ele para este local.*/

session_start();
session_destroy();

<<<<<<< HEAD
header('location: home.php');
exit;
=======
//aqui ele ira rediracionar para a pagina principal.
header('location:index.php');
exit();
>>>>>>> 881fd925934579adf4efae7d751dbf8eb4935ecc
