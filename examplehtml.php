<?php

$content = file_get_contents('example.html');

$htmlObject = new DOMDocument();
$htmlObject->loadHtml($content);

$table = $htmlObject->createElement('table');
$tableRow = $htmlObject->createElement('tr');
$tableCell = $htmlObject->createElement('td');

$tableCell->nodeValue = 'hello world!';

$tableRow->appendChild($tableCell);
$table->appendChild($tableRow);

$htmlObject->append($table);

file_put_contents('new_doc.html',$htmlObject->saveHTML());