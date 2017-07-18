<?php 
	include('includes/header.php');
	include('controllers/dbconnect.php');
?>

	<div class='container'>
		<div class='wrapper content-padding-bottom'>
			<div class="row gutters margin_items">
				<?php

					$query = mysqli_query($conn,"SELECT * FROM blogposts WHERE type = 'guide'");

					while($result = mysqli_fetch_array($query)) {
						echo 
						"
							
							<div class='col col-4'>
								<a href='guides/" . $result['slug'] . "'>
									<div class='news_item'>
										<img src='assets/images/" . $result['image'] . "'> 
										<div class='row'>
											<div class='col col-6'>
												<i class='fa fa-user' aria-hidden='true'></i>
												" . $result['posted_by'] . "
											</div>
											<div class='col col-6'>
												<i class='fa fa-calendar' aria-hidden='true'></i>
												" . $result['date'] . "
											</div>
										</div>
										<h3>" . $result['title'] . "</h3>
									</div>
								</a>
							</div>
						";	
					}		
				?>
			</div>
		</div>
	</div>

<?php include('includes/footer.php');  ?>