<?php
  require "../model/Professor.class.php";
  require "../view/ViewCracha.php";

  class ControllerProfessor{
    public function index(){
      $nome = $_POST['nome'];
      $escola = $_POST['escola'];
      $diciplina = $_POST['diciplina'];
      $cargo = $_POST['cargo'];
      $foto = $_POST['foto'];
      

      $modal = new Professor($nome, $escola, $foto, $cargo);
      $setTurma = $modal->setDadosProfessor($diciplina);

      $dados = $modal->getDadosProfessor();
      $diciplinaProf = $modal->getDiciplina();
      $cor = $modal->definirCor();

      $view = new ViewCracha($dados[0], $dados[1], $dados[2], $dados[3], $cor);
      $vew = $view->setDiciplina($diciplinaProf);
      $cracha = $view->getCracha();
    }
  }

  if(isset($_POST['finalizar'])){
    $controller = new ControllerProfessor();
    $controller->index();
  }
?>