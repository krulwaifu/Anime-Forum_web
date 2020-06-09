<?php 
	header('Content-Type: application/json');

	include('DB.php');

	$result = [];

	$e = $_POST['email'];
	$p = $_POST['pass']; 

	if(!$p)
	{
		$result['message'] = 'Fill all inputs!';
		http_response_code(403);
		echo json_encode($result);
		exit();
	}


	$stmt = $dbconn->prepare("SELECT * FROM users WHERE email = ?");

    $stmt->bind_param("s", $e);

    $stmt->execute();

    $res = $stmt->get_result();

    $row = $res->fetch_assoc();
    if($row != null && $row['email'] != null)
    {
    	if($row['password'] == $p)
    	{
	    	$result['message'] = 'success';

	    	session_start();
	    	$id = $row['id'];
			$e = $row['email'];
			$p = $row['password'];
			$f = $row['first_name']; 
		    $s = $row['second_name'];
			$a = $row['avatar'];
			$b = $row['birthday'];

	    	$_SESSION['signedUser'] =  ['id' => $id,
	    								'email' => $e,
	    								'password' => $p,
	    								'first_name' => $f, 
	    							    'second_name' => $s,
	    								'avatar' => $a,
	    								'birthday' => $b];
			echo (json_encode($result));
			exit();
    	}
    	else
    	{
    		$result['message'] = 'Wrong Password!';
			echo (json_encode($result));
			exit();
    	}
    }
    else
    {
    	$result['message'] = 'Wrong Email!';
    } 
	echo json_encode($result);

 ?>