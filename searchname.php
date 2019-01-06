<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <title>Cadastro</title>
  </head>
  <body>
    <div class="conteiner-fluid">
        <figure style="margin-top: 2%;" class="col-sm-6 offset-sm-3 col-12">
          <img src="https://logodownload.org/wp-content/uploads/2014/10/senac-logo-2.png" height="150" width="250" class="rounded mx-auto d-block" alt="Logo Senac Transparente">
        </figure>
        <table class="table table-striped table-hover mt-5 text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Apagar</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'crud.php';

                if($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                  $nome = $_POST['Nnome'];

                  if($listaNomes = buscaPorNome($nome)) {
                    foreach ($listaNomes as $linha) {
                ?>
                      <tr>
                        <td><?= $linha['id'] ?></td>
                        <td><?= $linha['nome'] ?></td>
                        <td><a href="editar.php?id=<?= $linha['id'] ?>">E</a></td>
                        <td><a href="apagar.php?id=<?= $linha['id'] ?>">X</a></td>
                      </tr>
              <?php
                  }
                } else {
              ?>
                        <td colspan="4">Nome não localizado</td>
              <?php
                  }
                }
              ?>
            </tbody>
          </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
