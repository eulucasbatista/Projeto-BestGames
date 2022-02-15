<?php

  

    include("topo.php");
    
?>

<!Doctype HTML>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title> BESTGAMES </title>
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

<?php         require_once('cadastrar_game.php');             
         $findArt = new CadastrarGame;       //instanciando a classe para buscar os dados na tabela content

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
    }
     ?>
    
               

    <!-- Main Content -->
    <div class="container-fluid" style="margin-top: -45px;">
        <div class="row" style="background-color:">
            <div class="col-lg-8 col-md-8" style="height:100vh;padding:0px;">
           
          <div class="form-horizontal" role="form"">
                  <legend><h1>Lista dos Jogos para Troca</h1></legend>
        <!-- Left Menu -->
    <?php   //buscando o titulo do arquivo para inserir no menu e criando link conforme o id do artigo
          foreach($findArt->selectAll() as $key => $dados):       ?>       
         
                <br>
                <div class="list-group">
                <p><a class="list-group-item">ID: <?php echo $dados['id_cadastrar_game'] ?><p></a>
                <p><a class="list-group-item">Nome do Jogo: <?php echo $dados['nome_do_jogo'] ?></p></a>
                <p><a class="list-group-item">Gênero: <?php echo $dados['genero'] ?></p></a>
                <p><a class="list-group-item">Estado: <?php echo $dados['estado'] ?></p></a>
                <p><a class="list-group-item">Ano de Lançamento: <?php echo $dados['ano_de_lancamento'] ?></p></a>
                <p><a class="list-group-item">Plataforma: <?php echo $dados['plataforma'] ?></p></a>
            </div>
    <?php endforeach;                                          ?>


            </div>
        
            <div class="col-lg-10 col-md-10" style="background-color:;">
                
        <?php       //pegando nome do artigo 8 no caso
            foreach($findArt->getArticle() as $dados):
                    echo "<b>" . $dados['id_cadastrar_game'] . "</b>";
                    echo "<b>" . $dados['name'] . "</b>";        
                    echo "<br> <hr>";
                    echo "<h3><center>" . $dados['title'] . "</center></h3>";
                    echo "<hr class='small'>";
                    echo "<p class='text-justify'>" . $dados['content'] ." <br><br><br><br>";
                if($findArt->Power()){
                    ?> <br><br><br> 
                    <a href="index.php.php?del=<?php echo $value['id']; ?>"><button type="submit" name="deletar">Deletar</button></a>
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

</body>

</html>


