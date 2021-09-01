<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BestGames</title>

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
         <?php                         session_start();
         require_once('publicar.php');             
         $findArt = new publicar;       //instanciando a classe para buscar os dados na tabela content

    if(isset($_GET['del'])){
        if(is_numeric($_GET['del'])){
            $id = $_GET['del'];
            $findArt->setId($id);
            $findArt->delete();
        }

    }

    if(isset($_GET['id'])){         //pega id da url
        $id = addslashes($_GET['id']);
        $findArt->setId($id);
    }else{
        $id = 1; //artigo de boas vindas
        $findArt->setId($id);
        }
     ?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><img class="imagem" height="60" src= "logo/BestGames3.png"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Vendas</a>
                    </li>
                    <li>
                        <a href="trocas.php">Trocas</a>
                    </li>
                    <li> 
                        <a href="conta">Contato</a>
                    </li>
              </ul>
            
             <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
      <li> 
         <a href="cadastrar.php">Cadastrar</a>
      </li>
              </ul>

     </div>




            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Consoles</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">PS3</a>
                    <a href="#" class="list-group-item">PS4</a>
                    <a href="#" class="list-group-item">Xbox 360</a>
                    <a href="#" class="list-group-item">Xbox One</a>
                    <a href="#" class="list-group-item">Wii</a>
                    <a href="#" class="list-group-item">Wii U</a>
                    <a href="#" class="list-group-item">PS Vita</a>
                    <a href="#" class="list-group-item">3Ds</a>
                    <a href="#" class="list-group-item">Dicas</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="http://www.google.com"><img class="slide-image" src="img/home1.png" alt="Consoles" ></a>
                                </div>
                                <div class="item">
                                    <a href="http://www.google.com"><img class="slide-image" src="img/2.fw.png" alt="Trocas" href="troca.php"></a>
                                </div>
                                <div class="item">
                                    <a href="http://www.google.com"><img class="slide-image" src="img/3.fw.png" alt="" href="compra.php"></a>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row"> 
                   <br>
                   </br>
                   <br>
                   </br>>

                   
                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/fifa16.jpg" alt="Fifa 16">
                            <div class="caption">
                                <h4 class="pull-right">R$ 129.90</h4>
                                <h4><a href="#">Fifa 16 - PS4</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Comprar</a></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/forza.jpg" alt="Forza Horizon">
                            <div class="caption">
                                <h4 class="pull-right">R$ 84.90</h4>
                                <h4><a href="#">Forza Horizon - Xbox One</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a target="_blank" href="http://www.bootsnipp.com">Comprar</a></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/thelastofus.jpg" alt="The Last of Us">
                            <div class="caption">
                                <h4 class="pull-right">R$ 54.90</h4>
                                <h4><a href="#">The Last Of Us - PS3</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a target="_blank" href="http://www.bootsnipp.com">Comprar</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/farcry3.jpg" alt="Far Cry 3">
                            <div class="caption">
                                <h4 class="pull-right">R$ 64.90</h4>
                                <h4><a href="#">Far Cry 3 - Xbox 360</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a target="_blank" href="http://www.bootsnipp.com">Comprar</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/thewitcher3.jpg" alt="The Witcher 3 Wild Hunt">
                            <div class="caption">
                                <h4 class="pull-right">R$ 94.99</h4>
                                <h4><a href="#">The Witcher 3 Wild Hunt - PC</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <a target="_blank" href="http://www.bootsnipp.com">Comprar</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/supermariobros.u.jpg" alt="Novo Super Mario Bros U">
                            <div class="caption">
                                <h4><a href="#">Super Mario Bros - Nintendo Wii U</a>
                                
                                <h4 class="pull-right">R$ 94.90</h4>
                                </h4>

                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a target="_blank" href="http://www.bootsnipp.com">Comprar</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container rodape">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Nosso Website 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
