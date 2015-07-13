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

$sql = "SELECT id, information FROM parsed_facts WHERE id = ".rand(1,1299);
#echo $sql ."  ";
$result = $conn->query($sql) or die ($conn->error);
$row = $result->fetch_assoc();

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Обогати общата си култура</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="Pictures/brain.ico" />
	</head>
	<body>

		<?php
			echo " <div id = \"welcome_window\" style=\"background-image: url(http://lorempixel.com/1920/1080/);\"> " ;
		?>	
			<h2>Култура на Деня </h2>

			<div class = "day_phrase">
				<div id = "day_text">
					<?php echo $row['information']; ?>
				</div>
			</div>
			<div id = "welcome_buttons">
				<div id = "web_search">
					<form action="https://www.google.com/search?q=" method = "GET">
					    <input id="field" name="q" type="text"/>
					    <input id="submit" name="submit" type="submit" value="Google Search" />
					</form>
				</div>
			
				<div id = "go_on">
						Продължи <!--към сайта-->
				</div>
			</div>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="javascript.js"></script>
		<script>
			$('#go_on').click(function() {
				$('.day_phrase').fadeOut(10);
				$('.day_phrase').fadeIn(250);
				$('#day_text').html(
					<?php
						$number = rand(1,1299);
						$sql = "SELECT id, information FROM parsed_facts WHERE id = ".$number;
						$result = $conn->query($sql) or die ($conn->error);
						$row = $result->fetch_assoc();
						echo "'{$row['information']}'";
					?>
				);		
			});
		</script>
	</body>
</html>