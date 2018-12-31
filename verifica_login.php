<?php
/*com este comando si fazemos a verificação se a sesão do usuario é valida impedindo que ele ou outro usuario faca o acesso com a url
assim tonando o acesso seguro e validado
resumindo se a sessão do usuario não existir elçe não conseguira acessar por outras maneira*/
session_start();

if(!$_SESSION['usuario'])
{
   header('location:index.php');
   exit();
}
