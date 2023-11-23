<?php
require_once '../Config/config.php';
require_once 'App/Controller/UserController.php';

$userController = new UserController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['email']) &&
    isset($_POST['senha'])) 
{
    $userController->criarUser($_POST['nome'], $_POST['email'], $_POST['senha']);
    header('Location: #');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="Public/Css/style_cadastro.css">
    <title>Cadastro</title>
</head>
<body style="background-image: url('Public/Assets/library_index.jpg');">
    <a href="login.php">Voltar</a>
    <h1>Fazer Cadastro</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Nome Usuário" required><br>
        <input type="text" name="email" placeholder="E-mail" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Adicionar User</button>
    </form>
</body>
</html>