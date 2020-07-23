<?php 
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));


$sql = "select count(*) as total from usuario where usuario = '$usuario'";

$result = mysqli_query($sql);
$row = mysqli_fetch($resul);

if($row)

?>