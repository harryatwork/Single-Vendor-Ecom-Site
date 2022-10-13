<?php include("../../db.php");

    $filename = $_FILES['subcat_pic']['name'];
    $subcategory = $conn->real_escape_string($_POST["subcategory"]);
    $subcat_id = $_POST["subcat_id"];

    $date = date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $date2 = date('M-d,Y');

    $location = "../../images-main/subcategories/";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    $newfilename = round(microtime(true)) . '.' . $filename;

    $sql_update_name = "UPDATE subcategories SET name = '$subcategory' WHERE id = '$subcat_id'";
    if ($con->query($sql_update_name) === TRUE) { } else { 
        // echo "ERROR" . $sql . "<br>" . $conn->error;
        echo'Error Upload Sub Category. Please try again';
    }

    if(move_uploaded_file($_FILES['subcat_pic']['tmp_name'],$location . $newfilename)) {

        $sql_update_image = "UPDATE subcategories SET image = '$newfilename' WHERE id = '$subcat_id'";
        if ($con->query($sql_update_image) === TRUE) { 
            echo'Sub Category Successfully Uploaded';
        } else { 
            echo'Error Upload Sub Category. Please try again';
            // echo "ERROR" . $sql . "<br>" . $conn->error;
        }

    } else {
        echo'Sub Category Successfully Uploaded';
    }