<?php
    $newsFeed = [
        [
            "title"=>"News 1",
            "thumb"=>"thumb-1.jpeg",
            "intro"=>"First News Intro",
            "category"=>"sports",
            "url"=>"news-1-readmore.html"
        ],
        [
            "title"=>"News 2",
            "intro"=>"Second News Intro",
            "category"=>"auto",
            "url"=>"news-2-readmore.html"
        ],
        [
            "title"=>"News 3",
            "intro"=>"Third News Intro",
            "category"=>"auto",
            "url"=>"news-3-readmore.html"
        ],
        [
            "title"=>"News 4",
            "intro"=>"Fourth News Intro",
            "category"=>"auto",
            "url"=>"news-4-readmore.html"
        ],
    ];



    print_r( $newsFeed );
?>


<h3>NEWS FEED</h3>

<ul id="news-feed">
    <li>
        <img src="" alt="News 1"/>
        <p>
            News Content
            <a class="more">more...</a>
        </p>
    </li>
    <li>
        <img src="" alt="News 1"/>
        <p>
            News Content
            <a class="more">more...</a>
        </p>
    </li>
    <li>
        <img src="" alt="News 1"/>
        <p>
            News Content
            <a class="more">more...</a>
        </p>
    </li>
    <li>
        <img src="" alt="News 1"/>
        <p>
            News Content
            <a class="more">more...</a>
        </p>
    </li>
</ul>