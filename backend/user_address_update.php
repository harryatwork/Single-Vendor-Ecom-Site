<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $u_id = $_POST["u_id"];
    $account_address_1 = $_POST["account_address_1"];
    $account_address_2 = $_POST["account_address_2"];
    $account_city = $_POST["account_city"];
    $account_mobile = $_POST["account_mobile"];
    $account_state = $_POST["account_state"];
    $account_country = $_POST["account_country"];
    $account_pincode = $_POST["account_pincode"];

    $sql = "UPDATE users SET address1 = '$account_address_1', address2 = '$account_address_2', city = '$account_city', state = '$account_state', country = '$account_country', mobile = '$account_mobile', pincode = '$account_pincode'
             WHERE id = '$u_id'";
    if ($conn->query($sql) === TRUE) {

    } else {
        echo $sql -> error;
    }