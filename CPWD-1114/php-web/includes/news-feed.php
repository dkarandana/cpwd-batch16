<?php 
 $newsFeed= [
 	[
 		"title"=>"News1", 
 		"thumb"=>"thumb-1.jpg",
 		"intro"=>"first news intro"
 		"category"=>"sports"
 		"url"=>"news-1-readmore.html"
 	],

 	[
 		"title"=>"News2", 
 		"intro"=>"first news intro"
 		"category"=>"auto"
 		"url"=>"news-2-readmore.html"
 	],

 	[
 		"title"=>"News3", 
 		"intro"=>"first news intro"
 		"category"=>"auto"
 		"url"=>"news-2-readmore.html"
 	],
 ];

 print_r($newsFeed);
 ?>

<h3>NEWS FEED</h3>
				<ul id="news-feed" >
					<li>
						<img src="" alt="news 1">

						<p>
							News content
							<a class="more">...more</a>
						</p>
					</li>

					<li>
						<img src="" alt="news 2">

						<p>
							News content
							<a class="more">...more</a>
						</p>
					</li>

					<li>
						<img src="" alt="news 3">

						<p>
							News content
							<a class="more">...more</a>
						</p>
					</li>

					<li>
						<img src="" alt="news 4">

						<p>
							News content
							<a class="more">...more</a>
						</p>
					</li>
					
				</ul>