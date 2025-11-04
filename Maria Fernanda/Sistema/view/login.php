<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">       
        <title>Login - Loja de Eletrodomésticos Digital</title>
    </head>
    <body>
        <h1>Login - Loja de Eletrodomésticos Digital</h1>
        <form action="./../controller/controller_usuario.php" method="POST">
            <label>Email:</label>
            <br>
            <input type="email" id="email" name="email" placeholder="Email..." required>

            <br>
            <br>

            <label>Senha:</label>
            <br>
            <input type="password" id="senha" name="senha" placeholder="Senha..." required>

            <br>
            <?php
                session_start();
                if(isset($_SESSION['erro_login'])){
                    echo $_SESSION['erro_login'];
                    unset($_SESSION['erro_login']);
                }
            ?>
            <br>

            <input type="submit" id="login" name="login" value="Acessar">
        </form>
    </body>
</html>