<!DOCTYPE html>
<html>
	
	<head>
		<title>madlibs</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mphp.css">
		<link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
	</head>
		
	<body>

		<main>
			
			<h1>mad Libs</h1>

			<nav>
				 
				<ul>
					<li><a href="Madlibs-php.php">Er heerst paniek...</a></li>
					<li><a href="onkunde-php.php">Onkunde</a></li>
				</ul>
			
			</nav>

			<h3>Er heerst paniek...</h3>

			<article>

				<p>Er heerst paniek in het koninkrijk <?php echo $_POST['land']; ?>. Koning <?php echo $_POST['docent']; ?> is ten einde raad en als koning <?php echo $_POST['docent']; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['naam']; ?>.</p>

				<p>"<?php echo $_POST['naam']; ?>! Het is een ramp! Het is een schande!"</p>

				<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

				<p>"Mijn <?php echo $_POST['dier'] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['speelgoed']; ?> voor hem gekocht!"</p>

				<p>"Majesteit, uw <?php echo $_POST['dier']; ?> komt vast vanzelf weer terug?"</p>

				<p>"Ja da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezigheid']; ?> leren?"</p>

				<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['kopen']; ?> voor gebruiken."</p>

				<p>"<?php echo $_POST['naam']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

				<p>"<?php echo $_POST['verveelt']; ?>, Sire."</p>

			</article>

			<footer>Deze website was gemaakt door Spinoza.</footer>

		</main>

	</body>

</html>