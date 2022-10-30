<?php include("../db.php"); 
    
    $email = $_POST['email'];
	$password = md5($_POST['password']);

    $sql_users = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result_users = $conn->query($sql_users);
	if ($result_users->num_rows > 0) {   
	while($row_users = $result_users->fetch_assoc()) {
	    $u_id = $row_users["id"];
		$_SESSION["email"] = $email;
		$_SESSION["u_id"] = $u_id;
        $_SESSION["login"] = 'login';
        echo 'success';
	} } else { 
	    echo 'failure';
	}
?>