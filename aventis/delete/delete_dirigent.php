<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
        header("Location: admin_login.php");
    }

	include('../controllers/dbconnect.php');

	$id 	= $_GET['id'];

	$sql="
			DELETE 	
			FROM 
				dirigenten
			WHERE 
				id = '$id'";

	if(mysqli_query($conn, $sql)){
		header('Location: ../aventis/admin_dirigenten.php');
	}else{
		echo 'error'.mysql_errno();
	}

?>