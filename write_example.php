<?php

$testArray = [1, 2, 3, 5, 9, 8];

$anotherArray = [0, 0, 0, 0, 0, 3];

$fp = fopen ('example.txt', 'a+');

file_put_contents('example.txt', $testArray);
file_put_contents('example.txt', $anotherArray, FILE_APPEND);
