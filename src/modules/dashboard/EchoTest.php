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
	<h1 style="color: white">Echo = <?=$_GET['echo']?></h1>

    <!-- -->
    <a href=""></a>
</div>

<?php $page->RenderEnd(); ?>
