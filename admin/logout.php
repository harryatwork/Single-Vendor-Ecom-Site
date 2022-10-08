<?php
	//24 2 2015
	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['a_id']);
	session_destroy();
    header("location:index")
?>