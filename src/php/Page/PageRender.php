<?php
/**
 * User: Callum Carmicheal
 * Date: 07/04/2016
 * Time: 17:06
 */



class PageRender {
	private $pageTitle 		= "";
	private $description 	= "";

	public function __construct($pageTitle = "Page Title", $Description = "Title - Website") {
		$this->pageTitle 	= "WEBSITE - ". $pageTitle;
		$this->description 	= $Description;
	}

	public function RenderStart() { /* I Like to cheat to make stuff fast, will do it correct later... */ ?>
		<html>
			<head>
				<!-- Title -->
					<title><?=$this->pageTitle?></title>

				<!-- META -->
					<meta charset="utf-8"/>
					<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
					<meta name="viewport" content="width=device-width, initial-scale=1"/>
					<meta name="description" content="WEBSITE - <?=$this->description?>"/>
					<meta name="author" content="Callum Carmicheal"/>

				<!-- STYLESHEETS -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
					<link rel="stylesheet" type="text/css" href="css/interface.css">

				<!-- JQUERY -->
					<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
					<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

				<!-- JAVASCRIPT -.- -->
					<script src="js/util.js"></script>
					<script src="js/moduleLoader.js"></script>
					<script src="js/modules/tiles.js"></script>
			</head>
			<body>

	<?php }

	public function RenderEnd() { ?>
			</body>
		</html>
	<?php


		exit();
	}
}
