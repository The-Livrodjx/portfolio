<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Livrodjx - Web Design</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="icon" type="imagem/png" href="images/L.png" />
    <!--<link rel="stylesheet" href="css/style.css">-->
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
              <h2>Tem alguma dúvida sobre meus serviços ?</h2>
              <p>Entre em contato pelo formulário abaixo, responderei brevemente.</p>
            </div>
          </div><!--row-->
        </div>
      </section>
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
  </body>
</html>