 <?php
 session_start();
if(isset($_GET['action'])){

  if($_GET['action'] == "logout"){
    require_once'Usuario.php';
  $out = new Usuario();
  if($out->logout() == true){
      header('location:index.php?unlog');
  }

} }

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
                        <a href="vendas.php">Vendas</a>
                    </li>
                    <li>
                        <a href="trocas.php">Trocas</a>
                    </li>
                    <li> 
                        <a href="contato.php">Contato</a>
                    </li>
              </ul>
            
             <ul class="nav navbar-nav navbar-right">
             <?php
  
             if(isset($_SESSION['logado'])){?> 


      <li><a href="index.php?action=logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      
       <li> 
         <a href="cadastrar_jogo.php"><span class="glyphicon glyphicon-plus"></span>Cadastrar Jogo</a>
      </li>

      <?php } else{ ?>
        
      <li><a href="entrar.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
      <li> 
         <a href="cadastrar.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
      </li>
      <?php } ?>
      
              </ul>

     </div>




            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
