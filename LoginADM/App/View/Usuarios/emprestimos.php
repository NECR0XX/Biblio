<?php
require_once 'C:\Users\Usuario\Documents\prog\Xano\htdocs\Biblio\Config\config.php';
require_once 'C:\Users\Usuario\Documents\prog\Xano\htdocs\Biblio\LoginADM\App\Controller\UserController.php';
require_once 'C:\Users\Usuario\Documents\prog\Xano\htdocs\Biblio\SS\App\Controller\EmprestimoController.php';

$userId = $_GET['id'];
$usuarioController = new UserController($pdo);
$usuario = $usuarioController->listarLivrosEmprestadosporID($userId); // Supondo que você tenha um método semelhante para obter informações do usuário
$usuarioNome = $usuario['nome']; // Substitua 'nome' pelo campo correto que armazena o nome do usuário

$emprestimosUsuario = $emprestimoController->listarLivrosEmprestados($usuarioNome);


if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $emprestimosUsuario = $emprestimoController->listarLivrosEmprestados($userId);

    echo '<h1>Empréstimos do Usuário</h1>';
    echo '<ul>';
    foreach ($emprestimosUsuario as $emprestimo) {
        echo '<li>' . $emprestimo['nome_livro'] . '</li>';
    }
    echo '</ul>';
} else {
    echo 'ID do usuário não fornecido.';
}
?>
