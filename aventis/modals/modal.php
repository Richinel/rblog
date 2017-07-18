<div class="modal add_message_modal">
	<div class="modal_window">
		<form action='../controllers/add_message.php' method='post' class='add_form'>
		<h3 class='admin'>Artikel toevoegen</h3>
		<i class='fa fa-times close3' aria-hidden='true'></i>

			<div class="form-item">
		        <label><b>Titel</b></label><br>
		        <input type="text" name="title" required>
		    </div>

		    <div class="form-item">
		        <label><b>Banner</b></label><br>
		        <input type="text" name="image" required>
		    </div>

		    <div class="form-item">
		        <label><b>Datum</b></label><br>
		        <input type="text" name="date" required>
		    </div>

		    <div class="form-item">
		        <label><b>Auteur</b></label><br>
		        <input type="text" name="posted_by" required>
		    </div>

		    <div class="form-item">
		        <label><b>Type</b></label><br>
		        <input type="text" name="type" required>
		    </div>

		    <div class="form-item">
		        <label><b>Bericht</b></label><br>
		        <textarea name="content" class='ti_edit' id='textarea1' required></textarea>
		    </div>

		    <div class="form-item">
		    	<div class="row">
		    		<div class="col">
		    			<input type="submit" class='btn1' name="submit" value='Voeg toe'>
		    		</div>
		    		<div class="col">
		    			<input type="reset" class='btn1' name="submit" value='Reset'>    			
		    		</div>
		    	</div>	        
		    </div>
		</form>
	</div>
</div>