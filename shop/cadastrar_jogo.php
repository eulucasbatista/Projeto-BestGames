<?php

include("topo.php");
?>
<!Doctype HTML>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
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
       <div>

       <?php
        
        if(isset($_POST['cadastrar'])):
            $nome_do_jogo  = $_POST['nome_do_jogo'];
            $genero = $_POST['genero'];
            $estado = $_POST['estado'];
            $ano_de_lancamento  = $_POST['ano_de_lancamento'];
            $plataforma = $_POST['plataforma'];
            

            require_once 'cadastrar_game.php';
            $cadastrar_game = new CadastrarGame();

            $cadastrar_game->setNome_do_jogo($nome_do_jogo); 
            $cadastrar_game->setGenero ($genero); 
            $cadastrar_game->setEstado($estado); 
            $cadastrar_game->setAno_de_lancamento($ano_de_lancamento);   
            $cadastrar_game->setPlataforma($plataforma); 
            

            # Insert
            if($cadastrar_game->insert()){
                echo "Inserido com sucesso!";
            }else{
              echo mysql_error(). "ERROOO";
            }
        endif;
        ?>
        <div class="col-md-9">
 <legend><h1>Cadastre seu Jogo</h1></legend>

<form class="form-horizontal" role="form" method="post" action="">
    
    </div>
    <div class="form-group">
      <label class="col-md-5 control-label" for="nome">Nome do Jogo</label>
      <div class="col-sm-5">
        <input type="nome_do_jogo" name="nome_do_jogo" class="form-control" id="nome_do_jogo" placeholder="Digite o Nome do Jogo">
      </div>
    </div>

     <div class="form-group">
      <label class="col-md-5 control-label" for="genero">Gênero</label>
      <div class="col-sm-5">
        <input type="genero" name="genero" class="form-control" id="genero" placeholder="Digite o Gênero do Jogo">
        <span class="help-block">Acão, Guerra, RPG...</span> 
      
      </div>
    </div>

       <div class="form-group">
      <label class="col-md-5 control-label" for="estado">Estado</label>
      <div class="col-sm-5">
        <input type="estado" name="estado" class="form-control" id="estado" placeholder="Digite o Estado do Jogo">
       <span class="help-block">Novo, Semi-novo, Usado</span> 
      </div>

    </div>

    <div class="form-group">
      <label class="col-md-5 control-label" for="estado">Ano de Lançamento</label>
      <div class="col-sm-5">
        <input type="ano_de_lancamento" name="ano_de_lancamento"class="form-control" id="ano_de_lancamento" placeholder="Digite o Ano de Lançamento do Jogo">
      </div>
    <br></br>
    <br></br>
    <br></br>
     <!-- Select Basico -->
<div class="form-group">
  <label class="col-md-5 control-label" for="selectbasic">Selecione sua Plataforma</label>
  <div class="col-sm-5">
    <select id="selectbasic" name="plataforma" type="plataforma" class="form-control">
      <option value="Plataformas">Plataformas</option>
      <option value="PS3">PS3</option>
      <option value="PS4">PS4</option>
      <option value="XBOX 360">XBOX 360</option>
      <option value="Wii">Wii</option>
      <option value="Wii U">Wii U</option>
      <option value="PS VITA">PS VITA</option>
      <option value="3Ds">3Ds</option>
    </select>
  </div>
</div>
<br></br>
<br></br>


    </div>
<br></br>
<br></br>
<!-- Button (Double) -->
<div class="form-group">
<br>
  <label class="col-md-5 control-label" for="button1id"></label>
  <div class="col-md-3">
  <br>
    <button id="button1id" type="cadastrar" name="cadastrar" value="Cadastrar" class="btn btn-success">Cadastrar</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
  </div>
</div>
  <hr />
  
</div>
</div>


</body>


    <div>
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

    <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 </div>
 </html>