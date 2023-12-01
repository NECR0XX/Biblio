<?php
require_once '../Config/config.php';
require_once 'App/Controller/LivroController.php';
require_once 'App/Controller/UserController.php';

$userController = new UserController($pdo);
$users = $userController->listarUsers();

$livroController = new LivroController($pdo);
$livros = $livroController->listarLivros();

$livroController->exibirListaLivros();
$userController->exibirListaUsers();

include_once 'historico.php';
?>