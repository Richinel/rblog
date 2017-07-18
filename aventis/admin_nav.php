<div class="admin_content">
	<div class="admin_nav">
		<a href="../index.php">
			<!-- <img src="../assets/images/hs_logo_white.png" target="_blank"> -->
		</a>

<!-- 		<i class="fa fa-times cms_close_btn" aria-hidden="true"></i>	 -->	

		<ul>
			<li class='userinfo'>
				<i class="fa fa-user" aria-hidden="true"></i>
				<?php echo $_SESSION['name']; ?>
			</li>

			<hr class='admin_hr'>
			<a href="admin_dashboard" class='a_inverse'>
				<li>
					<i class="fa fa-home" aria-hidden="true"></i>
					Home
				</li>
			</a>
			<a href="admin_messages" class='a_inverse'>
				<li>
					<i class="fa fa-comments-o" aria-hidden="true"></i>
					Artikelen
				</li>
			</a>
			<a href="./assets/js/tinymce/plugins/filemanager/dialog.php?type=1&field_id=fieldID&popup=1" class='a_inverse iframe-btn'>
				<li>
					<i class="fa fa-files-o" aria-hidden="true"></i>
					Bestandsbeheer
				</li>
			</a>
			<a href="admin_info" class='a_inverse'>
				<li>
					<i class="fa fa-info" aria-hidden="true"></i>
					Informatie
				</li>
			</a>
			<a href="../controllers/logout.php" class='a_inverse'>
				<li>
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					Uitloggen
				</li>
			</a>
		</ul>
	</div>
</div>