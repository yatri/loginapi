<?php
	$response = array();
    if(strtolower($_SERVER['REQUEST_METHOD']) =="post"){
		$jsondata = $_POST['comment_list'];
        $jsondata = json_decode($jsondata);
        print_r($jsondata->table_data);
        foreach ($jsondata->table_data as  $value) {
           $sql = "INSERT INTO user(tole,full_name,district,vdc,ward_no,,comment,user_id)values(";
               print_r($value->tole);
            $sql.=")";
        }
        exit;
    }else{
    		$response['success']=0;
    		$response['msg']="Invalid Request method";
    		$response['seskey']='';
    }
    exit(json_encode($response));

?>

