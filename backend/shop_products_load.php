<?php
    include("../db.php");

    $u_id = $_POST["u_id"];
    $getter = $_POST["getter"];
    $getter_id = $_POST["getter_id"];

    $all_products_array = [];
    
    $sql_products = "SELECT * FROM products WHERE $getter = ?";
    $stmt_products = $conn->prepare($sql_products);
    $stmt_products->bind_param("i",$getter_id);
    $stmt_products->execute();
    $result_products = $stmt_products->get_result();
    while($row_products = $result_products->fetch_assoc()) {
        $indi_products_array = [];
        $p_id = $row_products["id"]; 

        if($row_products['discount'] == 0) {
            $sticker = '';
            $product_price = $row_products['price'];
            $discounted_product_price = $row_products['price'];
        } else { 
            $product_price = $row_products['price'];
            $discounted_product_price = round(($row_products['price'] - (($row_products['price'])*(($row_products['discount'])/100))),2);
            $sticker = $row_products['discount'].'% Off';
        }
        $zero = 0;
        $sql_products_variant = "SELECT * FROM product_variants WHERE p_id = ? AND stock != ? LIMIT 1";
        $stmt_products_variant = $conn->prepare($sql_products_variant);
        $stmt_products_variant->bind_param("si",$p_id,$zero);
        $stmt_products_variant->execute();
        $result_products_variant = $stmt_products_variant->get_result();
        while($row_products_variant = $result_products_variant->fetch_assoc()) { 
            $products_variant_title = $row_products_variant['title'];
            $products_variant_variant = $row_products_variant['variant'];
        }

        $star_rating_overall = 0;
        $sql_product_rating = "SELECT * FROM reviews WHERE p_id = ?";
        $stmt_product_rating = $conn->prepare($sql_product_rating);
        $stmt_product_rating->bind_param("s",$row_products['id']);
        $stmt_product_rating->execute();
        $result_product_rating = $stmt_product_rating->get_result();
        while($row_product_rating = $result_product_rating->fetch_assoc()) {
            $star_rating = $row_product_rating["rating"];
            $star_rating_overall = $star_rating_overall + $star_rating;
        }
        $star_rating_count = $result_product_rating->num_rows;
        if($star_rating_count == 0) {
            $star_rating_average = 0;
        } else {
            $star_rating_average = round($star_rating_overall/$star_rating_count);
        }

        array_push($indi_products_array,$row_products['id']);
        array_push($indi_products_array,$row_products['name']);
        array_push($indi_products_array,$row_products['image']);
        array_push($indi_products_array,$product_price);
        array_push($indi_products_array,$products_variant_title);
        array_push($indi_products_array,$products_variant_variant);
        array_push($indi_products_array,$row_products['cat_id']);
        array_push($indi_products_array,$row_products['subcat_id']);
        array_push($indi_products_array,$row_products['discount']);
        array_push($indi_products_array,$discounted_product_price);
        array_push($indi_products_array,$star_rating_average); //10


    array_push($all_products_array,$indi_products_array);

} 
    echo json_encode($all_products_array);
?>

