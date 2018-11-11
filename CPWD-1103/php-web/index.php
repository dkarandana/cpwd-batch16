<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home page</title>
		<link rel="stylesheet" href="public/css/global-layout.css"/>
	</head>
	<body>

		<?php
			require 'includes/inc.header.php';
		?>

		<div class="main-content">
			<div class="left-pane">
				<?php include 'includes/news-feed.php';   ?>
			</div>

			<div class="right-pane">
				this is right pane
			</div>

		</div>

		<?php require 'includes/inc.footer.php'; ?>
</body>
</html>