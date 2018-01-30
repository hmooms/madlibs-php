<!DOCTYPE html>
<html>
	
	<head>
		<<title>madlibs</title>
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

			<h3>Onkunde</h3>

			<article>

				<p>Er zijn veel mensen die niet kunnen <?php echo $_POST['kunnen']; ?>. Neem nou <?php echo $_POST['naam']; ?>. Zelfs met de hulp van een <?php echo $_POST['vakantie']; ?> of zelfs <?php echo $_POST['getal']; ?> kan <?php echo $_POST['naam']; ?> niet <?php echo $_POST['kunnen']; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST['eigenschap']; ?>, maar met een te veel aan <?php echo $_POST['slechste']; ?>. Te veel <?php echo $_POST['slechste']; ?> leidt tot <?php echo $_POST['overkomen']; ?> en dat is niet goed als je wilt <?php echo $_POST['kunnen']; ?>. Helaas voor <?php echo $_POST['naam']; ?>. </p>

			</article>

			<footer>Deze website was gemaakt door Spinoza.</footer>

		</main>

	</body>

</html>