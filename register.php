<?php 
	header('Content-Type: application/json');
	
	include('DB.php');

	$result = [];
	
	$e = $_POST['email'];
	$p = $_POST['pass'];
	$f = $_POST['fname'];
	$l = $_POST['lname'];
	$b = $_POST['bday'];
	$u = $_POST['photo'];

	$sql = "INSERT INTO users(email, first_name, second_name, password, avatar, birthday) 
			VALUES ('".$e."', '".$f."', '".$l."', '".$p."', '".$u."', '".$b."')";
	$res = $db->db_query($sql);
    if($res)
    {
    	$result['message'] = 'success';
		echo (json_encode($result));
		exit();
    }
    else
    {
    	$result['message'] = 'error';
    }
	 
	echo json_encode($result);

 ?>