<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - About</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body><?php                         session_start();
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
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Artigos</a>
                    </li>
                    <li>
                        <a href="../cadastro.html">Cadastros</a>
                    </li>
                    <li>
                        <a href="../login.php">Login</a>
                    </li>
                    <li>
                        <a href="escreva.php">Escreva Aqui</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h4>The best</h4>
                        <h1>Articles</h1>
                        <hr class="small">
                        <span class="subheading">I know you wanna type ;)</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    
               

    <!-- Main Content -->
    <div class="container-fluid" style="margin-top: -45px;">
        <div class="row" style="background-color:">
            <div class="col-lg-2 col-md-2" style="background-color:gray;height:100vh;padding:0px;">



    <!-- Left Menu -->
    <?php   //buscando o titulo do arquivo para inserir no menu e criando link conforme o id do artigo
          foreach($findArt->selectAll() as $key => $value):       ?>       
            <div class="menu">
                <a href="artigos.php?id=<?php echo $value['id'] ?>"><?php echo "<span style='color: white'>".$value['title']."</span>" ?></a>
            </div>
    <?php endforeach;                                          ?>


            </div>
        
            <div class="col-lg-10 col-md-10" style="background-color:;">
                Por:
        <?php       //pegando nome do artigo 8 no caso
            foreach($findArt->getArticle() as $value):
                    echo "<b>" . $value['name'] . "</b>";        
                    echo "<br> <hr>";
                    echo "<h3><center>" . $value['title'] . "</center></h3>";
                    echo "<hr class='small'>";
                    echo "<p class='text-justify'>" . $value['content'] ." <br><br><br><br>";
                if($findArt->Power()){
                    ?> <br><br><br> 
                    <a href="artigos.php?del=<?php echo $value['id']; ?>"><button type="submit" name="delete">Deletar</button></a>
                    <p class="small"> Você é corretor de Conteúdo. Take Care! <br><br></p>
                    <?php }else{
                        echo "<p class='small'> Sabia que quando você publica mais de 5 artigos pode excluir outros ;] ? </p>";
                        echo "No momento você tem " . $_SESSION['status'] ." artigos publicados.*";
                        echo "<p class='small'>Desde o último login. Favor relogar para atualizar.</p>";
                    }
            endforeach;                                                      ?>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>


