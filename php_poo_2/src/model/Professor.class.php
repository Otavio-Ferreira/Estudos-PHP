<?php
  include_once "Escola.class.php";
  include_once "cor.php";

  class Professor extends Escola implements cor{

    private $diciplina;

    public function __construct($nome, $escola, $foto, $cargo){
      parent::__construct($nome, $escola, $foto, $cargo);
    }

    public function setDadosProfessor($diciplina){
      $this->diciplina = $diciplina;
    }

    public function getDadosProfessor(){
      return [$this->nome, $this->escola, $this->foto, $this->cargo];
    }

    public function getDiciplina(){
      return $this->diciplina;
    }

    public function definirCor(){
      return "blue";
    }
  }
?>