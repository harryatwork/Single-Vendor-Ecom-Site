<?php include("../../db.php");

    $o_id = $_POST["o_id"];
    $order_status = $_POST["order_status"];

    if($order_status == 'Received') {
        $delivery_status = 'Pending';
    } elseif($order_status == 'Confirmed') {
        $delivery_status = 'Pending';
    } elseif($order_status == 'In Transit') {
        $order_status = 'Confirmed';
        $delivery_status = 'In Transit';
    } elseif($order_status == 'Delivered') {
        $order_status = 'Confirmed';
        $delivery_status = 'Delivered';
    } else {
        $order_status = 'Received';
        $delivery_status = 'Pending';
    }

    $sql_update_order_status = "UPDATE orders SET order_status = '$order_status', delivery_status = '$delivery_status' WHERE o_id = '$o_id'";
    if ($con->query($sql_update_order_status) === TRUE) { } else { 
        // echo "ERROR" . $sql . "<br>" . $conn->error;
        echo'Error Upload Category. Please try again';
    }
