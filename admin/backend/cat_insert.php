<?php include("../../db.php");

    $filename = $_FILES['cat_pic']['name'];
    $category = $conn->real_escape_string($_POST["category"]);

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('M-d,Y');

    $location = "../../images-main/categories/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    if(move_uploaded_file($_FILES['cat_pic']['tmp_name'],$location . $newfilename)) {

        $sql = "INSERT INTO categories (name, image)
                VALUES ('$category', '$newfilename')";
                if ($con->query($sql) === TRUE) { 
                    echo'Category Uploaded Successfully';
                } else {
                    echo'Error Upload Category. Please try again';
                    // echo "ERROR" . $sql . "<br>" . $conn->error;
                }

    } else {
        echo'Error Upload Category. Please try again';
    }