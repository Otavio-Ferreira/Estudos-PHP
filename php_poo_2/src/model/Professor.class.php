<?php
  include_once "Escola.class.php";
  include_once "cor.php";

  private $diciplina;
  private $cargo;

  class Professor extends Escola implements cor{
    public function __construct($nome, $escola, $foto){
      parent::__construct($nome, $escola, $foto);
    }

    public function setDadosProfessor($cargo, $diciplina){
      $this->diciplina = $diciplina;
      $this->cargo = $diciplina;
    }

    public function getDadosProfessor(){
      return [$this->diciplina, $this->cargo];
    }

    public function definirCor(){
      return "blue"
    }
  }
?>