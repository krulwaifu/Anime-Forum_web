	<?php 
	header('Content-Type: application/json');
	
	include('DB.php');

	$result = [];

	$e = $_POST['email'];

	if($e == "none")
	{
		$result['message'] = 'Fill email input';
		echo json_encode($result);
		http_response_code(403);
		exit();
	}

	$stmt = $dbconn->prepare("SELECT * FROM users WHERE email = ?");

    $stmt->bind_param("s", $e);

    $stmt->execute();

    $res = $stmt->get_result();

    $row = $res->fetch_assoc();
    
    if($row != null && $row['Email'] != null)
    {
    	$result['message'] = 'Email is in use. Enter another!';
		echo (json_encode($result));
		exit();
    }
    else
    {
    	$result['message'] = 'success';
    }
	
	echo json_encode($result);

 ?>