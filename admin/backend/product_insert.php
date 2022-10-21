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

    $variant_type = $_POST["variant_type"];
    $variant_title = $_POST["variant_title"];
    $variant_quantity = $_POST["variant_quantity"];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('Y-m-d');

    $location = "../../images-main/products/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    if(move_uploaded_file($_FILES['product_pic']['tmp_name'],$location . $newfilename)) {

        $sql = "INSERT INTO products (name, image, cat_id, subcat_id, price, description, discount, sku, brand, shipping, status, highlighted, date)
                VALUES ('$product_name', '$newfilename', '$cat_id', '$subcat_id', '$product_price', '$product_description', '$product_discount_perc', '$product_sku', '$product_brand', '$product_shipping', '$product_status', '0', '$date2')";
                if ($con->query($sql) === TRUE) { 
                    $last_id = $con->insert_id;

                    for($i=0;$i<count($variant_type);$i++){

                        $sql_variant = "INSERT INTO product_variants (p_id, variant, title, stock, price)
                                        VALUES ('$last_id', '$variant_type[$i]', '$variant_title[$i]', '$variant_quantity[$i]', '$product_price')";
                                        if ($con->query($sql_variant) === TRUE) { 
                                            
                                        } else { }
                    }

                    echo'Product Uploaded Successfully';

                } else {
                    echo'Error Upload Product. Please try again';
                    // echo "ERROR" . $sql . "<br>" . $conn->error;
                }

    } else {
        echo'Please Add Image for product';
    }