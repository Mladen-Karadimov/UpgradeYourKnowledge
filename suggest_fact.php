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

	$fact = $_POST["fact"];

	$sql = "INSERT INTO suggested_facts(fact)
	VALUE ( \" $fact \")";
	$result = $conn->query($sql) or die ($conn->error);

	// header('Location : http://http://localhost/xampp/SaitBratMi');
	// exit();
?>

<script type="text/javascript">
window.location.replace("http://localhost/xampp/SaitBratMi");//шот съм ретард и не мога през Php
</script>