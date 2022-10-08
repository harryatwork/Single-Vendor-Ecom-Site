<?php include("../db.php"); ?>
<?php
    if(isset($_SESSION["email"])) {
        $session_email = $_SESSION["email"];
        $sql_admin = "SELECT * FROM admin WHERE email = '$session_email'";
        $result_admin = $conn->query($sql_admin);
        if ($result_admin->num_rows > 0) {   
        while($row_admin = $result_admin->fetch_assoc()) { 
            $admin_name = $row_admin["name"];
        } } else {
            header("location:logout");
        }
    } else {
        header("location:logout");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sole Purpose</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>