<?php

include 'resources/QueryBuilder.php';
include 'resources/RepositoryInterface.php';

class InstallationRepository implements RepositoryInterface{

	protected $queryBuilder;

	public function __construct(){
		$this->queryBuilder = new QueryBuilder();

	}

	public function all(){
		return $this->queryBuilder->query("SELECT * FROM INSTALLATIONS",$params);
	}

	public function getById($params){
		return $this->queryBuilder->query("SELECT * FROM INSTALLATIONS WHERE ID = ?",$params);
	}




	
}