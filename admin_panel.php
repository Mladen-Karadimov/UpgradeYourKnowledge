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

$sql = "SELECT id, fact FROM suggested_facts";
#echo $sql ."  ";
$result = $conn->query($sql) or die ($conn->error);
$row = $result->fetch_assoc();


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "fact: " . $row["fact"] ."<br>";

        ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
