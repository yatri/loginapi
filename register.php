<?php
	$response = array();
    if(strtolower($_SERVER['REQUEST_METHOD']) =="post"){
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
    	$hashpass = md5($password);
    	$sql = "SELECT * FROM user WHERE user_name = '$username' OR email = '$email'";
    	$res = $conn->select_query($sql);
    	if(count($res)>0){
    		$errormsg = 'This ';
    		$response['success']=0;
    		if($res['email']==$email){
    			$errormsg.="Email  ";
    		}
    		if($res['user_name']==$username){
	    		$errormsg.="Username ";
	    		$response['seskey']='';
    		} 
    		$errormsg.=" Already Exist. Try Another!!";
    		$response['msg']=$errormsg;
            $response['msgsql']=$sql;
    		
    	}else{
    		$sql = "INSERT INTO user(user_name,first_name,last_name,password,email) values('$username','$firstname','$lastname','$hashpass','$email')";
    		if($conn->insert_query($sql)){
    			$response['success']=1;
	    		$response['msg']="You are Successfully Registered";
	    		$response['seskey']='';
    		}else{
    			$response['success']=0;
	    		$response['msg']="Error While Registering";
	    		$response['seskey']='';
    		}
    	}
    }else{
    		$response['success']=0;
    		$response['msg']="Invalid Request method";
    		$response['seskey']='';
    }
    exit(json_encode($response));

?>

