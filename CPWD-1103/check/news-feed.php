<?php
    $newsFeed = [
        [
            "title"=>"News 1",
            "thumb"=>"thumb-1.jpeg",
            "intro"=>"First News",
            "category"=>"sports",
            "url"=>"news-1-readmore.html"
        ],
        [
            "title"=>"News 2",
            "intro"=>"Second News",
            "category"=>"auto",
            "url"=>"news-2-readmore.html"
        ],
        [
            "title"=>"News 3",
            "intro"=>"Third News",
            "category"=>"auto",
            "url"=>"news-3-readmore.html"
        ],
        [
            "title"=>"News 4",
            "intro"=>"Fourth News",
            "category"=>"auto",
            "url"=>"news-4-readmore.html"
        ]
    ];

    $newsBlocks = "";

    foreach( $newsFeed as $news ){

        $newsBlocks = $newsBlocks . <<<EOD
        <h4>{$news['title']}</h4>
        <img src="{$news['thumb']}" alt="{$news['title']}"/>
        <p class="intro">{$news['intro']}
            <a class="read-more" href="{$news['url']}">more...</a>
        </p>

EOD;

    }
?>

<h3>NEWS FEED</h3>
<ul id="news-feed">
    <?=$newsBlocks;?>
</ul>