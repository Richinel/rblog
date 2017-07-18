<?php
if(isset($_POST['submit'])) {
	include('dbconnect.php');

	$type		= addslashes($_POST['type']);
	$title		= addslashes($_POST['title']);
	$image		= addslashes($_POST['image']);
	$url		= addslashes($_POST['url']);
	$posted_by	= addslashes($_POST['posted_by']);
	$content	= addslashes($_POST['content']);
	$date		= addslashes($_POST['date']);

	$conn->query("
				INSERT INTO 
					blogposts(
						type, 
						title, 
						image,
						url,
						content, 
						date,
						posted_by
					) 
				VALUES(
					'$type',
					'$title',
					'$image',
					'$url',
					'$content', 
					'$date',
					'$posted_by'
					)
				");

	header("Location: ../admin_messages.php");
}
?>