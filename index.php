<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">Canal TI</a></h3>
                  <!--com este bloco eu faço a verificação se o usuarui esta certo ciando no se não lá do verificação de usuario
                   o isset verifica a sesão que foi iniciada quando o usuario tentar logar a 1 vez e não consegui a sessão são nao_autenticado vai ser startada
                   e o unset é responsavel por finaliar uma sessão especifica no nosso caso ele vai fechar a sessao não_autenticada
                 o endif é uma mandeira de controlar o if dentro do php que temos que estudar mais é como se fosse a palavra aqui continua o meu if.

               este bloco praticamente diz se minha sessão não_autenticada estiver ativa exiba a mesnagem erro se não encerre a sessão nao_autenticado

             lembando que semrpre que quiser trabalhar com sessão starta ela no inico da pagina-->
                    <?php
                      if(isset($_SESSION['nao_autenticado'])):
                      ?>
                      <div class="notification is-danger">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                      </div>
                      <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                      ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
