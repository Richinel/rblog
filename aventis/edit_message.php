<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	
	
	$title= "Wijzigen"; 
	include('header_aventis.php');
	include('controllers/dbconnect.php');
	include('admin_nav.php'); 
?>
<div class="admin_gui admin">
	<div class="wrapper_admin">
		<div class="cms_navbar">
			<a href="admin_messages" class='admin'>
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i> 
			</a>
			Pagina-inhoud wijzigen
		</div>

		<?php

			$id 	= $_GET['id'];

			$sql 	= "SELECT * FROM blogposts WHERE id = '$id'";
			$result	= mysqli_query($conn, $sql);


			if ($result->num_rows > 0) {
				while ($row =mysqli_fetch_assoc($result)) {
					echo 
					"
						<form action='update/update_message.php' method='post' class='edit_form'>

							<input type='hidden' name='id' value='" . $row['id'] . "'>

							<div class='form-item'>
						        <label><b>Titel</b></label><br>
						        <input type='text' name='title' value='" . $row['title'] . "' placeholder='" . $row['title'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>URL</b></label><br>
						        <input type='text' name='url' value='" . $row['slug'] . "' placeholder='" . $row['slug'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Banner</b></label><br>
						        <input type='text' name='image' value='" . $row['image'] . "' placeholder='" . $row['image'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Auteur</b></label><br>
						        <input type='text' name='posted_by' value='" . $row['posted_by'] . "' placeholder='" . $row['posted_by'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Datum</b></label><br>
						        <input type='text' name='date' value='" . $row['date'] . "' placeholder='" . $row['date'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Berichttype</b></label><br>
						        <input type='text' name='type' value='" . $row['type'] . "' placeholder='" . $row['type'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Bericht</b></label><br>
						        <textarea name='content' class='ti_edit' id='textarea1'>
						        	".$row['content']."
						        </textarea>
						    </div>

						    <div class='form-item'>
						    	<div class='row'>
						    		<div class='col'>
						    			<input type='submit' class='btn1 btn1_admin' name='change' value='Accepteren'>
						    		</div>
						    	</div>	        
						    </div>
						</form>
					";
				}
			}
		?>
	</div>
</div>