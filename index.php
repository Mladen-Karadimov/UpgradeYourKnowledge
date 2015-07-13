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

$today_date = date("Y-m-d");
$sql = "SELECT id, date, information, picture FROM fact_table WHERE date = '{$today_date}'";
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="javascript.js"></script>

		<div id = "welcome_window">
			<h2>Култура на Деня </h2>

			<div id = "day_phrase">
				<div id = "day_text">
					<?php echo $row['information']; ?>
					<!-- Айфеловата кула е метална решетъчна кула с височина 324 m (заедно с антените, приблизително колкото 81-етажна сграда), издигната в северозападния край на парка „Марсово поле“ в Париж, край река Сена, в 7-ми арондисман. -->
				</div>
				<div id = "day_pic">

					<?php
						echo "<img src={$row['picture']}>";
					?>
				</div>
			</div>
			<div id = "welcome_buttons">

				<div id = "web_search">
					<form action="https://www.google.com/search" method = "get">	
						<input name="q" type="text" size="40" />
						<input type="submit" value="Google IT" />
					</form>
				
					<form action="https://www.youtube.com/results" method="get">
						<input type="text" maxlength="128" size = "40" />
						<input type="submit" value="Youtube IT" />
					</form>
				</div>
			
				<div id = "go_on">
						Продължи <!--към сайта-->
				</div>
			</div>
		</div>

		<div id = "top_menu">
			<img src = "Pictures/generalknowledge1.jpg">

			<div id = "menu_container">
				<ul>
					<li><a href="index.php">Начало</a></li>
					<li id = "facts"><a href = "#">Интересни Факти</a></li>
					<li>За Нас</li>
				</ul>
			</div>
		</div>

		<div id = "left">
		</div>
		<div id = "container">
			some text
		</div>
		<div id = "right">
		</div>

	</body>
</html>