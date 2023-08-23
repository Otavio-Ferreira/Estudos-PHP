<?php
  require "modal.php";
  require "view.php";

  class Controller{
    public function index(){
      $n = $_POST['nome'];
      $e = $_POST['escola'];
      $d = $_POST['diciplina'];
      $n1 = $_POST['nota1'];
      $n2 = $_POST['nota2'];
      $n3 = $_POST['nota3'];
      $n4 = $_POST['nota4'];

      $modal = new Modal($n, $e, $d, $n1, $n2, $n3, $n4);
      $view = new View();
      $strings = $modal->mostrarBoletim();
      $view = $view->render($strings[0], $strings[1], $strings[2], $strings[3], $strings[4], $strings[5], $strings[6], $strings[7], $strings[8]);
    }
  }

  if(isset($_POST['button1'])){
    $controller = new Controller();
    $controller->index();
  }
?>