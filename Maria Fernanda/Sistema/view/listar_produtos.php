<?php
require_once "./../controller/controller_produto.php";

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

$produto = new Produto();
if (isset($_POST['botao_pesquisar'])) {
    $resultados = $produto->filtrar_produto($_POST['pesquisar']);
} 
else {
    $resultados = $produto->listar_produtos();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">       
        <title>Lista de Produtos</title>
        <style>
            table{
                border-collapse:collapse;
            }
            tr, td, th{
                padding: 12px;
            }
        </style>
    </head>
    <body>
        <h1>Lista de Produtos</h1>
        <form method="POST">
            <input type="search" id="pesquisar" name="pesquisar" placeholder="Pesquisar...">
            <input type="submit" id="botao_pesquisar" name="botao_pesquisar" value="Filtrar">
        </form>
        
        <br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Fornecedor</th>
                <th>Categoria</th>
                <th>Garantia</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
                if(count($resultados) > 0){
                    foreach($resultados as $r){
                        echo "<tr>";  
                        echo "<td>".$r["PROD_ID"]."</td>";
                        echo "<td>".$r["PROD_NOME"]."</td>";
                        echo "<td>".$r["PROD_FORNECEDOR"]."</td>";
                        echo "<td>".$r["PROD_CATEGORIA"]."</td>";
                        echo "<td>".$r["PROD_GARANTIA"]."</td>";
                        echo "<td>".$r["PROD_DESCRICAO"]."</td>";
                        echo "<td><a href='editar_produto.php?acao=editar_produto&id=".$r["PROD_ID"]."'>Editar</a></td>";
                        echo "<td><a href='./../controller/controller_produto.php?acao=excluir_produto&id=".$r["PROD_ID"]."'>Excluir</a></td>";
                        echo "</tr>";                            
                    }
                }
                else{
                    echo "<tr>";  
                    echo "<th colspan='6'>Nenhum produto cadastrado!</th>";
                    echo "</tr>";       
                }
            ?>
        </table>
        <br>
        <a href="cadastro_produto.php"><button>Cadastrar Produto</button></a>
        <br>
        <br>
        <a href="inicial.php"><button>Voltar</button></a>
    </body>
</html>