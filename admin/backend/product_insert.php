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

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('Y-m-d');

    $location = "../../images-main/products/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    if(move_uploaded_file($_FILES['product_pic']['tmp_name'],$location . $newfilename)) {

        $sql = "INSERT INTO products (name, image, cat_id, subcat_id, description, discount, sku, brand, shipping, status, highlighted, date)
                VALUES ('$product_name', '$newfilename', '$cat_id', '$subcat_id', '$product_description', '$product_discount_perc', '$product_sku', '$product_brand', '$product_shipping', '$product_status', '0', '$date2')";
                if ($con->query($sql) === TRUE) { 
                    echo'Product Uploaded Successfully';
                } else {
                    echo'Error Upload Product. Please try again';
                    // echo "ERROR" . $sql . "<br>" . $conn->error;
                }

    } else {
        echo'Please Add Image for product';
    }