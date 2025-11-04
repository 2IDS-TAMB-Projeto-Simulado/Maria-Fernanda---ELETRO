<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">       
        <title>Página Inicial</title>
    </head>
    <body>
        <h1>Página Inicial</h1>
        <h2>Loja de Eletrodomésticos Digital</h2>
        <h3>Bem vindo, <?php echo $_SESSION['usuario']['USU_NOME']; ?>!</h3>
        <a href="listar_produtos.php"><button>Cadastrar Produto</button></a>
        <a href="gestao_estoque.php"><button>Gestão de Estoque</button></a>
        <a href="login.php"><button>Logout</button></a>
    </body>
</html>