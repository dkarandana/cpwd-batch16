<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Web Pages</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="public/css/global-layout.css"/>
</head>
<body>
	<?php
		require'includes/inc.header.php';
	?>
	<div id="content">
	<div class="Left-pane">
		<?php include 'includes/news-feeds.php';
	</div>
	<div class="Right-pane"></div>
	<?php
		require'includes/inc.footer.php';
	?>
</body>