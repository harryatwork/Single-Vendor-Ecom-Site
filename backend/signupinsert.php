<?php include("../db.php"); 
    
	$f_name = $_POST['f_name'];
    $email = $_POST['email'];
	$password = md5($_POST['password']);

    $sql_users = "SELECT * FROM users WHERE email = '$email'";
	$result_users = $conn->query($sql_users);
	if ($result_users->num_rows > 0) {   
	while($row_users = $result_users->fetch_assoc()) {
        echo 'exists';
	} } else { 
	    
        $sql_user_insert = "INSERT INTO users (f_name,email,password) values('$f_name','$email','$password')";
        if($conn->query($sql_user_insert) === TRUE) {
            $u_id = $conn->insert_id;
            $_SESSION["email"] = $email;
            $_SESSION["u_id"] = $u_id;
            $_SESSION["login"] = 'login';
            echo 'success';
        }

	}
?>