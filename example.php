<?php

$fp = fopen('license.txt', 'r');


/*while (!feof($fp)) {
    $symbol = fread($fp, 1);
    echo $symbol;
}

echo PHP_EOL;*/

$content = fread($fp, filesize('license.txt'));

echo $content . PHP_EOL;
