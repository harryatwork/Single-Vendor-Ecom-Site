<?php 
    include("../db.php");

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    $u_id = $_POST["u_id"];
    $address_f_name = $_POST["address_f_name"];
    $address_l_name = $_POST["address_l_name"];
    $address_address1 = $conn->real_escape_string($_POST["address_address1"]);
    $address_address2 = $conn->real_escape_string($_POST["address_address2"]);
    $address_city = $_POST["address_city"];
    $address_state = $_POST["address_state"];
    $address_pincode = $_POST["address_pincode"];
    $address_mobile = $_POST["address_mobile"];
    $address_email = $_POST["address_email"];

    $password = md5('solepurpose');


    $sql_address_insert = "INSERT INTO addresses (u_id,f_name,l_name,address1,address2,city,state,country,pincode,mobile,date)
                                           values('$u_id','$address_f_name','$address_l_name','$address_address1','$address_address2','$address_city','$address_state','Canada','$address_pincode','$address_mobile','$date')";
    if ($conn->query($sql_address_insert) === TRUE) { 
        $a_id = $conn->insert_id;
    } else {
        echo $sql_address_insert -> error;
    }

if(isset($_SESSION["login"])) {

    $u_id_original = $u_id;

} else {

    $sql_users = "SELECT * FROM users WHERE email = ?";
    $stmt_users = $conn->prepare($sql_users);
    $stmt_users->bind_param("s",$address_email);
    $stmt_users->execute();
    $result_users = $stmt_users->get_result();
    if($result_users->num_rows>0) {
    while($row_users = $result_users->fetch_assoc()){
        $u_id_original = $row_users["id"];
    } } else {
        $u_id_original = $u_id;

        $sql_user_update = "UPDATE users SET f_name = '$address_f_name', l_name = '$address_l_name', email = '$address_email', password = '$password'
                            WHERE id = '$u_id_original'";
        if ($conn->query($sql_user_update) === TRUE) { 
            $u_id = $u_id_original;
            $_SESSION["u_id"] = $u_id_original;
            $_SESSION["ip_address"] = 0;
            $_SESSION["login"] = 'login';
        } else {
            echo $sql_user_update -> error;
        }

    }

}

    $sql_orders = "SELECT * FROM orders ORDER BY o_id DESC LIMIT 1";
    $stmt_orders = $conn->prepare($sql_orders);
    $stmt_orders->execute();
    $result_orders = $stmt_orders->get_result();
    if($result_orders->num_rows>0){
    while($row_orders = $result_orders->fetch_assoc()) {
        $o_id = $row_orders["o_id"] + 1;
    } } else {
        $o_id = 1;
    }

    $sql_cart = "SELECT * FROM cart WHERE u_id = ?";
    $stmt_cart = $conn->prepare($sql_cart);
    $stmt_cart->bind_param("s",$u_id);
    $stmt_cart->execute();
    $result_cart = $stmt_cart->get_result();
    while($row_cart = $result_cart->fetch_assoc()) {
        $cart_id = $row_cart["id"];
        $cart_p_id = $row_cart["p_id"];
        $cart_c_id = $row_cart["c_id"];
        $cart_sub_c_id = $row_cart["sub_c_id"];
        $cart_quantity = $row_cart["quantity"];
        $cart_variant_type = $row_cart["variant_type"];
        $cart_variant_title = $row_cart["variant_title"];
        $cart_discount = 0;

        $sql_product = "SELECT * FROM products WHERE id = ?";
        $stmt_product = $conn->prepare($sql_product);
        $stmt_product->bind_param("i",$cart_p_id);
        $stmt_product->execute();
        $result_product = $stmt_product->get_result();
        while($row_product = $result_product->fetch_assoc()) {
            $product_price = $row_product["price"];
            $product_price_discount = $row_product["discount"];
            if($product_price_discount == 0){
                $cart_price = $product_price;
            } else {
                $cart_price = ($product_price-($product_price*($product_price_discount/100)));
            }
        }

        $sql_order_insert = "INSERT INTO orders (o_id,a_id,u_id,p_id,c_id,sub_c_id,price,quantity,variant_type,variant_title,discount,payment_type,order_status,delivery_status,date)
                                          values('$o_id','$a_id','$u_id','$cart_p_id','$cart_c_id','$cart_sub_c_id','$cart_price','$cart_quantity','$cart_variant_type','$cart_variant_title','$cart_discount','Online','Received','Pending','$date')";
        if ($conn->query($sql_order_insert) === TRUE) { 

            $sql_cart_remove = "DELETE FROM cart WHERE id = '$cart_id'";
            if ($conn->query($sql_cart_remove) === TRUE) { } else {
                echo $sql_cart_remove -> error;
            }

        } else {
            echo $sql_order_insert -> error;
        }

    }
