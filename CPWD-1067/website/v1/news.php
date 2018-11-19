	<?php

	header('Content-type: website/json');

 require'php-api/news-data.php';
$jsoneOut = json_encode($newsFeed)

print_r( $jsoneOut );
?>