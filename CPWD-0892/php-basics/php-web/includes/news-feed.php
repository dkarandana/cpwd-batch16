<h3>NEWS-FEED</h3>

<?php
	$newsFeed = [
		[
			"title"=>"news01",
			"thumb"=>"thumb-1.jpeg",
			"intro"=>"news 01 intro",
			"url"=>"news01.html"
		], 
		
		[
			"title"=>"news02",
			"thumb"=>"thumb-2.jpeg"
		],
		
		[
			"title"=>"news03",
			"intro"=>"news03 intro"
		]; 
	];
	
	
	
	$newsBlock="";
	foreach($newsFeed as $news){
		echo <<<EOD
		<h4> {$news[''title]}</h4>
EOD;
	}
?>

<ul id="news-feed">
	<li>
		<img src="" alt="news 01"/>
		<p>
			news content
			<a class="more"> more...</a>
		</p>	
	</li>
	
	<li>
		<img src="" alt="news 02"/>
		<p>
			news content
			<a class="more"> more...</a>
		</p>	
	</li>
	
	<li>
		<img src="" alt="news 03"/>
		<p>
			news content
			<a class="more"> more...</a>
		</p>	
	</li>