<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}

	$title = 'Dashboard';
	include('header_aventis.php');
	include('admin_nav.php'); 
?>	

	<div class="admin_gui">
		<div class="wrapper_admin">
			<div class="cms_navbar">
				<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
				Dashboard
			</div>

			<h2 class='admin'>Welkom, <?php echo $_SESSION['name']; ?>!</h2>

			<fieldset>
				<legend>Belangrijk: Groot onderhoud | 16 - 3 - 2017</legend>
				<p>
					Hallo!<br><br>
					Gedurende de komende dagen houden wij ons bezig met wat onderhoud werkzaamheden. Het kan zijn dat het systeem misschien traag of niet goed werkt. Wij proberen alles zo snel mogelijk af te ronden!<br><br>

					Met vriendelijke groet,<br>
					Het Aventis Team
				</p>
			</fieldset>
		</div>
	</div>
</div>