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
    <link rel="stylesheet" href="css/sobre.css">
    
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



    <div class="box text-center">
      <section class="banner" id="home">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">
            <div class="col-md-12">
              <h2>Quer saber quem eu sou ?</h2>
              <p>Descubra aqui quem sou eu, o que estudo e os meus projetos.    </p>
            </div>
          </div><!--row-->
        </div>
      </section>
    </div>
  
    <div class="projetos">
    <div class="row">
        <div class="col-md-12 text-center">
          <h2 id="projetoskk">Projetos</h2>
        </div>
      </div>

      <div class="row text-center">
          <div class="col-md-4" >
            <h3>Projeto Flexliper</h3>
            <img src="../images/projeto.png" class="img-thumbnail"><br><br>
            <a href="http://www.flexliper.com.br" style="color: rgb(225,225,255);text-decoration: none;">Conhecer !</a>
          </div>

          <div class="col-md-4 " >
            <h3>To Do List</h3>
            <img src="../images/toDoo.png" class="img-thumbnail"><br><br>
            <a href="https://github.com/The-Livrodjx/toDo" style="color: rgb(225,225,255);text-decoration: none;">Conhecer !</a>
          </div>

          <div class=" col-md-4 " >
          <h3>Portfólio</h3>
            <img src="../images/portfolioo.png" class="img-thumbnail"><br><br>
            <a href="/" style="color: rgb(225,225,255);text-decoration: none;">Conhecer !</a>
          </div>
      </div>
      </div>
    </div>
    <hr>
  

      <div class="container costumizar" style="padding-bottom: 50px;">
        <h1 class="text-center" style="padding-bottom: 50px;">Habilidades</h1>
        <div class="bar back basic aa" data-skill="PHP"></div>
        <div class="bar back intermediate ab" data-skill="Bootstrap"></div>
        <div class="bar front advanced ac" data-skill="CSS3"></div>
        <div class="bar front expert 4 ad" data-skill="HTML5"></div>
      </div>
   

    <hr>
    
    <div class="blibli">
    <div class="row">
        <div class="col-md-12 text-center">
          <h2 id="projetoskk">Blibiografia</h2>
        </div>
      </div>

      <div class="row text-center">

          <div class="col-md-6 hist" >
            <h3>Minha história como programador</h3>
            <p>Olá, me chamo Lucas Alexandre </p>
          </div>

          <div class=" col-md-6" >
          <h3>Sobre meu curso</h3>
            <img src="../images/portfolioo.png" class="img-thumbnail"><br><br>
            <a href="/" style="color: rgb(225,225,255);text-decoration: none;">Conhecer !</a>
          </div>
      </div>
      </div>
    </div>

    <footer>
      <p>Todos os direitos reservados - Copyright © 2020</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>