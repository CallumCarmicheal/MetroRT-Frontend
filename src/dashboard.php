<?php
	/**
	 * User: Callum Carmicheal
	 * Date: 08/04/2016
	 * Time: 14:43
	 */

	require("common.php");

	// Redirect (AUTH)
	$page =  new PageRender("Dashboard");
	$page -> RenderStart();

	$userIsAdmin = true; // Hidden tile example

	/*
	 * How the site will work,
	 * 		There will be tiles, you click on a tile and a background
	 *  	iframe will begin to load linking into the modules folder's
	 * 		corresponding file.
	 *
	 *
	 * HOW TO ADD
	 * 		REDIRECT,  add <li redir="true" page="PAGE TO REDIRECT TO">
	 * 		PAGE OPEN, add <li page="PAGE TO OPEN">
	 *
	 * ADDING MORE TILES || EDITING TILE FORMAT:
	 *		TO ADD MORE TILES YOU WILL REQUIRE TO EDIT THE css/interface.css FILE and
	 *		GOTO LINE 108 AND FOLLOW HOW IT IS DONE THERE!
	 *
	 * NOTE THERE CAN ONLY BE 8 TILES
	 **/
?>

<!-- ADD IN THE TILES -->

<h2>Welcome</h2>

<ul class="metro">
	<li page="modules/dashboard/TestPage.php">
		<i class="fa fa-cog"></i>		 		<span>Account</span>
	</li>

	<li page="modules/dashboard/EchoTest.php?echo=Tile2">
		<i class="fa fa-unlock-alt"></i> 		<span>Tile2</span>
	</li>

	<li page="modules/dashboard/EchoTest.php?echo=Tile3">
		<i class="fa fa-sign-out"></i>	 		<span>Tile3</span>
	</li>

	<li page="modules/dashboard/EchoTest.php?echo=Tile4">
		<i class="fa fa-sign-out"></i>	 		<span>Tile4</span>
	</li>

	<li page="modules/dashboard/RedirectFromIFrame.php">
		<i class="fa fa-youtube"></i>	 		<span>IFrame redir (callback)</span>
	</li>

	<li page="http://hackertyper.com/">
		<i class="fa fa-terminal"></i>	 		<span>L33T H4X MODE</span>
	</li>

	<!-- Redirect test -->
	<li redir="true" page="https://www.google.com">
		<i class="fa fa-tasks"></i>	 			<span>Redirect to Google</span>
	</li>

	<?php if($userIsAdmin): ?>
		<li redir="true" page="https://admin.example.com">
			<i class="fa fa-cog fa-spin"></i>	 	<span>Admin Panel</span>
		</li>
	<?php endif; ?>
</ul>

<!-- Popup -->
<div class="box">
	<span class="close" style="z-index: 99999;"></span>
	<iframe
		id="appFrame"
		style="display: none;"
		src="http://www.chaotic360.com/index.html"
		class="iframeFULLSCREEN"
	></iframe>
	<div>
		<p></p>
	</div>
</div>

<?php $page->RenderEnd(); ?>
