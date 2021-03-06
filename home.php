  <?php
session_start();

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <title>Home</title>
  </head>
  <body>
    <div class="conteiner-fluid">
      <div class="head">
        <figure style="margin-top: 2%;" class="col-sm-6 offset-sm-3 col-12">
          <img src="https://logodownload.org/wp-content/uploads/2014/10/senac-logo-2.png" height="150" width="250" class="rounded mx-auto d-block" alt="Logo Senac Transparente">
        </figure>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 3%;">
          <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="home.php">
              <img src="https://logodownload.org/wp-content/uploads/2014/10/senac-logo-2.png" width="50" height="30" class="d-inline-block align-top" alt="">
            </a>
          </nav>
          <div class="collapse navbar-collapse" id="IbarraNav">
            <ul class="navbar-nav" style="margin-right: 20%;">
              <li class="nav-item active">
                <a class="nav-link" href="home.html">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="historia.html">Nossa história</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.html">Fale conosco</a>
              </li>
            </ul>
            <div id="modalAluno" style="margin-left: 1%;">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ImodalAluno">Área do aluno</button>

              <div class="modal fade" id="ImodalAluno" tabindex="-1" role="dialog" aria-labelledby="Área do aluno" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ImodalTitleAluno">Login de alunos</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="login.php" method="post" class="col-8 offset-2" id="singin">
                        <div class="form-group">
                          <label id="label" for="Iemail">Email</label>
                          <input type="email" class="form-control" name="Nemail" id="Iemail" aria-describedby="emailHelp" placeholder="Informe seu email">
                        </div>
                        <div class="form-group">
                          <label id="label" for="Isenha">Senha</label>
                          <input type="password" class="form-control" name="Nsenha" id="Isenha" placeholder="Informe sua senha">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" for="singin" class="btn btn-dark">Entrar</button>
                      <button type="close" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div id="modalProf">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ImodalAluno">Área do Professor</button>

              <div class="modal fade" id="ImodalAluno" tabindex="-1" role="dialog" aria-labelledby="Área do professor" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ImodalTitleProf">Login de professor</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="login.php" method="post" class="col-8 offset-2" id="singin">
                        <div class="form-group">
                          <label id="label" for="Iemail">Email</label>
                          <input type="email" class="form-control" name="Nemail" id="Iemail" aria-describedby="emailHelp" placeholder="Informe seu email">
                        </div>
                        <div class="form-group">
                          <label id="label" for="Isenha">Senha</label>
                          <input type="password" class="form-control" name="Nsenha" id="Isenha" placeholder="Informe sua senha">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" for="singin" class="btn btn-dark">Entrar</button>
                      <button type="close" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin-right: 1%;">
              <form action="cadastro.html" method="post">
                <button type="submit" class="btn btn-dark">Cadastrar</button>
              </form>
            </div>
            <div>
              <form class="form-inline" action="search.html" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar por nome" aria-label="Buscar">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <div class="mid">
        <div class="row" style="margin: auto;">
          <div class="col-4" id="noticias" style="text-align: center;">
            <p>Notícias</p>
          </div>
          <div class="col-7" id="outrasCoisas" style="text-align: center;">
            <p>Resto</p>
          </div>
        </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
