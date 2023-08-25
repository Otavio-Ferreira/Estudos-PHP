<?php
  include_once "Escola.class.php";
  include_once "cor.php";

  private $cargo;

  class Funcionario extends Escola implements cor{
    public function __construct($nome, $escola, $foto){
      parent::__construct($nome, $escola, $foto);
    }

    public function setDadosFuncionario($cargo){
      $this->cargo = $diciplina;
    }

    public function getDadosFuncionario(){
      return $this->cargo;
    }

    public function definirCor(){
      return "yellow";
    }
  }
?>