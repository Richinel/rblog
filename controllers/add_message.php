<?php
if(isset($_POST['submit'])) {
	include('dbconnect.php');

	$type		= addslashes($_POST['type']);
	$title		= addslashes($_POST['title']);
	$posted_by	= addslashes($_POST['posted_by']);
	$image		= addslashes($_POST['image']);
	$content	= addslashes($_POST['content']);
	$date		= addslashes($_POST['date']);


	$conn->query("
				INSERT INTO 
					blogposts(
						type, 
						title, 
						image,
						posted_by,
						content, 
						date
					) 
				VALUES(
					'$type',
					'$title', 
					'$image',
					'$posted_by',
					'$content', 
					'$date'
					)
				");

	header("Location: ../aventis/admin_messages.php");
}
?>