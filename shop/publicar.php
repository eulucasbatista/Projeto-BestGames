<?php

require_once 'Crud.php';
require_once 'config.php';

class Publicar extends Crud {

	protected $table = 'content';
	private   $name;
	private   $date;
	private   $content;
    private   $title;
    private   $id;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
            return $this->id;
    }
	
	public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function getContent(){
        return $this->content;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }


    public function insert(){
		$sql = "INSERT INTO $this->table (name, data, content, title) VALUES (:name, :data, :content, :title)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':title', $this->title);
		return $stmt->execute();
	}

    public function plus(){
        $id = "id";
        $sql = "UPDATE `users` SET `status`= status+1 WHERE $id = $this->id";
        $stmt = DB::prepare($sql);
        return $stmt->execute();
    }

    public function power(){
        if(isset($_SESSION['status'])){
         if($_SESSION['status'] >= 5){
            return true;
        }else{
            return false;
        }}else{
        die();
    }}

    public function select(){
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

    public function getArticle(){
        $id = "id";
        $sql = "SELECT * FROM $this->table WHERE $id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete(){
        $id = "id";
        $sql = "DELETE FROM $this->table WHERE $id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update(){
        $id = "id";
        $sql = "UPDATE `content` SET `content`= $this->content WHERE $id = $this->id";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}