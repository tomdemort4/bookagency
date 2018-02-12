<?php

/*
------------------------------------------------------------------------------------------------
BOOT
------------------------------------------------------------------------------------------------

*/
include 'resources/Request.php';
include 'repositories/ActivityRepository.php';


/*
------------------------------------------------------------------------------------------------
INSTANCES
------------------------------------------------------------------------------------------------

*/

$request = new Request();
$activityRepository = new ActivityRepository();

/*
------------------------------------------------------------------------------------------------
API
------------------------------------------------------------------------------------------------

*/


if ($request->isGet()) {
	if(isset($_GET['hotelid'])){
		$hotelId = intval($_GET['hotelid']);
		$result = $activityRepository->getById($hotelId);
		echo json_encode($result);
	}else{
		$result = $activityRepository->all();
		echo json_encode($result);
	}
}
