<?php
    
    require_once 'init.php';
   $page =  strtolower(trim(str_replace('/loginapi/index.php/','', $_SERVER['REQUEST_URI']),'/'));
    //$res = $conn->select_query("SELECT * FROM USER WHERE user_name = $username and password = $hashpass");
    if($page =='login'){
    	include('login.php');
    }else if($page =='register'){
    	include('register.php');
    }
    else{
    		$response['success']=0;
    		$response['msg']="Invalid Request";
    		exit(json_encode($response));
    }
?>

