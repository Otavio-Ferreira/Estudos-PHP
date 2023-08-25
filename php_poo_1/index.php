<?php

  $n = $_POST['nome'];
  $id = $_POST['idade'];
  $n1 = $_POST['nota1'];
  $n2 = $_POST['nota2'];

  class Aluno{
    public $nome;
    public $idade;
    public $nota1;
    public $nota2;

    public function __construct($nome, $idade, $nota1, $nota2){
      $this->nome = $nome;
      $this->idade = $idade;
      $this->nota1 = $nota1;
      $this->nota2 = $nota2;
    }

    public function mostrarDados(){
      if($this->nome == null || $this->idade == null ){
        echo "<script>alert('Preencha os campos!')</script>";
      }
      else{
        for($i = 1; $i <= 10; $i++){
          echo "
            <div style='max-width: 18rem; background:lightpink; border-radius: 10px;'>
              <div class='card-header'>CARD: ".$i."</div>
              <div class='card-body'>
                <h5 class='card-title'>Nome: ".$this->nome."</h5>
                <p class='card-text'>Idade: ".$this->idade."</p>
              </div>
            </div>";
          echo "<br>";
        }
      }
    }

    public function calcularMedia(){
      if($this->nota1 == null || $this->nota2 == null){
        echo "<script>alert('Preencha os campos!')</script>";
      }
      else{
        $media = ($this->nota1 + $this->nota2)/2;
          echo $media;
      }
    }
  }
  $dados = new Aluno($n, $id, $n1, $n2);

?>