<?php
/*aqui eu estou inciando a sessão e estou com o procimo comando saindo dela
com isso devemos criar um botão sair no painel jogando ele para este local.*/

session_start();
session_destroy();

//aqui ele ira rediracionar para a pagina principal.
header('location:index.php');
exit();
