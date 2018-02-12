<?php

include 'resources/QueryBuilder.php';
include 'resources/RepositoryInterface.php';

class HotelRepository implements RepositoryInterface {
	protected $queryBuilder;

	public function __construct(){
		$this->queryBuilder = new QueryBuilder();

	}

	public function all(){
		return $this->queryBuilder->query("SELECT * FROM HOTELS",$params = "");

	}

	public function getById($params){
		return $this->queryBuilder->query("SELECT * FROM HOTELS WHERE ID=?",$params);
	}

	public function getByNameAndId($params){
		return $params;

	}


}