<?php
	include('controllers/dbconnect.php');

	$query = mysqli_query($conn,"SELECT * FROM blogposts ORDER BY date DESC");

	while($result = mysqli_fetch_array($query)) {
		echo 
		"
			
			<div class='row gutters blogpost_row'>
				<div class='col col-1'>
					<img src='assets/images/" . $result['image'] . "' alt='TEST'>
				</div>

				<div class='col col-11'>
					<h4>
						" . $result['title'] . "

						<div class='date'>
							20-12-2015 | 10:45
						</div>
					</h4>

					<hr>

					<p>
						" . substr( $result['content'], 0, 75) . "
				</div>
			</div>
		";
	}

	$conn->close();

?>