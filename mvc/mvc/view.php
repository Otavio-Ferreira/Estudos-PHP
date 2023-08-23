<?php
  class View{
    public function render($nome, $escola, $diciplina, $media, $nota1, $nota2, $nota3, $nota4, $situacao){
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
          <img src='https://4.bp.blogspot.com/-JKeafU0T__c/WKn6-UmzY4I/AAAAAAAAJgA/U_4oE3B7eR8Nxl4otSFpXCNXVIlQUPF6QCK4B/s1600/Escola%2Bde%2Beduca%25C3%25A7%25C3%25A3o%2Bprofissional.JPG' class='card-img-top'>
          <div class='card-body'>
            <h5 class='card-title'>A escola ".$escola." declara que o do aluno(a): ".$nome.", na diciplina de ".$diciplina." com media ".$media. ", foi ".$situacao.".</h5>
          </div>
          <ul class='list-group list-group-flush'>
            <li class='list-group-item'>Nota 1: ".$nota1."</li>
            <li class='list-group-item'>Nota 2: ".$nota2."</li>
            <li class='list-group-item'>Nota 3: ".$nota3."</li>
            <li class='list-group-item'>Nota 4: ".$nota4."</li>
          </ul>
        </div>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin='anonymous'></script>
      </body>
      </html>";
    }
  }
?>