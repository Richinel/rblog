<?php
	if(isset($_POST['submit'])) {
		session_start();

		include('dbconnect.php');
		 
		function saveText($text) {
			$cleaned = strip_tags(htmlspecialchars(addslashes(stripslashes( $text ))));
			return $cleaned;
		}
		 
		$email  		= mysqli_real_escape_string($conn, saveText($_POST['email']));
		$password 		= mysqli_real_escape_string($conn, saveText($_POST['password']));
		$sql  			= "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

		$result  		= $conn->query($sql);
		 
		while($row = $result->fetch_assoc()) {
			$_SESSION['email'] 		= $email;
			$_SESSION['email'] 		= true;
			$_SESSION['email'] 		= $row['email'];
			$_SESSION['name'] 		= $row['name'];
		 
			header('Location: ../aventis/admin_dashboard.php');
		}
		echo "<div class='alert'>Je gegevens kloppen niet. Ga terug en probeer het nog een keer</div>";
		 
	}
?>