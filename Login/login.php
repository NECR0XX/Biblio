<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="Public/Css/style_login.css">
    <title>Login</title>
</head>
<body style="background-image: url('Public/Assets/library_index.jpg');">
    <header>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
            echo '<p style="color: red;">Usuário ou senha inválidos!</p>';
            unset($_SESSION['nao_autenticado']);
        endif;
        ?>
    </header>

    <section class="login_section">
        <h1>SERENE LIBRARY</h1>

        <div class="login_box">
            <h2>Login</h2>

            <form action="loginconfig.php" method="POST">
                <input type="text" name="email" placeholder="E-mail ou Nome de Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <div class="button">
                    <button type="submit">Login</button>
            </form>

            <form action="cadastro.php">
            <button>Crie sua conta</button></div>
            </form>
        </div>
    </section>
</body>
</html>
