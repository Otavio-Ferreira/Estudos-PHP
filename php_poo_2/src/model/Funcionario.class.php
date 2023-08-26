<?php
  include_once "Escola.class.php";
  include_once "cor.php";

  class Funcionario extends Escola implements cor{

    public function __construct($nome, $escola, $foto, $cargo){
      parent::__construct($nome, $escola, $foto, $cargo);
    }

    public function getDadosFuncionario(){
      return [$this->nome, $this->escola, $this->foto, $this->cargo];
    }

    public function definirCor(){
      return "yellow";
    }
  }
?>