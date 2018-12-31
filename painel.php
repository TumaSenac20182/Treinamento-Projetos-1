<?php
SESSION_start();
/*com este include minha verificação de login começa a agir*/
include('verifica_login.php');
?>
<h2>olá <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>
