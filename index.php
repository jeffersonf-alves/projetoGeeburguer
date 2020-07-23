<?php 
if ($row == 1 ) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek Burguer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h3>GeekBurguer</h3>
    
    </header>

    <nav>
      
        <ul>
            <li><a href="">Sobre</a></li>
            <li><a href="#login">Fazer Pedido</a></li>
            <li><a href="#main-form">Cadastrar-se</a></li>
            <li><a href="#login">Login</a></li>
        </ul>
    
    
    </nav>
    <section class="navegation">
        <div class="navegation-1">
            <div class="img1">
                </p><img src="img/friends/friends1.jpg" alt="" class="img1" align="left">
            </div>
            <div class="conteudo1">
                <h3>Venha e traga seu amigo!</h3>
                <p>Se você traz um amigo e esse amigo lancha com a gente
                    você ganha desconto, válido para até 3 amigos e 10% de
                    deseonto para cada amigo que você trouxer!
                </p>
            </div>
        </div> 
        <div class="navegation-2">
            <div class="">
                <p><img src="img/friends/friends2.jpg" alt="" class="img2" align="left"><h3 class="conteudo-2">E tem Mais</h3>
                    <p class="conteudo-2">Aqui você ainda se diverte com seus amigos com todos os games disponíveis em nossa unidade!<br>
                        além de um super desconto na primeira compra, é só fazer seu cadastro e ir em das nossas unidades!

                    </p>

                    
                </p>
            </div>
          

        </div>
        <div class="navegation-3">
           <p><img src="img/conteudo/hamburguer.jpg" class="img3" align="left"><h3>Temos entregas</h3>
            <p class="conteudo-3">As entregas são para algumas regiões, é só seguir os passos abaixo para saber se existe entrega para sua região</p>
            <p class="conteudo-3">1º Faça seu cadastro</p>
            <p class="conteudo-3">2º Após fazer seu cadastro saberá se existe entrega para sua rigião</p>
            <p class="conteudo-3">3º Muito fácil né? clique em cadastr-se</P>
        </div>
    </section>

    <section class="section-2" id="main-form">
        <div class="section-filho-1">
            <h1>Faça seu Cadastro</h1>
            <form action="cadastro.php" method="post" class="main-form">
                <label for="nome">Nome</label>
                <input type="text" id="nome" placeholder="Nome">

                <label for="email">E-mail</label>
                <input type="text" id="email" placeholder="E-mail">

                <label for="cpf">CPF</label>
                <input type="text" id="cpf" placeholder="CPF">

                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" placeholder="Telefone">

                <label for="cep">CEP</label>
                <input type="text" id="cep" placeholder="cep">

                <label for="rua">Rua</label>
                <input type="text" id="rua" placeholder="rua">

                <label for="numero">Número</label>
                <input type="text" id="numero" placeholder="Número">

                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" placeholder="Bairro">

                <button>Cadastrar</button>

            </form>
        </div>
        <div class="section-filho-2" id="login">
        <h1>Faça Login</h1>
            <form action="login.php" method="post" class="main-form">
               
                <label for="email">E-mail</label>
                <input type="text" id="email" placeholder="E-mail" name="usuario">

                <label for="senha">Senha</label>
                <input type="password" id="senha" placeholder="senha" name="senha">


                <button>Fazer Login</button>

            </form>

        </div>   
    </section>




    <div class="footer">
        <div class="contato">
            <div class="contato-1">
                <h3>Endereço</h3>
                <p>Avenida Paulita Nº452</p>
                <p>São Paulo - SP</p>
            </div>
            <div class="contato-2">
                <h3>Contatos</h3>
                <p>(11) 95242-2215</p>
                <p>geekburguer@outlook.com</p>

            </div>
        </div>
    </div>
</body>
</html>