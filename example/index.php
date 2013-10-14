<?php

// Require
require('../vendor/CyrilPerrin/Rss.php');

// HTTP header
header('content-type:application/rss+xml');

// Example
$rss = new CyrilPerrin\Rss(
    'Test', 'http://www.example.org', 'Test RSS', 'en', '120', time()
);
$rss->setImage('Tux', 'tux.png', 'http://www.example.org');
$rss->addItem(
    '1', 'Test 1', 'http://www.example.org', 'Test item 1', 'Category 1',
    'Cyril', time(), 'Comments', 'http://www.example.org'
);
$rss->addItem(
    '2', 'Test 2', 'http://www.example.org', 'Test item 2', 'Category 1',
    'Cyril', time(), 'Comments', 'http://www.example.org'
);
$rss->addItem(
    '3', 'Test 3', 'http://www.example.org', 'Test item 3', 'Category 2',
    'Cyril', time(), 'Comments', 'http://www.example.org'
);
$rss->addItem(
    '4', 'Test 4', 'http://www.example.org', 'Test item 4', 'Category 1',
    'Cyril', time(), 'Comments', 'http://www.example.org'
);
$rss->addItem(
    '5', 'Test 5', 'http://www.example.org', 'Test item 5', 'Category 3',
    'Cyril', time(), 'Comments', 'http://www.example.org'
);
$rss->addItem(
    '6', 'Test 6', 'http://www.example.org', 'Test item 6', 'Category 2',
    'Cyril', time(), 'Comments', 'http://www.example.org'
);
echo $rss;