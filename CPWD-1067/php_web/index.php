<!DOCTYPE html>
<html>
<head>
	<title>PHPweb page</title>

<link rel="stylesheet" type="text/css" href="/php_web/public/css/globle-layout.css">
	
	
</head>
<body>



<div id="header">

	<?php
 require'includes/header.php';

?>
</div>

<div id="body">
	<div class="left-pane">
			<?php
 require'includes/news-feedback.php';

?>
	</div>
	<div class="right-pane">
			<?php
 require'includes/body.php';

?>
	</div>
</div>

<div id="footer">
		<?php
 require'includes/footer.php';

?>
</div>
</body>
</html>