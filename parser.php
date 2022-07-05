<?php

libxml_use_internal_errors(true);

$nytimesContent = file_get_contents('https://nytimes.com');

$domContent = new DOMDocument();
$domContent->loadHTML($nytimesContent);
$siteContent = $domContent->getElementById('site-content')->nodeValue;

file_put_contents('main_page.html', $siteContent);