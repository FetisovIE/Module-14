<?php

$testArray = [1, 2, 3, 5, 9, 8];

$anotherArray = [0, 0, 0, 0, 0];

$fp = fopen

file_put_contents('example.txt', $testArray);
file_put_contents('example.txt', $anotherArray, FILE_APPEND);
