<?php
	if(!isset($_SESSION['id'], $_SESSION['username'], $_SESSION['usertype'])) {
		redirect('admin/login_page');
	}elseif ( $_SESSION['usertype']!='admin') {
		redirect('journaliste/index');
	}
?>
