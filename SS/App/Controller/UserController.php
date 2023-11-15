<?php
require_once 'LoginADM/App/Model/UserModel.php';


class UserController {
    private $userModel;

    public function __construct($pdo) {

        $this->userModel = new UserModel($pdo);
    }

    public function criarUser($nome, $email, $senha) {
        $this->userModel->criarUser($nome, $email, $senha);
    }

    public function listarUsers() {
        return $this->userModel->listarUsers();
    }

    public function exibirListaUsers() {
        $users = $this->userModel->listarUsers();
        include 'App/View/Usuarios/lista.php';
    }

    public function atualizarUser($id, $nome, $email, $senha) {
        $this->userModel->atualizarUser($id, $nome, $email, $senha);
    }
    
    public function excluirUser ($id) {
        $this->userModel->excluirUser($id);
    }
}
?>