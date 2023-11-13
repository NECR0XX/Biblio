<?php
class LivroModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Livros
    public function criarLivro($nome, $categoria) {
        $sql = "INSERT INTO livros (nome, categoria) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $categoria]);
    }

    // Model para listar Livros
    public function listarLivros() {
        $sql = "SELECT * FROM livros";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Livros
    public function atualizarLivro($livro_id, $nome, $categoria){
        $sql = "UPDATE livros SET nome = ?, categoria = ? WHERE livro_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $categoria, $livro_id]);
    }
    
    // Model para deletar Livro
    public function excluirLivro($livro_id) {
        $sql = "DELETE FROM livros WHERE livro_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$livro_id]);
    }
    
}
?>