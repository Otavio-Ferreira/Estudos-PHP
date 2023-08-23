<?php
  class Modal{
    public $nome;
    public $escola;
    public $diciplina;
    public $nota1;
    public $nota2;
    public $nota3;
    public $nota4;
    public $media;
    public $situacao;

    public function __construct($n, $e, $d, $n1, $n2, $n3, $n4){
      $this->nome = $n;
      $this->escola = $e;
      $this->diciplina = $d;
      $this->nota1 = $n1;
      $this->nota2 = $n2;
      $this->nota3 = $n3;
      $this->nota4 = $n4;
      $this->media = ($n1 + $n2 + $n3 + $n4)/4;

      if($this->media > 5){
        $this->situacao = 'Aprovado';
      }
      else{
        $this->situacao = 'Reprovado';
      }
    }

    public function mostrarBoletim(){
        return [$this->nome, $this->escola, $this->diciplina, $this->media, $this->nota1,$this->nota2, $this->nota3, $this->nota4, $this->situacao];
    }
  }
?>