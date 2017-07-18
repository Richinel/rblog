<?php
	session_start();

	// if(!isset($_SESSION['email'])){ //if login in session is not set
	//     header("Location: admin_login.php");
	// }	

	$title = 'Berichten';
	include('header_aventis.php');
	include('modals/modal.php');
	include('admin_nav.php'); 
?>

		<div class="admin_gui admin">
			<div class="wrapper">
				<div class="cms_navbar">
				<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
					Berichten

					<div class="cms_navbar_i">
						<a href="add_message_page">
							<i class="fa fa-plus-circle add" aria-hidden="true"></i>
						</a>

						<div class="tooltip">
							<div class="tooltip_add">
								Item toevoegen
							</div>
						</div>
					</div>
				</div>
					<?php include('controllers/messages_table.php'); ?>
			</div>
		</div>
	</div>