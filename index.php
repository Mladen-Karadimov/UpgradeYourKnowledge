﻿<?php 
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
					    <input id="field" name="q" type="text" value = ""/>
					    <input id="submit" name="submit" type="submit" value="Google Search" />
					</form>
				</div>
			</div>
			
				<div class = "go_on">
						Продължи <!--към сайта-->
				</div>

				<div id = "plus">+</div>
		</div>

		<div id = "plus_menu">
			<div id = "left_part">
				<h2>Добави Факт</h2>
				<form action = "suggest_fact.php" method = "post">
					<input id = "add_fact" type = "text" name = "fact" autocomplete = "off" /><br>
					<input id = "suggest_fact" type = "submit" value = "Suggest" />
					
				</form>
			</div>
			<div id = "right_part">
				<h2>За Нас</h2>

				<div id = "about_us">
					<h3>Каква ни е целта?</h3>
						Идеята е вместо да се използва default или google homepage
						да се използва UpgradeYourKnowledge homepage-а, за да предостави
						на клиентите ни по един интересент факт, който би обогатил общата култура
						на всеки човек. Ние НЕ лишаваме хората от ползването на Google защото предлагаме
						и тяхната търсачка.
					<h3>Защо сайта е на 2 езика</h3>
						За момента нямаме голяма база, от която да взимаме достатъчно информация
						на български, но все пак оставяме основите на народния език. За на пред предстои
						развитие, което ще е напълно достатъчно за потребителя.
					<h3>Предоставя ли се възможност на потребителя да добави нещо в базата?</h3>
						Абсолютно ДА! Всеки желаещ може да добави нещо от себе си, което счита за
						полезно на останалите потребите.
					<h3>Планове за в бъдеще?</h3>
						Основната идея е цялото приложение да бъде предоставено до потребителя на български.
						Има още много идея, които биха задоволили, използващите този сайт, но са в процес на развите.
						Всеки, който намира интерес в проекта може да се присъедини в разработката му :)	
				</div>

			</div>
			<div class = "go_back">
				Go Back
			</div>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="javascript.js"></script>
		<script>
			var count = 0;
			$('.go_on').click(function() {
				$('.day_phrase').hide();
				$('.day_phrase').fadeIn(250);
				if(count) { location.reload();}	
				count++;		
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

			$("#plus").click(function() {
				$("#plus_menu").animate({
					top: "0"
				}, 200).delay(250);
				$(".go_back").css("display","block");
			});	

			$(".go_back").click(function() {
				$("#plus_menu").animate({
					top: "-100%"
				});
				$(".go_back").hide();
			})
	
		</script>
	</body>
</html>