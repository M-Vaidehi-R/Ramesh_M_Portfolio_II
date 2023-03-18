<?php

require_once("../includes/config.php");

class portfolio_Database{

    protected $connection;
	protected $table = "portfolio";
	public $rows;
	protected $fields = array();


    public function __construct() {
		$dsn = "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4";
		try {
		  $this->connection = new PDO($dsn, DB_USER, DB_PASS);
		} catch (Exception $e) {
		  error_log($e->getMessage());
		  exit('unable to connect');
		}
	}

	public function getAll($category='') {

		if($category){
		$stmt = $this->connection->prepare("SELECT * FROM ".$this->table." WHERE category = :category");
		$stmt->bindParam(':category', $category, PDO::PARAM_STR);
		}
		else {
			$stmt = $this->connection->prepare("SELECT * FROM ".$this->table);
		}
		$stmt->execute();
		$this->rows = $stmt->rowCount();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		if(!$arr) exit('No results returned.');
		return $arr;
		$stmt = null;
	}
	
	public function getOne($id) {
		$stmt = $this->connection->prepare("SELECT * FROM ".$this->table." WHERE id = ?");
		$stmt->execute([$id]);
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		if(!$arr) exit('No results returned.');
		return $arr;
		$stmt = null;
	}

}