<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <title>Cadastro</title>
    <style>
td, table
{
  border: 1px solid black;
  margin:  auto;
  width: 40%;
}
    </style>
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
            <th>E-mail</th>
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

              if($listaNomes =  buscarNome($nome)) {
                foreach ($listaNomes as $linha) {
            ?>
                  <tr>
                    <td><?= $linha['id_login'] ?></td>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['email'] ?></td>
                    <td><a href="editar.php?id=<?= $linha['id_login'] ?>">E</a></td>
                    <td><a href="apagar.php?id=<?= $linha['id_login'] ?>">X</a></td>
                  </tr>
          <?php
              }
            } else {
          ?>
                    <td colspan="5">Nome não localizado</td>
          <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
    <div style="margin-left: 1%; margin-top:30%; bottom: 0; position: fixed;">
      <form action="home.php">
      <button class="btn btn-dark">Home</button>
      </form>
  </body>
</html>
