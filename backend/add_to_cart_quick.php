<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $p_id = $_POST["p_id"];
    $u_id = $_POST["u_id"];
    $c_id = $_POST["c_id"];
    $sub_c_id = $_POST["sub_c_id"];
    $p_variant_title = $_POST["p_variant_title"];
    $p_variant_type = $_POST["p_variant_type"];
    $p_title = $_POST["p_title"];
    $p_image = $_POST["p_image"];

    $sql = "INSERT INTO cart (u_id,p_id,c_id,sub_c_id,quantity,title,variant_type,variant_title,image,date)
                       values('$u_id','$p_id','$c_id','$sub_c_id','1','$p_title','$p_variant_type','$p_variant_title','$p_image','$date')";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo $last_id;
    } else {
        echo $sql -> error;
    }