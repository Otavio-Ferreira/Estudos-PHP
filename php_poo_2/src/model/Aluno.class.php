<?php
  include_once "Escola.class.php";
  include_once "cor.php";

  class Aluno extends Escola implements cor{
    private $turma;

    public function __construct($nome, $escola, $foto){
      parent::__construct($nome, $escola, $foto);
    }

    public function setDadosAluno($turma){
      $this->turma = $turma;
    }

    public function getDadosAluno(){
      return [$this->nome, $this->escola, $this->foto, $this->turma];
    }

    public function definirCor(){
      return "green";
    }
  }
?>