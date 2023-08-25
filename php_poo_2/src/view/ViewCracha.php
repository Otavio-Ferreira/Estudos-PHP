<?php
  class ViewCracha{
   
    public function render($nome, $escola, $foto, $turma){
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
          <img src='../../img/".$foto."' class='card-img-top'>
          <div class='card-body'>
            <h5 class='card-title'>A escola ".$escola." declara que o do aluno(a): ".$nome." da turma ".$turma."
          </div>
        </div>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin='anonymous'></script>
      </body>
      </html>";
    }
  }
?>