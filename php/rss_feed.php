<?php

function fetch_news($city, $rss_url) {
    $rss = simplexml_load_file($rss_url);

    if (!$rss) {
        echo "<p>Could not fetch news for $city.</p>";
        return;
    }

    echo "<h2>Latest News About $city</h2><ul>";

    $count = 0;
    foreach ($rss->channel->item as $item) {
        if ($count < 3) { // Show only the latest 3 articles
            echo "<li>
                    <a href='{$item->link}' target='_blank'>{$item->title}</a>
                    <p>{$item->description}</p>
                  </li>";
            $count++;
        } else {
            break;
        }
    }

    echo "</ul>";
}

// Fetch news for Oxford and Bonn
fetch_news("Oxford", "https://news.google.com/rss/search?q=Oxford&hl=en-GB&gl=GB&ceid=GB:en");
fetch_news("Bonn", "https://news.google.com/rss/search?q=Bonn&hl=de&gl=DE&ceid=DE:de");
?>
