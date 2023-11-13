<?php
require_once '../App/Model/LivroModel.php';


class LivroController {
    private $livroModel;

    public function __construct($pdo) {

        $this->livroModel = new LivroModel($pdo);
    }

    public function criarLivro($nome, $categoria) {
        $this->livroModel->criarLivro($nome, $categoria);
    }

    public function listarLivros() {
        return $this->livroModel->listarLivros();
    }

    public function exibirListaLivros() {
        $livros = $this->livroModel->listarLivros();
        include '../App/View/Livros/lista.php';
    }

    public function atualizarLivro($livro_id, $nome, $categoria) {
        $this->livroModel->atualizarLivro($livro_id, $nome, $categoria);
    }
    
    public function excluirLivro ($livro_id) {
        $this->livroModel->excluirLivro($livro_id);
    }
}
?>