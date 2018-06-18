<?php
error_reporting(E_ALL ^ E_NOTICE);

$data = json_decode($_POST['request'], true);
$operation = $data["operation"];
$valueX = $data["values"]["x"];
$valueY = $data["values"]["y"];
$result = 0;
$status = "ERROR";

switch ($operation) {
	case "sum":
		$result = $valueX + $valueY;
		$status = "OK";
		break;
	case "substraction":
		$result = $valueX - $valueY;
		$status = "OK";
		break;
	case "division":
		if($valueY != 0){
			$result = $valueX / $valueY;
			$status = "OK";
		}
		break;
	case "multiplication":
		$result = $valueX * $valueY;
		$status = "OK";
		break;
}

$response = array("result" => $result, "status" => $status);
echo json_encode($response);

?>