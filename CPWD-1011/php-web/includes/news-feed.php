<?php
	$newsFeed =[
		[
			"title" => "news 1",
			"thumb" => "thumb-1.jpg",
			"intro" => "First News Intro",
			"catagory" => "sports",
			"url"=> "#readmore"
		],
		[
			"title" => "news 2",
			"thumb" => "thumb-2.jpg",
			"intro" => "Second News Intro",
			"catagory" => "health",
			"url"=> "#readmore"
		],
		[
			"title" => "news 3",
			"thumb" => "thumb-3.jpg",
			"intro" => "third News Intro",
			"catagory" => "economy",
			"url"=> "#readmore"
		],
		[
			"title" => "news 4",
			"thumb" => "thumb-4.jpg",
			"intro" => "four News Intro",
			"catagory" => "education",
			"url"=> "#readmore"
		],
		[
			"title" => "news 5",
			"thumb" => "thumb-5.jpg",
			"intro" => "fifth News Intro",
			"catagory" => "political",
			"url"=> "#readmore"
		]
	];

	print_r($newsFeed);
?>
	<h3>NEWS FEED</h3>

				<ul id="news-feed">
					<li>
						<img src="" alt="img1">
						<p> 
							news1
							<a href="" class="more">more...</a>
						</p>
					</li>
					<li>
						<img src="" alt="img2">
						<p> 
							news2
							<a href="" class="more">more...</a>
						</p>
					</li>
					<li>
						<img src="" alt="img3">
						<p> 
							news3
							<a href="" class="more">more...</a>
						</p>
					</li>
					<li>
						<img src="" alt="img4">
						<p> 
							news4
							<a href="" class="more">more...</a>
						</p>
					</li>
					<li>
						<img src="" alt="img5">
						<p> 
							news5
							<a href="" class="more">more...</a>
						</p>
					</li>
				</ul>