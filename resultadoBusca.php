<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <div>
      <table>
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
                    <td colspan="4">Nome não localizado</td>
          <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
