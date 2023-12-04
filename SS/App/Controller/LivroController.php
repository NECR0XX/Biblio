<?php
require_once 'C:/xampp/htdocs/final2023/Biblio/SS/App/Model/LivroModel.php';


class LivroController {
    private $livroModel;

    public function __construct($pdo) {

        $this->livroModel = new LivroModel($pdo);
    }

    public function listarLivros() {
        return $this->livroModel->listarLivros();
    }
    
    public function listarLivrosPorCategoria($filtro) {
        return $this->livroModel->listarLivrosPorCategoria($filtro);
    }

    public function filtrarLivros($filtro){

        if($filtro == 'romance'){
            header('Location: ../../romance.php?filtro=romance');
        }
        elseif($filtro == 'terror'){
            header('Location: ../../terror.php?filtro=terror');
        }
        elseif($filtro == 'infantil'){
            header('Location: ../../infantil.php?filtro=infantil');
        }
        elseif($filtro == 'drama'){
            header('Location: ../../drama.php?filtro=drama');
        }
    }
}
?>