<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="public/css/global-layout.css"
</head>
<body>
	<?php 
		require 'includes/inc.header.php';
	 ?>

	
	<div id="main-content">
		<div id="left-pane">
			<?php 
				require 'includes/news-feed.php';
	 		?>
		</div>
		<div id="right-pane"></div>
	</div>

	<?php 
		require 'includes/inc.footer.php';
	 ?>

</body>
</html>