<?php
/**
 * User: Callum Carmicheal
 * Date: 09/04/2016
 * Time: 18:59
 */

 // THE CSS FRAMEWORK BEING USED IS
 // https://metroui.org.ua/

	require("common.php");
	$page = new PageRender();
	$page->RenderStart();
?>

<div style="padding-left: 115px; padding-right: 115px;">
	<h1 style="color: white">Account Settings for John Doe</h1>

	<br><br><br>

	<h2 style="color: white;">Please Note:</h2>
	<span style="color: white;">
		Any changes made inside here will have to be confirmed via email <br>
		Usually dispatched withing Instant-10 Minutes.
	</span>

	<!-- SEPERATOR -->
	<hr style="color: orange"/>

	<!-- Change Password -->
	<div style="width: 100%;">
		<div class="login-form padding20" style="opacity: 1; transform: scale(1); transition: 0.5s;">
			<!-- The action url is relative to this file not the root! (THIS IS IN A IFRAME) -->
			<form action="TestPage.process.php" method="post">
				<h3 class="text-light" style="color: white;">Change Password</h3>
				<br>

				<div class="input-control password full-size" data-role="input">
					<label for="password" style="color: white;">Current password:</label>
					<input type="password" name="password" style="padding-right: 39px;">
				</div>
				<br>
				<br>

				<div class="input-control password full-size" data-role="input">
					<label for="newpassword" style="color: white;">New password:</label>
					<input type="password" name="newpassword" style="padding-right: 39px;">
				</div>
				<br>
				<br>

				<div class="form-actions">
					<button type="submit" style="width: 100%;" class="button primary">Change password...</button>
				</div>
			</form>
		</div>
	</div>

	<!-- SEPERATOR -->
	<hr style="color: orange"/>

	<!-- Change Email -->
	<div style="width: 100%;">
		<div class="login-form padding20" style="opacity: 1; transform: scale(1); transition: 0.5s;">
			<!-- The action url is relative to this file not the root! (THIS IS IN A IFRAME) -->
			<form action="TestPage.process.php" method="post">
				<h3 class="text-light" style="color: white;">Change Email</h3>
				<br>

				<div class="input-control password full-size" data-role="input">
					<label for="password" style="color: white;">Current password:</label>
					<input type="password" name="password" style="padding-right: 39px;">
				</div>
				<br>
				<br>

				<div class="input-control password full-size" data-role="input">
					<label for="email" style="color: white;">Current email:</label>
					<input type="password" name="email" style="padding-right: 39px;">
				</div>
				<br>
				<br>

				<div class="input-control password full-size" data-role="input">
					<label for="newemail" style="color: white;">New email:</label>
					<input type="password" name="newemail" style="padding-right: 39px;">
				</div>
				<br>
				<br>

				<div class="form-actions">
					<button type="submit" style="width: 100%;" class="button primary">Change email...</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $page->RenderEnd(); ?>
