<?php
require_once '../../../../Config/config.php';
require_once '../../../App/Controller/UserController.php';
require_once '../../../SS/App/Controller/EmprestimoController.php';

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
