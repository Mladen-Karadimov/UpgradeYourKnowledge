<?php

$pagenum = 1;
for ($i=1; $i < 87; $i++) { 

	$html = new DOMDocument();
	libxml_use_internal_errors(true);
	$html->loadHTMLFile('http://uselessfacts.net/page/'.$i.'/');
	libxml_use_internal_errors(false);
	$mydiv = $html->getElementsByTagName("p");

	// echo $html->saveHTML();

	foreach ($mydiv as $book) {
	    echo $book->nodeValue, "</br>";
	}
}
?>