<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	
	
	$title = "Toevoegen"; 
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
			Artikel toevoegen
		</div>
			
			<form action='controllers/add_message.php' method='post' class='edit_form'>
				<div class="form-item">
			        <label><b>Titel</b></label><br>
			        <input type="text" name="title">
			    </div>

			    <div class="form-item">
			        <label><b>URL</b></label><br>
			        <input type="text" name="url">
			    </div>

			    <div class="form-item">
			        <label><b>Banner</b></label><br>
			        <input type="text" name="image">
			    </div>

			    <div class="form-item">
			        <label><b>Datum</b></label><br>
			        <input type="text" name="date">
			    </div>

			    <div class="form-item">
			        <label><b>Auteur</b></label><br>
			        <input type="text" name="posted_by">
			    </div>

			    <div class="form-item">
			        <label><b>Type</b></label><br>
			        <input type="text" name="type">
			    </div>

			    <div class="form-item">
			        <label><b>Bericht</b></label><br>
			        <textarea name="content" class='ti_edit'></textarea>
			    </div>

			    <div class="form-item">
			    	<div class="row">
			    		<div class="col">
			    			<input type="submit" class='btn1_admin' name="submit" value='Voeg toe'>
			    		</div>
			    		<div class="col">
			    			<input type="reset" class='btn1_admin' name="submit" value='Reset'>    			
			    		</div>
			    	</div>	        
			    </div>
			</form>
		</div>
	</div>
</div>