<?php
	/**
	 * User: Callum Carmicheal
	 * Date: 09/04/2016
	 * Time: 17:09
	 */
	if(!empty($_GET['cb']))
		$callback = $_GET['cb'];
	else
		$callback = "index.php";
?>callback_ADMINPANEL_DO_NOT_TYPE?<?=$callback?>