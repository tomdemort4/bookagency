<?php

class Request{
	
	/**
	 * POST request
	 * @return boolean
	 */

	public function isPost(){	
		return ($_SERVER['REQUEST_METHOD'] == 'POST');
	}

	/**
	 * GET request
	 * @return boolean
	 */

	public function isGet(){
		return ($_SERVER['REQUEST_METHOD'] == 'GET');
	}

}