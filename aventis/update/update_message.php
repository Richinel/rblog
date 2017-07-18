 <?php
 	// if(!isset($_SESSION['email'])){ //if login in session is not set
  //       header("Location: ../admin_login.php");
  //   }
    
	include('../controllers/dbconnect.php');

$id 			= addslashes($_POST["id"]);
$title 			= addslashes($_POST["title"]);
$image 			= addslashes($_POST["image"]); 
$date 			= addslashes($_POST["date"]); 
$type 			= addslashes($_POST["type"]); 
$slug 			= addslashes($_POST["url"]); 
$content 		= addslashes($_POST["content"]); 
$posted_by 		= addslashes($_POST["posted_by"]); 

$sql="	
		UPDATE 
			blogposts 
		SET 
			title 		= '$title',
			image 		= '$image',
			date 		= '$date',
			type 		= '$type',
			slug 		= '$slug',
			content 	= '$content',  
			posted_by 	= '$posted_by'  
		WHERE 
			id='$id'
 		";

	if(mysqli_query($conn, $sql)){
		header('Location: ../admin_messages.php');
	}else{
		echo 'error' . mysqli_error($conn);
	}

	$conn->close();

 ?>
