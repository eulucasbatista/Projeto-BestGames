<?php

require_once 'Crud.php';
require_once 'config.php';

class CadastrarGame extends Crud {

	protected $table = 'cadastrar_game';
	private   $nome_do_jogo;
	private   $genero;
	private   $estado;
	private   $ano_de_lancamento;
	private   $plataforma;
	
	
    public function setNome_do_jogo($nome_do_jogo){
        $this->nome_do_jogo = $nome_do_jogo;
    }

    public function getNome_do_Jogo(){
        return $this->nome_do_jogo;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

     public function setAno_de_lancamento($ano_de_lancamento){
        $this->ano_de_lancamento = $ano_de_lancamento;
    }
	public function getAno_de_lancamento(){
        return $this->ano_de_lancamento;
    }
    public function setPlataforma($plataforma){
        $this->plataforma = $plataforma;
    }
	
    public function getplataforma(){
        return $this->plataforma;
    }
    

	public function insert(){
		$sql = "INSERT INTO $this->table (nome_do_jogo, genero, estado, ano_de_lancamento, plataforma ) VALUES (:nome_do_jogo, :genero, :estado, :ano_de_lancamento, :plataforma )";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_do_jogo', $this->nome_do_jogo);
		$stmt->bindParam(':genero', $this->genero);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':ano_de_lancamento', $this->ano_de_lancamento);
		$stmt->bindParam(':plataforma', $this->plataforma);
        return $stmt->execute();
	}
 public function select(){
        $id = "id";
        $sql = "SELECT * FROM $this->table WHERE $id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getArticle(){
        $id = "id";
        $sql = "SELECT * FROM $this->table WHERE $id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function selectAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }



}