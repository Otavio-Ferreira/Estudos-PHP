<?php
  class ViewCracha{

    private $nome;
    private $escola;
    private $foto;
    private $cargo;
    private $cor;
    private $turma;
    private $diciplina;
    

    public function __construct($nome, $escola, $foto, $cargo, $cor){
      $this->nome = $nome;
      $this->escola = $escola;
      $this->foto = $foto;
      $this->cargo = $cargo;
      $this->cor = $cor;
    }

    public function setTurma($turmaAluno){
      $this->turma = $turmaAluno;
    }

    public function setDiciplina($diciplinaProf){
      $this->diciplina = $diciplinaProf;
    }
   
    public function getCracha(){
      echo "
      <!DOCTYPE html>
      <html lang='pt-br'>
      <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Boletim</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
      </head>
      <body>
        <div class='card d-block m-auto mt-3' style='width: 18rem;'>
          <img src='../../img/".$this->foto."' class='card-img-top'>
          <div class='card-body' style='background-color: ".$this->cor.";'>
            <h5 class='card-title'>Escola: ".$this->escola."</h5>
            <h5 class='card-title'>Nome: ".$this->nome."</h5>
            <h5 class='card-title'>Cargo: ".$this->cargo."</h5>
            
            <h5 class='card-title'>Turma: ".$this->turma."</h5>
            <h5 class='card-title'>Diciplina: ".$this->diciplina."</h5>
          </div>
        </div>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin='anonymous'></script>
      </body>
      </html>";
    }
  }
?>