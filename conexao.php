<?php 
define('HOST','0.0.0.0');
define('USUARIO', 'root');
define('SENHA', 'admin');
define('DB', 'login');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Falha na conexão');

?>