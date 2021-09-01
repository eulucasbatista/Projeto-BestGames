<?php
class login extends Conexao{

	private $login;
	private $senha;

	public function setLogin($login){
            $this->login = $login;
     }
     public function setSenha($senha)
              $this->senha = $senha;

	}

	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->senha;
	}

	protected static function logar(){
		$pdo = parent::getDB();

		$logar = $pdo("SELECT 8 FROM administrador WHERE administrador_usuario = ? AND administrador_senha = ?");
	    $logar->bindValue(1, $this->getLogin());
	    $logar->bindValue(2, $this->getSenha());
	    $logar->execute();
	    if($logar->rowCount() == 1):
	    	return true;
	        	else:
            return faslse;
	    		endif;
	}

}
