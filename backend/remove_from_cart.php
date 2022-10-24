<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $cart_id = $_POST["cart_id"];

    $sql = "DELETE FROM cart WHERE id = '$cart_id'";
    if ($conn->query($sql) === TRUE) { } else {
        echo $sql -> error;
    }