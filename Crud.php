<?php 

//CRUD
//CREATE
//READ
//UPDATE
//DELETE

require_once 'DB.php';

abstract class Crud extends DB {

		private function criptografar($senha){
		return md5;
	}
	//Criptografia da senha
	private function existeNome($nome){
		$selecionar = self::instance()->prepare("SELECT * FROM 'usuarios' WHERE nome = $nome");
		$selecionar->execute();
		if($selecionar->rowCount() >=1){
			return true;
		}else{
			return false;
		}
	}
	//Procura no BD se já existe um usuario com esse nome
	private function existeEmail($email){
		$selecionar = self::instance()->prepare("SELECT * FROM 'usuarios' WHERE email = $email");
		$selecionar->execute();
		if($selecionar->rowCount() >=1){
			return true;
		}else{
			return false;
		}
	}
	//Procura no BD se já existe um usuario com esse email
	public function cadastrar($dados = array()){
		
		if($this->existeNome($dados[0]) && $this->existeEmail($dados[1])){
			return false;
		}
		
		else{
		$dados[3] = $this->criptografar($dados[3]);
		$sqlInserir = "INSERT INTO 'usuarios' (nome, sobrenome, email, senha, CC) VALUES (?, ?, ?, ?, ?)";
		$stmt = self::instance()->prepare($sqlInserir);
		if($stmt->execute($dados)){
			return true;
		}
		else{
			return false;
		}
	}


	
	}


	protected $table;

	abstract public function insert();

}
