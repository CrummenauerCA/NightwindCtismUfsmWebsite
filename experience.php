<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="./dist/css/theme.css" type="text/css">
  <link rel="shortcut icon" href="./imagens/icone.ico">
  <title>Nightwind - Experience</title>
</head>

<body>
  <div id="barra-brasil">
    <div id="wrapper-barra-brasil">
      <div class="brasil-flag"><a href="http://brasil.gov.br" class="link-barra">Brasil</a></div><span class="acesso-info"><a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil" class="link-barra" id="barra-brasil-orgao">Serviços</a></span>
      <nav>
        <ul id="lista-barra-brasil" class="list">
          <li><a href="#" id="menu-icon"></a></li>
          <li class="list-item first"><a href="http://www.simplifique.gov.br" class="link-barra">Simplifique!</a></li>
          <li class="list-item"><a href="http://brasil.gov.br/barra#participe" class="link-barra">Participe</a></li>
          <li class="list-item"><a href="http://brasil.gov.br/barra#acesso-informacao" class="link-barra">Acesso à informação</a></li>
          <li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legislação</a></li>
          <li class="list-item last last-item"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a></li>
        </ul>
      </nav><span id="brasil-vlibras"><a class="logo-vlibras" href="#"></a><span class="link-vlibras"><img src="//barra.brasil.gov.br/imagens/vlibras.gif">&nbsp;<br>O conteúdo desse portal pode ser acessível em Libras usando o <a href="http://www.vlibras.gov.br">VLibras</a></span></span>
    </div>
  </div>

  <div id="barra-ufsm">
    <div id="wrapper-barra-ufsm">
      <div class="ufsm-flag"><a href="http://www.ufsm.br" class="link-barra" style="display: list-item;"> </a></div>
      <ul class="list">
        <li class="list-item first"><a href="http://site.ufsm.br/alunos/" class="link-barra">Alunos</a></li>
        <li class="list-item"><a href="http://site.ufsm.br/servidores/" class="link-barra">Servidores</a></li>
        <li class="list-item"><a href="http://site.ufsm.br/servicos/webmail" class="link-barra"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAATCAIAAADu5eFvAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAadEVYdFNvZnR3YXJlAFBhaW50Lk5FVCB2My41LjEwMPRyoQAAASxJREFUOE9j+NCoQl1ESxO3llpbxuYyBLWShFiDm1pz/DLTouDmIEzUiy46XWlUmBHGGNSCpg0Xkg2v3FNm0ZPrwx7cCDcHYSJQBW9I/YJClzXF9sKhtcg6sSLPhPRL1foBiSkQLsIcBAuqtCUpNfZClYFFbB5MBB0BfdqS7X+w3EwxohwuiDAHwULSox9dCAyBgoxwzBCA+LQ31xvoU2RxhDkIFpI0EPGBQsAZLQQgPg1MSoaLwBHCHAQLQxEwBFJSYyAhAPepUkQZhjIQQpiDYGEogiCD6MIzlUb7yrH4FBkhzEGwMBTBETAE5MMRkYAVIcxBsDAUkYQQ5iBYGIpIQghzECwMRSQhhDkIFoYikhDCHAQLQxFJCGEOgoWhiCSEMAfOohaitomNKgCmC1KWZfts9QAAAABJRU5ErkJggg=="> Webmail</a></li>
        <li class="list-item"><a href="http://site.ufsm.br/servicos/moodle" class="link-barra"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAUCAIAAAD+/qGQAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAadEVYdFNvZnR3YXJlAFBhaW50Lk5FVCB2My41LjEwMPRyoQAAAnVJREFUOE9j+NCoQgRSft+gBESv65U/NigBuRgK0BF+c5U/NoLM+tSgsKHY2jchJTk1+lyl/scGxbf1QKPxmY7LXOUPDUpv65Ue16rVZQXIhFcyBLXCkVlM3rwC5/cNiiDnN2J3Ppq5CAduLbEMTExmCWpGNhEZCYXW5qWHX6zSe1Ov9A4jcODmghz4pl75RZ1KZ463amQpmim4UYtjXNaqIruPDQrIzmcAsRoUvzQqHC43ik6O4whuxNBJFJIIq6rIDL5fqwE0Cmggw6dGkKEriuzlI8oFQ2vRVJOE1CNLpuW5AU0DIlA4XKrWYw5qnpLn/q5eCUgCpdE0EEItrvEZ20otgbECDElwUIDDty/XWz2y9H2DClAIKAGU3lhi7RafDtSAYQQK4gppSE2NBkYdMG0AUzdy1IHMnVvgKhte+a4BKgSUnpXv8rxOFZhU01KjgJrRjAMiYMprzfZ9Uqd2pUp3WaEDWmIAIpC5j+o0gZpnFrjBRYHpgTekPjst4nKVLlAz0AjZ8AqIiZaxuUsKHYBZY3uphU9CKmNQS2ZaFFwjHEHT2YQ8L4HQuvu1WhAuPJ0BtXknpG4ttQQatKbY9nC5CTCzzMh304kqgigAInzmAgMBmMIOlJtDuJjpF2gQMEqBKUk0rAZNCp+5bxpUgVlrd5klhEtKvsBr7vxCF7Gw6lf1ahAudcx926BqEF1YlhkKF6WOucBAqMgMuV2jAxe1iM1D04wHNWQHwDXCETQc0BDQDr/EVHZCZYVaZGlHji9Swkcg7OZCEDC4d5VZNmQHpqVFZ6RFZaVF5aZH5KdHFGWELSh0uYXkP0yEz1zyUaMKALcL3Kj+ijs1AAAAAElFTkSuQmCC"> Moodle</a></li>
        <li class="list-item last last-item"><a href="http://nte.ufsm.br/zikazero/" class="link-barra">#ZikaZero</a></li>
      </ul>
    </div>
  </div>

  <nav class="navbar navbar-expand-md bg-white border navbar-light" style="padding: 0px">
    <div class="container">
      <a href="http://www.ctism.ufsm.br/"><img src="./imagens/ctism.png" height="50" style="padding-right: 16px"></a>
      <a class="navbar-brand" href="./index.php">
        <img src="./imagens/icone.ico" alt="Logotipo do grupo de pesquisa Nightwind" width="50">
        <b>Nightwind</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Visualizar projetos</a>
          </li>
          <?php
          if (isset($_SESSION['nome'])) {
            echo '
                  <li class="nav-item">
                    <a class="nav-link" href="./cadastrarProjetos.php">Cadastrar projetos</a>
                  </li>
                ';
            if (($_SESSION['tipo'] == 'Administrador')) {
              echo '
                    <li class="nav-item">
                      <a class="nav-link" href="./administrarUsuarios.php">Administrar usuários</a>
                    </li>
                  ';
            }
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="./sobre.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./experience.php">Experience</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <?php
          if (isset($_SESSION['nome'])) {
            echo '<h6 style="padding-top: 8px;">', '<strong>', $_SESSION['nome'], '&nbsp</h6>';
            echo '<a class="btn btn-secondary" href="./control/controleUsuario.php?opcao=Sair">Sair</a>';
          } else {
            echo '<a class="btn btn-secondary" href="./acessar.php">Acessar minha conta</a>';
          }
          ?>
        </form>
      </div>
    </div>
  </nav>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-primary pt-3">Nightwind Experience - Uma amostra do nosso DNA</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1" style="margin-bottom: 10px">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="text-align: justify;">
          <p class="">
            A Nightwind Experience é mais uma das iniciativas criativas e inovadoras desenvolvidas pela equipe @ctism_nightwind.
          </p>
          <p class="">
            Oficinas, mini-cursos, feira de protótipos, lives com nossos embaixadores na América do Norte e na Europa, e participação em competições internacionais são algumas das amostras de nosso DNA que estarão sendo apresentadas ao longo do mês de outubro de 2019.
          </p>
          <p class="">
            Fique atento ao perfil oficial da Equipe Nightwind do CTISM no Instagram (<a href="https://www.instagram.com/ctism_nightwind/" target="_blank">instagram.com/ctism_nightwind</a>) e saiba mais :)
          </p>

          <h4>IEEE Extreme</h4>
          <p>
            A maratona IEEEXtreme é um desafio global no qual equipes de membros estudantis do IEEE (Institute of Electrical and Electronics Engineers) - orientadas e supervisionadas por um membro da IEEE - competem em um período de 24 horas umas contra as outras para resolver um conjunto de problemas de programação.
          </p>
          <p>
            A maratona IEEExtreme é uma excelente oportunidade para nos conectarmos com uma comunidade global de programadores e conhecer quais habilidades estão sendo trabalhadas mundialmente, para que assim possamos adequar e realinhar nossos estudos e nossos conteúdos programáticos ao que há de mais moderno e atual.
          </p>

          <h4>Oficinas de Arduino</h4>
          <p>Nas oficinas de Arduino da Nightwind Experience, serão utilizadas abordagens inovadoras para o ensino de arduino, como a Nightwind Shield e a Nightwind Card. </p>

          <div class="row">
            <div class="col-md-12 text-center">
              <img style="padding: 2px; max-height: 440px" class="img-fluid" src="./imagens/experience/nwshield3.jpg">
              <img style="padding: 2px; max-height: 440px" class="img-fluid" src="./imagens/experience/nwshield2.png">
            </div>
          </div>

          <h4>Live com nossos embaixadores na Europa e América do Norte.</h4>
          <p>Siga <a href="https://www.youtube.com/channel/UCaeeuoaZYWZ3dwi07yhD2AA/">nosso canal no YouTube</a>. Vamos colocar a live no canal do youtube da equipe.</p>

          <h4>Participação na 34ª Jornada Acadêmica Integrada da UFSM</h4>
          <div class="col-md-12 text-center">
            <img style="max-height: 800px" class="img-fluid" src="./imagens/experience/nw/D.png">
          </div>
          <div class="col-md-12">
            <h4 style="padding-top: 25px" class="text-primary">Conteúdos do Nightwind Experience (inscrições abaixo):</h4>
          </div>
          <div class="row" style="max-height: 80%">
            <div class="col-md-12">
              <div class="carousel slide" data-ride="carousel" id="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/ieee/A.png">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/ieee/B.png">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/ieee/C.png">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/ieee/D.png">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/nw/A.png">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/nw/B.png">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" style="max-height: 540px" src="./imagens/experience/nw/C.png">
                  </div>
                </div>
                <a class="carousel-control-prev bg-dark" href="#carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-dark" href="#carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <p style="padding-top: 10px">
            Para ex-alunos do CTISM: <a href="https://forms.gle/uqPUrfLZ1Fj22vD59" target="_blank">Inscrições e informações sobre Oficina de Arduino da NIGHTWIND EXPERIENCE</a> </br>
            Para alunos da UFSM: <a href="https://forms.gle/LU2qUkSbmqBTFx758" target="_blank">Inscrições e informações sobre os mini-cursos da NIGHTWIND EXPERIENCE</a>
          </p>

          <h4 style="padding-top: 25px" class="text-primary text-center">Feira de Protótipos da Equipe Nightwind, como parte da Feira de Ciências e Cultura do CTISM</h4>

          <div class="row" style="padding-bottom: 20px">
            <div class="col-md-12 text-center">
              <img style="padding: 2px; max-width: 90%" class="img-fluid" src="./imagens/experience/feira.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav style="padding: 0px;" class="navbar bg-white border fixed-bottom">
    &emsp;Plataforma desenvolvida pelo grupo Nightwind - CTISM - Cezar Augusto Crummenauer
  </nav>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./dist/js/barraGov.js"></script>
  <script src="./dist/js/barraUfsm.js"></script>
</body>

</html>