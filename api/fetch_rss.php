<?php
// filepath: /c:/laragon/www/test1/pages/rss.php

header('Content-Type: application/rss+xml; charset=UTF-8');

$items = [
    [
        'title' => 'Exploring the Historic Sites of Oxford',
        'link' => 'https://example.com/oxford-historic-sites',
        'description' => 'Discover the rich history of Oxford by visiting its historic sites, including the University of Oxford, Oxford Castle, and Christ Church Cathedral.',
        'pubDate' => date(DATE_RSS, strtotime('2025-02-01'))
    ],
    [
        'title' => 'A Day in Bonn: Top Attractions',
        'link' => 'https://example.com/bonn-top-attractions',
        'description' => 'Spend a day exploring the top attractions in Bonn, including Beethoven House, Bonn Minster, and Poppelsdorf Palace.',
        'pubDate' => date(DATE_RSS, strtotime('2025-02-02'))
    ],
    [
        'title' => 'The Best Museums in Oxford',
        'link' => 'https://example.com/oxford-museums',
        'description' => 'Oxford is home to some of the best museums in the world. Visit the Ashmolean Museum, Pitt Rivers Museum, and more.',
        'pubDate' => date(DATE_RSS, strtotime('2025-02-03'))
    ],
    [
        'title' => 'Bonn’s Beautiful Botanical Garden',
        'link' => 'https://example.com/bonn-botanical-garden',
        'description' => 'Take a stroll through the beautiful Botanical Garden in Bonn, maintained by the University of Bonn.',
        'pubDate' => date(DATE_RSS, strtotime('2025-02-04'))
    ]
];

echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>
<rss version="2.0">
    <channel>
        <title>Oxford and Bonn RSS Feed</title>
        <link>https://example.com/rss</link>
        <description>Latest news and updates about Oxford and Bonn</description>
        <language>en-us</language>
        <pubDate><?php echo date(DATE_RSS); ?></pubDate>
        <lastBuildDate><?php echo date(DATE_RSS); ?></lastBuildDate>
        <docs>https://www.rssboard.org/rss-specification</docs>
        <generator>PHP RSS Feed Generator</generator>
        <?php foreach ($items as $item): ?>
        <item>
            <title><?php echo htmlspecialchars($item['title']); ?></title>
            <link><?php echo htmlspecialchars($item['link']); ?></link>
            <description><?php echo htmlspecialchars($item['description']); ?></description>
            <pubDate><?php echo $item['pubDate']; ?></pubDate>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>