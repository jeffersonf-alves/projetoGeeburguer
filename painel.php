<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="estilo_painel.css">
</head>
<body>
    <nav>
    	<h4>Usuario: <?= $_SESSION['usuario'] ?> </h4>
        <ul>
            <li><a href="">Meus Pedidos</a></li>
            <li><a href="">Meu endereço</a></li>
            <li><a href="">Meus dados</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
</body>
</html>