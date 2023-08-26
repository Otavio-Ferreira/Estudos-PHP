<?php
  require "../model/Funcionario.class.php";
  require "../view/ViewCracha.php";

  class ControllerFuncionario{
    public function index(){
      $nome = $_POST['nome'];
      $escola = $_POST['escola'];
      $cargo = $_POST['cargo'];
      $foto = $_POST['foto'];
      
      $modal = new Funcionario($nome, $escola, $foto, $cargo);
      $dados = $modal->getDadosFuncionario();
      $cor = $modal->definirCor();
      $view = new ViewCracha($dados[0], $dados[1], $dados[2], $dados[3], $cor);
      $vew = $view->getCracha();
    }
  }

  if(isset($_POST['finalizar'])){
    $controller = new ControllerFuncionario();
    $controller->index();
  }
?>