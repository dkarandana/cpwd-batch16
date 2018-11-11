<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="public/css/global-layout.css">
	</head>
	<body>

		<header class="head">
			<?php
				require 'includes/inc.header.php';
			?>
		</header>
		<div>
			<div class="left_pane">
				<?php
					include 'includes/news-feed.php';
				?>				
			</div>
			<div class="right_pane">right pane</div>
		</div>
		<footer class="foot">footer</footer>
	</body>
</html>