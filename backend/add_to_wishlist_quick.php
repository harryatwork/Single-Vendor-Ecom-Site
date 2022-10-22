<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $p_id = $_POST["p_id"];
    $u_id = $_POST["u_id"];
    $c_id = $_POST["c_id"];
    $sub_c_id = $_POST["sub_c_id"];

    $sql = "INSERT INTO wishlist (u_id,p_id,c_id,sub_c_id,quantity,date)
                       values('$u_id','$p_id','$c_id','$sub_c_id','1','$date')";
    if ($conn->query($sql) === TRUE) { } else {
        echo $sql -> error;
    }