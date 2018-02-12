<?php

include 'resources/QueryBuilder.php';
include 'resources/RepositoryInterface.php';

class ActivityRepository implements RepositoryInterface{

	protected $queryBuilder;

	public function __construct(){
		$this->queryBuilder = new QueryBuilder();

	}

	public function all(){
		return $this->queryBuilder->query("SELECT * FROM ACTIVITIES",$params = "");

	}

	public function getById($params){
		return $this->queryBuilder->query("SELECT * FROM ACTIVITIES WHERE HOTELID=?",$params);
	}

	

}