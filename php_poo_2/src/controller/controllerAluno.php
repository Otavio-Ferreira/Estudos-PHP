<?php
  require "../model/Aluno.class.php";
  require "../view/ViewCracha.php";

  class ControllerAluno{
    public function index(){
      $nome = $_POST['nome'];
      $escola = $_POST['escola'];
      $foto = $_POST['foto'];
      $turma = $_POST['turma'];
      $cargo = $_POST['cargo'];
      

      $modal = new Aluno($nome, $escola, $foto, $cargo);
      $setTurma = $modal->setDadosAluno($turma);

      $dados = $modal->getDadosAluno();
      $turmaAluno = $modal->getTurma();
      $cor = $modal->definirCor();

      $view = new ViewCracha($dados[0], $dados[1], $dados[2], $dados[3], $cor);
      $vew = $view->setTurma($turmaAluno);
      $cracha = $view->getCracha();
    }
  }

  if(isset($_POST['finalizar'])){
    $controller = new ControllerAluno();
    $controller->index();
  }
?>