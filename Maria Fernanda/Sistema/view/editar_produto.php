<?php
require_once "./../controller/controller_produto.php";

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">       
        <title>Editar Produto</title>
    </head>
    <body>
        <h1>Editar Produto</h1>
        <form action="" method="POST">
            <label>Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" value="<?php echo $produto_editar["PROD_NOME"]; ?>" required>

            <br>
            <br>

            <label>Fornecedor:</label>
            <br>
            <input type="text" id="fornecedor" name="fornecedor" value="<?php echo $produto_editar["PROD_FORNECEDOR"]; ?>" required>

            <br>
            <br>

            <label>Categoria:</label>
            <br>
            <input type="text" id="categoria" name="categoria" value="<?php echo $produto_editar["PROD_CATEGORIA"]; ?>" required>

            <br>
            <br>

            <label>Descrição:</label>
            <br>
            <input type="text" id="descricao" name="descricao" value="<?php echo $produto_editar["PROD_DESCRICAO"]; ?>" required>

            <br>
            <br>

            <label>Garantia:</label>
            <br>
            <input type="text" id="garantia" name="garantia" value="<?php echo $produto_editar["PROD_GARANTIA"]; ?>" required>

            <br>
            <br>

            <input type="submit" id="editar_produto" name="editar_produto" value="Salvar Alterações">
        </form>
        <br>
        <a href="inicial.php"><button>Voltar</button></a>
    </body>
</html>