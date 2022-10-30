<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $u_id = $_POST["u_id"];
    $password_current = md5($_POST["password_current"]);
    $password_new = md5($_POST["password_new"]);

    $sql_users = "SELECT * FROM users WHERE id = ?";
    $stmt_users = $conn->prepare($sql_users);
    $stmt_users->bind_param("i",$u_id);
    $stmt_users->execute();
    $result_users = $stmt_users->get_result();
    while($row_users = $result_users->fetch_assoc()){
        $old_password = $row_users["password"];

        if($old_password == $password_current) {

            $sql = "UPDATE users SET password = '$password_new' WHERE id = '$u_id'";
            if ($conn->query($sql) === TRUE) {
                echo 'success';
            } else {
                // echo $sql -> error;
                echo 'failure';
            }

        } else {
            echo 'incorrect';
        }
    }

    