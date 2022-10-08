<?php
ob_start();
session_start();

	// $servername = "localhost";
	// $dbusername = "tharunat_chief";
    // $dbpassword = "Mumbai@3693";
	// $dbname = "tharunat_solepurpose";
	// $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	
	
	// define('HOST','localhost');
	// define('USERNAME', 'tharunat_chief');
	// define('PASSWORD','Mumbai@3693');
	// define('DB','tharunat_solepurpose');
	
	// $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	// $db = new PDO('mysql:host=localhost;dbname=tharunat_solepurpose','tharunat_chief','Mumbai@3693');

	$servername = "localhost";
	$dbusername = "root";
    $dbpassword = "";
	$dbname = "solepurpose";
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	
	
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
	define('DB','solepurpose');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$db = new PDO('mysql:host=localhost;dbname=solepurpose','root','');
	
?>