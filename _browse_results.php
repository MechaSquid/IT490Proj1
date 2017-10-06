<?php 
	//include '_db_login.php';

	// foreach ($_POST as $key => $value)
 //        echo $key.'='.$value.'<br />';

	// echo $_POST['browse'] == "" ? 'empty' : 'full';
$request_body = file_get_contents('php://input');
$request = json_decode($request_body);
echo $request->browse;
?>