<?php
    require_once "../model/model_usuario.php";

    if(isset($_POST["email"]) && isset($_POST["senha"])){
        $usuario = new Usuario();
        $resultado = $usuario->buscar_usuario($_POST["email"], $_POST["senha"]);

        if($resultado) {
            session_start();
            $_SESSION['usuario'] = $resultado;
            header("Location: ../view/inicial.php"); 
            exit();
        } else {
            session_start();
            $_SESSION['erro_login'] = "Email ou senha inválidos!";
            header("Location: ../view/login.php"); 
        }
    }
?>