<?php include("../../db.php");

    $review_id = $_POST["review_id"];
    $review_status = $_POST["review_status"];

    $sql_update_review = "UPDATE reviews SET status = '$review_status' WHERE id = '$review_id'";
    if ($con->query($sql_update_review) === TRUE) { } else { 
        // echo "ERROR" . $sql . "<br>" . $conn->error;
        echo'Error updating review. Please try again';
    }