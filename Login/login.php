<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>

<?php
if(isset($_SESSION['nao_autenticado'])):
    echo '<p style="color: red;">Usuário ou senha inválidos!</p>';
    unset($_SESSION['nao_autenticado']);
endif;
?>

<form action="loginconfig.php" method="POST">
    <input type="text" name="email" placeholder="E-mail ou Nome de Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Login</button>
</form>
<a href="cadastro.php">Crie sua conta</a>
</body>
</html>
