<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $wishlist_id = $_POST["wishlist_id"];

    $sql = "DELETE FROM wishlist WHERE id = '$wishlist_id'";
    if ($conn->query($sql) === TRUE) { } else {
        echo $sql -> error;
    }