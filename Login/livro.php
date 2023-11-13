<?php
require_once '../Config/config.php';
require_once '../App/Controller/LivroController.php';

$livroController = new LivroController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['categoria'])) 
{
    $livroController->criarLivro($_POST['nome'], $_POST['categoria']);
    header('Location: #');
}

// Atualiza Livro
if (isset($_POST['livro_id']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_categoria'])) {
    $livroController->atualizarLivro($_POST['livro_id'], $_POST['atualizar_nome'], $_POST['atualizar_categoria']);
}

// Excluir Livro
if (isset($_POST['excluir_livro_id'])) {
    $livroController->excluirLivro($_POST['excluir_livro_id']);
}

$livros = $livroController->listarLivros();

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <h1>Livros</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="categoria" placeholder="Categoria" required>
        <button type="submit">Adicionar Livro</button>
    </form>

    <h2>Lista de Livros</h2>
    <ul>
        <?php foreach ($livros as $livro): ?>
            <li><?php echo $livro['nome']; ?> - <?php echo $livro['categoria']; ?></li>
        <?php endforeach; ?>
    </ul>

<?php
$livroController->exibirListaLivros();
?>

<h2>Atualizar Livro</h2>
    <form method="post">
        <select name="livro_id">
        <?php foreach ($livros as $livro): ?>
                                <option value="<?php echo $livro['livro_id']; ?>"><?php echo $livro['livro_id']; ?></option>
                                <?php endforeach; ?>
        </select>
                <input type="text" name="atualizar_nome" placeholder="Novo Nome" required>
                <input type="text" name="atualizar_categoria" placeholder="Nova livro" required>
        <button type="submit">Atualizar Livro</button>
    </form>

    <h2>Excluir Livro</h2>
    <form method="post">
        <select name="excluir_livro_id">
            <?php foreach ($livros as $livro): ?>
                <option value="<?php echo $livro['livro_id']; ?>"><?php echo $livro['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Livro</button>
    </form>
</body>
</html>