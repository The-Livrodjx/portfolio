<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Livrodjx - Web Design</title>

    <script language=javascript type="text/javascript">
      function newPopup(){
      varWindow = window.open (
      'html/explicacao.html',
      'pagina',
      "width=800, height=500, top=500, left=500, scrollbars=no " );
      }

      function newPopup2(){
      varWindow = window.open (
      'html/explicacao2.html',
      'pagina',
      "width=800, height=500, top=500, left=500, scrollbars=no " );
      }

      function newPopup3(){
      varWindow = window.open (
      'html/explicacao3.html',
      'pagina',
      "width=800, height=500, top=500, left=500, scrollbars=no " );
      }

      function newPopup4(){
      varWindow = window.open (
      'html/explicacao4.html',
      'pagina',
      "width=800, height=500, top=500, left=500, scrollbars=no " );
      }
    </script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="images/L.png" />
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" style=" color: rgba(255, 255, 255, 0.842);">Livrodjx</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/" style=" color: rgba(255, 255, 255, 0.842);">Home</a></li>
            <li><a href="/sobre.php" style=" color: rgba(255, 255, 255, 0.842);">Sobre</a></li>
            <li><a href="/contato.php" style=" color: rgba(255, 255, 255, 0.842);">Contato</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->



    <div class="box">
      <section class="banner" id="home">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Bem-vindo</h2>
              <p>Me chamo Lucas Alexandre e sou Web Developer</p>
            </div>
          </div><!--row-->
        </div>
      </section>
    </div>

    <div class="teste">
      <div class="row">
        <div class="col-md-12 text-center">
        <h2>Sobre mim</h2>
        <img class="img-circle" src="images/eu.jpeg" alt="" width="180" height="180">
        <p style="padding-bottom: 20px;">Me chamo Lucas Alexandre, tenho atualmente 18 anos de idade e sou apaixonado por programação desde os 16. Comecei a programar e entender seus conceitos com a linguagem Python, mas após brincar bastante com a linguagem percebi que a minha vocação era realmente a área Web, desde então eu comecei a aprender linguagens base de Web, como por exemplo, HTML e CSS, logo após isso comecei a estudar PHP e assim comecei alguns projetos, mas tive que deixar a programação um pouco de lado e focar no ENEM, após passar na faculdade estou atualmente cursando sup. técnologo em Análise e desenvolvimento de sistemas pela Unip e voltei a fazer projetos mas dessa vez utilizando o framework Bootstrap.</p>
        </div>
      </div>

      <hr style="padding: 10px;">


      <section class="diferenciais text-center" id="sobre">
        <h2>Por que me contratar ?</h2>
        <div class="container diferenciais-container">
          <div class="row">
            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-flash"></span></h3>
              <h2>Diferencial</h2>
              <p>Completo comprometimento com a excelência dos serviços prestados, buscando a satisfação de quem me contrata.</p>
            </div>
            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-star"></span></h3>
              <h2>Meus Serviços :</h2>
              <p>Desenvolvimento Web;<br>
                Programação front-end;<br>
                Programação back-end;<br>
  
              </p>
            </div>
            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-heart"></span></h3>
              <h2>Objetivo</h2>
              <p>Construir e introduzir sites tanto pessoais tanto corporativos, incorporando qualidade e integrando sua empresa ou comércio ao universo web aumentando o alcance de seu produto por meio de divulgação e marketing digital.</p>
            </div>
          </div>
        </div>
      </section>

      <hr>


      <div class="row habilidades">
        <div class="col-md-12 text-center">
          <h2>Habilidades</h2>
        </div>
      </div>

      <div class="row">
          <div class="col-sm-3 col-3" >
            <h2>HTML 5</h2>
            <img src="../images/html5.png" width="150" height="150"><br><br>
            <a href="javascript:newPopup()" style="color: rgb(225,225,255);text-decoration: none;">Saiba mais !</a>
          </div>

          <div class=" col-sm-3 col-3" >
            <h2>CSS 3</h2>
            <img src="../images/css3.png" width="150" height="150"><br><br>
            <a href="javascript:newPopup2()" style="color: rgb(225,225,255);text-decoration: none;">Saiba mais !</a>
          </div>

          <div class="col-sm-3 col-3" >
            <h2>Bootstrap</h2>
            <img src="../images/bootstrap.jpg"  class="img-circle" width="150" height="150"><br><br>
            <a href="javascript:newPopup3()" style="color: rgb(225,225,255);text-decoration: none;">Saiba mais !</a>
          </div>

          <div class=" col-sm-3 col-3" >
            <h2>PHP</h2>
            <img src="../images/php.png" width="150" height="150"><br><br>
            <a href="javascript:newPopup4()" style="color: rgb(225,225,255);text-decoration: none;">Saiba mais !</a>
          </div>
      </div>
    </div>
    

    <section class="final-site" id="contato" style="margin-top:80px;">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h2>Contate-me</h2>
              <form method="POST" action="/email.php">
                <div class="form-group">
                  <label for="nome">Nome :</label>
                  <input type="text" name="nome" class="form-control" id="nome">
                </div>
                <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="nome">Mensagem :</label>
                  <textarea class="form-control" name="mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </section> 
    
    <footer>
      <p>Todos os direitos reservados - Copyright © 2020</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/livro.js"></script>
  </body>
</html>