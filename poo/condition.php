<?php
  include_once('index.php');

  if(isset($_POST['button1'])){
    $dados->mostrarDados();
  }
  else if(isset($_POST['button2'])){
    $dados->calcularMedia();
  }
?>