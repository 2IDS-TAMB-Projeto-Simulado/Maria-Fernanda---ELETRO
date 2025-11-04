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
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <h1>Cadastro de Produtos</h1>
        <form action="./../controller/controller_produto.php" method="POST">
            <label>Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Nome..." required>

            <br>
            <br>

            <label>Fornecedor:</label>
            <br>
            <input type="text" id="fornecedor" name="fornecedor" placeholder="Fornecedor..." required>

            <br>
            <br>

            <label>Categoria:</label>
            <br>
            <input type="text" id="categoria" name="categoria" placeholder="Categoria..." required>

            <br>
            <br>

            <label>Descrição:</label>
            <br>
            <input type="text" id="descricao" name="descricao" placeholder="Descrição..." required>

            <br>
            <br>

            <label>Garantia:</label>
            <br>
            <input type="text" id="garantia" name="garantia" placeholder="Garantia..." required>

            <br>
            <br>


            <input type="submit" id="cadastrar_produto" name="cadastrar_produto" value="Cadastrar">
        </form>
        <br>
        <a href="inicial.php"><button>Voltar</button></a>
    </body>
</html>