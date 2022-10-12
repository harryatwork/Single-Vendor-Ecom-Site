<?php include("../../db.php");

    $filename = $_FILES['cat_pic']['name'];
    $category = $conn->real_escape_string($_POST["category"]);
    $c_id = $_POST["c_id"];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('M-d,Y');

    $location = "../../images-main/categories/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    $sql_update_name = "UPDATE categories SET name = '$category' WHERE id = '$c_id'";
    if ($con->query($sql_update_name) === TRUE) { } else { 
        // echo "ERROR" . $sql . "<br>" . $conn->error;
        echo'Error Upload Category. Please try again';
    }

    if(move_uploaded_file($_FILES['cat_pic']['tmp_name'],$location . $newfilename)) {

        $sql_update_image = "UPDATE categories SET image = '$newfilename' WHERE id = '$c_id'";
        if ($con->query($sql_update_image) === TRUE) { 
            echo'Category Successfully Uploaded';
        } else { 
            echo'Error Upload Category. Please try again';
            // echo "ERROR" . $sql . "<br>" . $conn->error;
        }

    } else {
        echo'Category Successfully Uploaded';
    }