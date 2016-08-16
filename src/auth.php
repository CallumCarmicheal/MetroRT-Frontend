<?php
	/**
	 * User: Callum Carmicheal
	 * Date: 08/04/2016
	 * Time: 14:39
	 */

	require("common.php");
	require("code.php");

	$loggedIn = testLogin(false);
	if($loggedIn) {
		header("Location: dashboard.php");
		die("Redirecting to dashboard.php");
	}

	$page =  new PageRender("Dashboard");
	$page -> RenderStart();

	/*
	 * How the site will work,
	 * 		There will be tiles, you click on a tile and a background
	 *  	iframe will begin to load linking into the modules folder's
	 * 		corresponding file.
	 *
	 *
	 * HOW TO ADD
	 * 		REDIRECT, add <li redir="true" page="PAGE TO REDIRECT TO">
	 * 		PAGE OPEN, add <li page="PAGE TO OPEN">
	 *
	 * NOTE THERE CAN ONLY BE 7 TILES + 1 AS A LONG BOTTOM TILE (DEV TILE)!
	 **/
?>

<!-- ADD IN THE TILES -->

<h2>Chaotic360 : Authentication</h2>

<ul class="metro">
	<li page="modules/auth/login.php">
		<i class="fa fa-chevron-left"></i>		 		<span>Login</span>
	</li>

	<li page="../support/ChatPopup.php">
		<i class="fa fa-comments"></i> 					<span>Support</span>
	</li>

	<li page="modules/auth/register.php">
		<i class="fa fa-chevron-right"></i>	 			<span>Register</span>
	</li>
</ul>

<!-- Popup -->
<div class="box">
	<span class="close" style="z-index: 99999;"></span>
	<iframe
		id="appFrame"
		style="display: none;"
		class="iframeFULLSCREEN"
	></iframe>
	<div>
		<p></p>
	</div>
</div>



<?php $page->RenderEnd(); ?>

