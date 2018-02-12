<?php

include 'config/Connection.php';

class QueryBuilder{
	protected $connection;

	public function __construct(){
		$this->connection = Connection::getConnection();
	}

	public function query($query,$params){
		try{
			$statement = $this->connection->prepare($query);
			$statement->execute(array($params));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}catch(Exception $ex){
			die($ex->getMessage());
		}
	}
}


