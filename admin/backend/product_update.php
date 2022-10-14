<?php include("../../db.php");

    $filename = $_FILES['product_pic']['name'];
    $cat_id = $conn->real_escape_string($_POST["cat_id"]);
    $subcat_id = $conn->real_escape_string($_POST["subcat_id"]);
    $product_status = $conn->real_escape_string($_POST["product_status"]);
    $product_name = $conn->real_escape_string($_POST["product_name"]);
    $product_description = $conn->real_escape_string($_POST["product_description"]);
    $product_price = $conn->real_escape_string($_POST["product_price"]);
    $discount_option = $conn->real_escape_string($_POST["discount_option"]);
    $product_discount_perc = $conn->real_escape_string($_POST["product_discount_perc"]);
    $product_sku = $conn->real_escape_string($_POST["product_sku"]);
    $product_brand = $conn->real_escape_string($_POST["product_brand"]);
    $product_shipping = $conn->real_escape_string($_POST["product_shipping"]);

    $p_id = $_POST["p_id"];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('Y-m-d');

    $location = "../../images-main/products/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    $sql_update = "UPDATE products SET name = '$product_name', cat_id = '$cat_id', subcat_id = '$subcat_id', description = '$product_description',
                                       discount = '$product_discount_perc', price = '$product_price', sku = '$product_sku', brand = '$product_brand', shipping = '$product_shipping', status = '$product_status'
                                       WHERE id = '$p_id'";
    if ($con->query($sql_update) === TRUE) { 
        echo'Product Updated Successfully';
    } else {
        echo'Error Upload Product. Please try again';
        // echo "ERROR" . $sql_update . "<br>" . $conn->error;
    }


    if(move_uploaded_file($_FILES['product_pic']['tmp_name'],$location . $newfilename)) {

        $sql_update_img_tilte = "UPDATE products SET image = '$newfilename' WHERE id = '$p_id'";
        if ($con->query($sql_update_img_tilte) === TRUE) { } else { }

    } else {
        // echo'Please Add Image for product';
    }
    