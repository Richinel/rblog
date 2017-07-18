<?php include('includes/header.php'); ?>
	
	<div class="hero">

		<?php 
					include('controllers/dbconnect.php');

					$slug	= $_GET['slug'];

					$sql	= "SELECT * FROM blogposts WHERE slug = '$slug'";

					$result	= mysqli_query($conn, $sql);

					if ($result->num_rows > 0) :
						while ($row = mysqli_fetch_assoc($result)) :
							echo "<img class='hero_img' src='assets/images/" . $row['image'] . "'>";
		?>

		<div class="img_overlay"></div>
		<div class="wrapper">
			<div class="hero_info">
			<?php
				
				echo 
				"
					<h1>" . $row['title'] . "</h1>
					
					<span>
						<div class='row'>
							<div class='col'>
								<i class='fa fa-user' aria-hidden='true'></i>
						 		" . $row['posted_by'] . " 
						 	</div>
						 	<span class='divider'>\</span>
						 	<div class='col'>
								<i class='fa fa-calendar' aria-hidden='true'></i>
								". $row['date'] . "
							</div>
						</div>
					</span>
				";
			?>

			</div>
		</div>
	</div>

	<div class="wrapper content">
		<?php 
					echo $row['content'];
				endwhile;
			endif;
		?>
	</div>

<?php include('includes/footer.php'); ?>
