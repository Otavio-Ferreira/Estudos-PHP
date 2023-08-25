<?php
  abstract class Escola{
    public $nome;
    public $escola;
    public $foto;

    public function __construct($nome, $escola, $foto){
      $this->nome = $nome;
      $this->escola = $escola;
      $this->foto = $foto;
    }

    public function getDados(){
      return [$this->nome, $this->escola, $this->foto];
    }
  }
?>