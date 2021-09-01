<?php

require_once 'Crud.php';

class Usuario extends Crud {

	protected $table = 'usuarios';
	private   $nome;
	private   $sobrenome;
	private   $email;
	private   $senha;
	private   $endereco;
	private   $cep;
	private   $telefone;
	private   $cpf;
	private   $cidade;
	private   $estado;
	private   $plataforma;
	
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

     public function setSenha($senha){
        $this->senha = $senha;
    }
	public function getSenha(){
        return $this->senha;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
	public function getEndereco(){
        return $this->endereco;
    }
     public function setCEP($cep){
        $this->cep = $cep;
    }
	public function getCEP(){
        return $this->cep;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
	public function getTelefone(){
        return $this->telefone;
    }
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
	public function getCPF(){
        return $this->cpf;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
	public function getCidade(){
        return $this->cidade;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
	public function getEstado(){
        return $this->estado;
    }
    public function setPlataforma($plataforma){
        $this->plataforma = $plataforma;
    }
	public function getPlataforma(){
        return $this->plataforma;
    }

	public function insert(){
		$sql = "INSERT INTO $this->table (nome, sobrenome, email, senha, endereco, cep, telefone, cpf, cidade, estado, plataforma ) VALUES (:nome, :sobrenome, :email, :senha, :endereco, :cep, :telefone, :cpf, :cidade, :estado, :plataforma)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':plataforma', $this->plataforma);
        return $stmt->execute();
	}

    public function logar(){
        $pdo = parent::getInstance();
        
        $logar = $pdo->prepare("SELECT * FROM $this->table WHERE email = ? AND senha = ?");
        $logar->bindValue(1, $this->getEmail());
        $logar->bindValue(2, $this->getSenha());
        $logar->execute();
        if($logar->rowCount() == 1){
            $dados = $logar->fetch(PDO::FETCH_OBJ);
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $dados->id;
            return true;
        }
        else{
            return false;
        }

        }


    public static function logout(){
        if(isset($_SESSION['logado'])){
        unset($_SESSION['logado']);
        session_destroy();   }
        
        if(!isset($_SESSION['logado'])){
            return true;
        }else{
            return false;
        }
    }
    //Fazer Logout

}
