<?php include("../../db.php");

    $filename = $_FILES['subcat_pic']['name'];
    $category = $conn->real_escape_string($_POST["category"]);
    $subcategory = $conn->real_escape_string($_POST["subcategory"]);

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('M-d,Y');

    $location = "../../images-main/subcategories/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    if(move_uploaded_file($_FILES['subcat_pic']['tmp_name'],$location . $newfilename)) {

    } else {
        // echo'Error Upload Category. Please try again';
    }

    $sql = "INSERT INTO subcategories (cat_id, name, image)
            VALUES ('$category','$subcategory', '$newfilename')";
            if ($con->query($sql) === TRUE) { 
                echo'Sub Category Uploaded Successfully';
            } else {
                echo'Error Upload Sub Category. Please try again';
                // echo "ERROR" . $sql . "<br>" . $conn->error;
            }