<?php
  require "../model/Aluno.class.php";
  require "../view/ViewCracha.php";

  class ControllerAluno{
    public function index(){
      $nome = $_POST['nome'];
      $escola = $_POST['escola'];
      $foto = $_POST['foto'];
      $turma = $_POST['turma'];
      

      $modal = new Aluno($nome, $escola, $foto);
      $setTurma = $modal->setDadosAluno($turma);
      $dados = $modal->getDadosAluno();
      $view = new ViewCracha();
      $vew = $view->render($dados[0], $dados[1], $dados[2], $dados[3]);
    }
  }

  if(isset($_POST['finalizar'])){
    $controller = new ControllerAluno();
    $controller->index();
  }
?>