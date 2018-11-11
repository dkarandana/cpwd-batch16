<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Homw page</title>
		<link rel="stylesheet" href="public/css/global-layout.css">
	</head>
	<body>
		 <?php 
			require 'includes/inc.header.php';
		 ?>
		<header>
			header
		</header>

		<div class="main-content">
			<div class="left-pane" >
				<?php include 'includes/news-feed.php' ; ?>
				
			</div>
			<div class="right-pane" >
				right pane
			</div>
			
		</div>
		
		<footer>
			footer
		</footer>
	</body>
</html>