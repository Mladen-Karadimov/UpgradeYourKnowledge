<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "bazabratmi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Unable to connect:");
$conn->set_charset('utf8');

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_errno();
} 

for ($i=76; $i < 88; $i++) { 

	$html = new DOMDocument();
	libxml_use_internal_errors(true);
	$html->loadHTMLFile('http://uselessfacts.net/page/'.$i.'/');
	libxml_use_internal_errors(false);
	$facts = $html->getElementsByTagName("p");

	// echo $html->saveHTML();

	foreach ($facts as $fact) {
	    echo $fact->nodeValue, "</br>";
		
		$sql = "INSERT INTO parsed_facts(information)
				VALUE (\"$fact->nodeValue\");";
		$result = $conn->query($sql) or die ($conn->error);
	}
}
?>