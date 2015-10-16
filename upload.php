<?php
    $order = $_POST['odrer'];
	$response = array();
    $response['success'] = "Successfully Submitted Order";
    $response['data'] = $order;
    exit(json_encode($response));

?>

