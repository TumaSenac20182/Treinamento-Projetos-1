<?php
/*nesta linha estou fazendo a conexão comm o bando atras do estilo
PDO instanciando uma varaivel como PDO e pasasndo os arametro de conexão
se quiser testar a conexão ´=e só executar esta pagina no brouwse só com o comando da conexão*/

$conn= new PDO("mysql:dbname=bdphp;host=localhost","root","");

/*o prepare e o comando que traduz para o banco de dados nosso comando
é como se fosse um query  stmt siginifica*/
$stmt = $conn->prepare("select*from tb_susuarios ORDER BY nome");

/*com este comando eu executo os comando no banco de dados quando eu coloco -> é como se estive
passando a ordem para a varavel e não aderindo aquela escrita a ele*/
$stmt->execute();

/*o comando fetchall fatia o meu resultado é como fazer um forech com uma matriz.
como nos exemplo curso de tecnico em informatica do senac o fetch_assoc faz a mesma coisa que lá
é meio que chamaos a biblioteca do fet e passamos o parametro assoc para o pdo
ára fins academico se chama constate da classe PDO*/
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

/*assim criamos a conexão e passamos um comando para o banco exibir os registri da tabela.*/
