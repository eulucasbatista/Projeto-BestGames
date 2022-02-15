<?php

  

    include("topo.php");
    
?>

<!Doctype HTML>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title> Cadastar </title>
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

	<div>

		<?php
        
        if(isset($_POST['cadastrar'])):
            $nome  = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha  = $_POST['senha'];
            $endereco = $_POST['endereco'];
            $cep = $_POST['cep'];
            $telefone  = $_POST['telefone'];
            $cpf  = $_POST['cpf'];
            $cidade  = $_POST['cidade'];
            $estado  = $_POST['estado'];
            $plataforma  = $_POST['plataforma'];

            require_once 'Usuario.php';
            $usuario = new Usuario();

            $usuario->setNome($nome); 
            $usuario->setSobrenome ($sobrenome); 
            $usuario->setEmail($email); 
           $usuario->setSenha($senha);   
           $usuario->setEndereco($endereco); 
           $usuario->setCEP($cep); 
            $usuario->setTelefone($telefone); 
           $usuario->setCPF($cpf); 
           $usuario->setCidade($cidade); 
            $usuario->setEstado($estado); 
           $usuario->setPlataforma($plataforma); 

            # Insert
            if($usuario->insert()){
                echo "Inserido com sucesso!";
            }else{
              echo mysql_error(). "ERROOO";
            }
        endif;
        ?>
         <div class="col-md-9">



<!-- Form Name -->
<legend><h1>Cadastre-se</h1></legend>
		
		<form class="form-horizontal" method="post" action="">
			<div class="form-group">
  <label class="col-md-4 control-label">Nome</label>  
  <div class="col-md-4">
  <input name="nome" type="nome" placeholder="Digite seu nome" class="form-control input-md">
    
  </div>
  </div>

            <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Sobrenome</label>  
  <div class="col-md-4">
  <input  name="sobrenome" type="sobrenome" placeholder="Digite seu Sobrenome" class="form-control input-md">
    
    </div>
    </div>

		<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input  name="email" type="email" placeholder="Digite seu Email" class="form-control input-md">
  </div>
  </div>
    
  <!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="senha" type="password" placeholder="Digite sua Senha" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Endereço</label>  
  <div class="col-md-4">
  <input id="textinput" name="endereco" type="endereco" placeholder="Digite seu Endereço" class="form-control input-md">
  <span class="help-block">Rua, Número, Bairro</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">CEP</label>  
  <div class="col-md-4">
  <input id="textinput" name="cep" type="cep" placeholder="Digite seu CEP" class="form-control input-md">
  <span class="help-block">Apenas Números</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Telefone</label>  
  <div class="col-md-4">
  <input id="textinput" name="telefone" type="telefone" placeholder="Digite seu Telefone" class="form-control input-md">
  <span class="help-block">(11)xxxxx-xxxx</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">CPF</label>  
  <div class="col-md-4">
  <input id="textinput" name="cpf" type="cpf" placeholder="Digite seu CPF" class="form-control input-md">
  <span class="help-block">Apenas Números</span>  
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Cidade</label>  
  <div class="col-md-4">
  <input id="textinput" name="cidade" type="cidade" placeholder="Digite sua Cidade" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Estado</label>  
  <div class="col-md-4">
  <input id="textinput" name="estado" type="estado" placeholder="Digite seu Estado" class="form-control input-md">
  <span class="help-block">São Paulo , Rio de Janeiro etc...</span> 
    
  </div>
</div>

<!-- Select Basico -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Selecione sua Plataforma</label>
  <div class="col-md-5">
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

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Concluir Cadastro</label>
  <div class="col-md-8">
    <button id="button1id" type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success">Cadastrar</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
  </div>
</div>


</fieldset>
</form>
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