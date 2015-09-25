<?php
	$response = array();
    if(strtolower($_SERVER['REQUEST_METHOD']) =="post"){
		$username = $_POST['name'];
		$password = $_POST['password'];
    	$hashpass = md5($password);
    	$sql = "SELECT * FROM user WHERE user_name = '$username' and password = '$hashpass'";
    	$res = $conn->select_query($sql);
    	if(count($res)>0){
    		$response['success']=1;
    		$response['msg']="Login Success";
    		$response['seskey']=md5($res['user_id']);
    		$response['userdata'] = array(
    										'first_Name'=>$res['first_name'],
    										'last_Name'=>$res['last_name'],
    										'email'=>$res['email'],
    										'user_name'=>$res['user_name']
    									);
    	}else{
    		$response['success']=0;
    		$response['msg']="Login Failed";
    		$response['seskey']=$username.' '.$password; 
    	}
    }else{
    		$response['success']=0;
    		$response['msg']="Invalid Request method";
    		$response['seskey']='';
    }
    exit(json_encode($response));

?>

