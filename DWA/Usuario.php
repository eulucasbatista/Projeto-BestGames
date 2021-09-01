<?php

require_once 'Crud.php';

class Usuario extends Crud {

	protected $table = 'users';
	private   $name;
	private   $username;
	private   $email;
	private   $password;
	
	public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }

	public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }
	//Procura no DB as informações requeridas
	

	public function insert(){
		$sql = "INSERT INTO $this->table (name, email, username, password) VALUES (:name, :email, :username, :password)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		return $stmt->execute();
	}
	//Provavelmente a mesma coisa da função abaixo

	public function logar(){
		$pdo = parent::getInstance();
		
		$logar = $pdo->prepare("SELECT * FROM $this->table WHERE email = ? AND password = ?");
		$logar->bindValue(1, $this->getEmail());
		$logar->bindValue(2, $this->getPassword());
		$logar->execute();
		if($logar->rowCount() == 1){
			$dados = $logar->fetch(PDO::FETCH_OBJ);
			session_start();
			$_SESSION['logado'] = true;
			$_SESSION['id'] = $dados->id;
			$_SESSION['status'] = $dados->status;
			return true;
		}
		else{
			return false;
		}

	}
	//fazer Login
	public static function logout(){
		if(isset($_SESSION['logado']));
		unset($_SESSION['logado']);
		session_destroy();
	}
	//Fazer Logout
}