<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $u_id = $_POST["u_id"];
    $account_first_name = $_POST["account_first_name"];
    $account_last_name = $_POST["account_last_name"];
    $account_email = $_POST["account_email"];

    $sql = "UPDATE users SET f_name = '$account_first_name', l_name = '$account_last_name', email = '$account_email' WHERE id = '$u_id'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION["email"] = $account_email;
        $_SESSION["u_id"] = $u_id;
        $_SESSION["login"] = 'login';
    } else {
        echo $sql -> error;
    }