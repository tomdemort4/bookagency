<?php
include 'resources/Request.php';
include 'repositories/HotelRepository.php';

$request = new Request();
$hotelRepository = new HotelRepository();




if ($request->isGet()) {
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$result = $hotelRepository->getById($id);
		echo json_encode($result);
	}else{
		$result = $hotelRepository->all();
		echo json_encode($result);
	}
}
