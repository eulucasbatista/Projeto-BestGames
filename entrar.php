<?php

  

    include("topo.php");
    
?>

<!Doctype HTML>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title> PHP ORIENTADO À OBJETOS </title>
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/bestgames.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Consoles</p>
                <div class="list-group">
                    <a href="../plataformas/ps3.html" class="list-group-item">PS3</a>
                    <a href="../plataformas/ps4.html" class="list-group-item">PS4</a>
                    <a href="../plataformas/xbox360.html" class="list-group-item">Xbox 360</a>
                    <a href="../plataformas/xboxone.html" class="list-group-item">Xbox One</a>
                    <a href="../plataformas/wii.html" class="list-group-item">Wii</a>
                    <a href="../plataformas/wiiu.html" class="list-group-item">Wii U</a>
                    <a href="../plataformas/psvita.html" class="list-group-item">PS Vita</a>
                    <a href="../plataformas/3ds.html" class="list-group-item">3Ds</a>
                    <a href="" class="list-group-item">Dicas</a>
                </div>
            </div>
</body>


<body>
  <fieldset>
    <legend><h1>Login</h1></legend>
    <form class="form-horizontal" method="post" action="login.php">
      <div class="form-group">
      
          <label class="col-md-4 control-label" for="email">E-mail</label>
          <div class="col-md-4">
          <input type="text" class="form-control" value="" id="email" name="email" placeholder="Infome o E-mail">
      </div>
      </div>


          <div class="form-group">
          <label class="col-md-4 control-label" for="senha">Senha</label>
          <div class="col-md-4">
          <input type="password" class="form-control" value="" id="senha" name="senha" placeholder="Infome a Senha">
      </div>
      </div>
     
     <div class="form-group">
  <label class="col-md-10 control-label" </label>
      <div class="col-md-8">
         <button type="submit" name="entrar" class="btn btn-success" id='botao'> 
         Entrar   
         </button>  
         </div>
         </div>

    </form>
  </fieldset>
</body>
<br>
<br>
<br>
<br>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#vendas.php">Vendas</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="trocas.php">Trocas</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="contato.php">Contato</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Nosso Website 2016. Todos os Direitos Reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>