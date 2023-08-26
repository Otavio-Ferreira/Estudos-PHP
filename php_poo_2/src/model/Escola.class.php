<?php
  abstract class Escola{
    public $nome;
    public $escola;
    public $foto;
    public $cargo;

    public function __construct($nome, $escola, $foto, $cargo){
      $this->nome = $nome;
      $this->escola = $escola;
      $this->foto = $foto;
      $this->cargo = $cargo;
    }

    public function getDados(){
      return [$this->nome, $this->escola, $this->foto, $this->gargo];
    }
  }
?>