<?php
		
	require_once 'config.php';
	
	class DB extends PDO {
	
	
		//SINGLETON é um padrão de projeto
		//são 22 ao total
		//PARA SABER SOBRE PADRÕES DE PROJETO... "Design patterns"
			
		//método para retornar essa propriedade
	
	
		//SE EU QUERO QUE SEMPRE SEJA RETORNADA A MESMA INSTÂNCIA...
	
		private static $instance;
	
		//método construtor
		public function __construct(){
			self::getInstance();
		}
	
		public function getInstance(){
			if(!isset(self::$instance)){
				try{
					self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				} catch (PDOException $e){
					// é uma instÂncia do PDOException, tenho acesso aos métodos do PDOException. ->getMessage();
					die($e->getMessage());
				}
			}
			return self::$instance;
		}
	
		public function prepare($sql){
			return self::getInstance()->prepare($sql);
		}
	
		//UMA INSTÂNCIA?
		//um classe instanciada vira um objeto
		//cada objeto em memória é uma instância
	
	}
	

?>