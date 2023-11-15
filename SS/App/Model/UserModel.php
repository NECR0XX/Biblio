<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Users
    public function criarUser($nome, $email, $senha) {
        $sql = "INSERT INTO users (nome, email, senha, tipo_usuario) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, 2]);
    }

    // Model para listar Users
    public function listarUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Users
    public function atualizarUser($id, $nome, $email, $senha){
        $sql = "UPDATE users SET nome = ?, email = ?, senha = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $id]);
    }
    
    // Model para deletar User
    public function excluirUser($id) {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
    
}
?>