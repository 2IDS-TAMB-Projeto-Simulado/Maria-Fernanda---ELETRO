<?php
    require_once "../model/model_produto.php";
    session_start();

    //CADASTRAR PRODUTO
    if(isset($_POST["cadastrar_produto"])){
        $produto = new Produto();
        $resultado = $produto->cadastrar_produto($_POST["nome"], $_POST["fornecedor"], $_POST["categoria"], $_POST["descricao"], $_POST["categoria"], $_SESSION['usuario']["USU_ID"]);
        if($resultado){
            echo "<script>
                    alert('Produto cadastrado com sucesso!');
                    window.location.href='../view/listar_produtos.php';
                </script>";
        } 
        else {
            echo "<script>
                    alert('Erro ao cadastrar produto!');
                    window.location.href='../view/listar_produtos.php';
                </script>";
        }
        exit();
    }

    //BUSCAR DADOS PARA EDITAR PRODUTO
    else if(isset($_GET["acao"]) && $_GET["acao"] == "editar_produto"){
        $produto = new Produto();
        $resultados = $produto->buscar_produto_pelo_id($_GET["id"]);

        if(!empty($resultados)) {
            $produto_editar = $resultados[0];
        } else {
            echo "<script>
                    alert('Produto não encontrado!');
                    window.location.href='listar_produtos.php';
                </script>";
            exit();
        }
    }

    //EDITAR PRODUTO
    if(isset($_POST["editar_produto"])){
        $produto = new Produto();
        $resultado = $produto->editar_produto($_POST["prod_nome"], $_POST["prod_fornecedor"], $_POST["prod_categoria"], $_POST["prod_descricao"], $_POST["prod_categoria"], $_SESSION['usuario']["USU_ID"]);
        if($resultado){
            echo "<script>
                    alert('Produto atualizado com sucesso!');
                    window.location.href='../view/listar_produtos.php';
                </script>";
        } 
        else {
            echo "<script>
                    alert('Erro ao atualizar produto!');
                    window.location.href='../view/listar_produtos.php';
                </script>";
        }
        exit();
    }

    //EXCLUIR PRODUTO
    else if(isset($_GET["acao"]) && $_GET["acao"] == "excluir_produto"){
        $produto = new Produto();
        $resultado = $produto->excluir_produto($_GET["prod_id"], $_SESSION['usuario']['USU_ID']);
        if($resultado){
            echo "<script>
                    alert('Produto excluído com sucesso!');
                    window.location.href='../view/listar_produtos.php';
                </script>";
        } 
        else {
            echo "<script>
                    alert('Erro ao excluir produto!');
                    window.location.href='../view/listar_produtos.php';
                </script>";
        }
        exit();
    }
?>