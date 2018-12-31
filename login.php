<?php
/*todas as vezes que trbalharmos com session e bom start ela aqui em cima para que o php posso
saber que vamos trabalhar com sesseon e assim poder capturar ou recueprar ou seja manipular a mesma*/
SESSION_start();
 include ('conexao.php');
/*com este si consigo verificar se o usuario não  esta tentando acesar o sistem sem colcoar seus dados ou por via url*/
  if(empty($_POST['usuario']) || empty($_POST['senha']))
  {
    header("location: index.php");
    exit();
  }
/*com este comandos eu faço uma verificação dos dados escrito pelo usiario */
$usuario= mysqli_real_escape_string(getconnect(),$_POST['usuario']);
$senha= mysqli_real_escape_string(getconnect(),$_POST['senha']);

/*aqui estou jogando o comando do banco de dados dentro de uma variavel este comando traz para mim
dos dados de nome e senha do usuario de acordo com o que ele digitou nos campos da pagina index.*/
$query= "select id_usuario,nome from tb_usuarios where nome='{$usuario}' and senha='{$senha}'";

/*aqui estou jogando o comando feita na variavel anterior e abrinco a conexão com o banco de dados
jogando ambos dentro de uma variavel nova*/
$result=mysqli_query(getconnect(),$query);

/* com este comando eu tranformo o resukltado da variavel resulte em 1 ou 0
é como se 0 fosse falso e 1 fosse verdadeiro (na vdd ele retorna a quantiade de linahs que nossa query aterior trouxe
mas como configuramos ele pra trazer somente uma linha então seria 0 ou 1)*/
$row=mysqli_num_rows($result);

/*com este si eu abro um sessão e faço a verificação se o usuario digitado é igual ao meu usuarios
se não eu retono o usuario para a pagina index.php*/
if($row==1)	
{
  $_SESSION['usuario']=$usuario;
   header('location: painel.php');
   exit();
}
else
{
  $_SESSION['nao_autenticado']=true;
  header('location:index.php');
  exit();
}
