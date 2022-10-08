<?php include("../../db.php"); 
    
	$email = $_POST['email'];
	$password = md5($_POST['password']);

    $sql_admin = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
	$result_admin = $conn->query($sql_admin);
	if ($result_admin->num_rows > 0) {   
	while($row_admin = $result_admin->fetch_assoc()) {
	    $a_id = $row_admin["id"];
		$_SESSION["email"] = $email;
		$_SESSION["a_id"] = $a_id;
        echo 'success';
	} } else { 
	    echo 'failure';
	}
?>